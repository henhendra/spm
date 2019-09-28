<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spm extends CI_Controller {

	var $view 	= "users";
	var $re_log = "web/login";
	var $folder = "spm";
	var $judul  = "SPM";

  public function index()
	{
		$id_user = $this->session->userdata('id_user');
		if(!isset($id_user)) { redirect("$this->re_log"); }else {
      redirect("$this->folder/v");
    }
	}

	public function v($aksi='',$id='')
	{
    $id = hashids_decrypt($id);
		$id_user = $this->session->userdata('id_user');
		$level 	 = $this->session->userdata('level');
		if(!isset($id_user)) { redirect("$this->re_log"); }






      $judul = $this->judul;
      $p = "tabel";
			$this->db->where('status',3);
      $query = $this->M_Data->get();

		$data = array(
			'judul_web' 	=> $judul,
			'content'		=> "$this->view/$this->folder/index",
      		'view'      	=> "$this->view/$this->folder/$p",
			'query'		  	=> $query,
			'url'			=> 'spm'
		);
		$this->load->view("$this->view/index", $data);

	}




	public function cetak($id='')
	{
    $id = hashids_decrypt($id);
		$id_user = $this->session->userdata('id_user');
		$level 	 = $this->session->userdata('level');
		if(!isset($id_user)) { redirect("$this->re_log"); }

			$query = $this->M_Data->get_field($id);
			if ($query['id_data']=='' || $query['status']!='3') {
				redirect();
			}
      $judul = $this->judul;
      $p = "cetak";

		$data = array(
			'judul_web' => $judul,
			'query'		  => $query,
			'url'				=> 'spm'
		);
		$this->load->view("$this->view/$this->folder/$p", $data);
	}




	public function v1($aksi='',$id='')
	{
    $id = hashids_decrypt($id);
		$id_user = $this->session->userdata('id_user');
		$level 	 = $this->session->userdata('level');
		if(!isset($id_user)) { redirect("$this->re_log"); }

    $query = $this->M_Data->get_field($id);
    if ($aksi=='t' or $aksi=='e' or $aksi=='d' or $aksi=='u' or $aksi=='f') {
      $p = "form";
      if ($aksi=='t') {
				if ($level!=='user') { redirect('404'); }
        $judul = "Tambah ";
      }elseif ($aksi=='e') {
				if ($level!=='user') { redirect('404'); }
        $judul = "Edit ";
      }elseif ($aksi=='u') {
				if ($level!=='pengusulan') { redirect('404'); }
				if ($query['status']==1) {
        	$judul = "Upload "; $p = "upload";
				}else{ redirect('404'); }
      }elseif ($aksi=='f') {
				if ($level!=='direktur') { redirect('404'); }
				if ($query['status']==2) {
        	$judul = "Ferifikasi "; $p = "ferifikasi";
				}else{ redirect('404'); }
      }else {
        $p = "detail";
        $judul = "Detail ";
      }
      $judul .= $this->judul;
    }elseif ($aksi=='h') {
			if ($level!=='user') { redirect('404'); }
      if ($this->M_Data->get($id)->num_rows()!=0) {
				unlink($query['upload']);
        $this->M_Data->delete(array('id_data'=>$id));
        $this->M_Pesan->add('success','msg','Sukses!',"Data berhasil dihapus","$this->folder/v");
      }else {
        redirect('404');
      }
    }else {
      $judul = $this->judul;
      $p = "tabel";
      $query = $this->M_Data->get($id);
    }

		$data = array(
			'judul_web' => $judul,
			'content'		=> "$this->view/$this->folder/index",
      'view'      => "$this->view/$this->folder/$p",
			'query'		  => $query,
			'url'				=> 'data'
		);
		$this->load->view("$this->view/index", $data);

    if (isset($_POST['btnsimpan'])) {
			$this->db->trans_begin();
			$post = array();
			foreach ( $_POST as $key => $value )
			{
				if($key!='btnsimpan'){
					$post[$key] = htmlentities(strip_tags($this->input->post($key)));
				}
			}
			$post['tgl_usulan'] = date('Y-m-d',strtotime(htmlentities(strip_tags($this->input->post('tgl_usulan')))));
			if ($aksi=='t') {
				$post['status']   = 1;
				$post['tgl_data'] = $this->M_Web->tgl_now();
				$simpan = $this->M_Data->save($post);
			}elseif ($aksi=='e') {
				$simpan = $this->M_Data->update($post, array('id_data'=>$id));
      }else {
				redirect('404');
			}
			if ($simpan) {
				$this->db->trans_commit();
        $this->M_Pesan->add('success','msg','Sukses!',"Data berhasil disimpan","$this->folder/v");
      }else {
				$this->db->trans_rollback();
        $this->M_Pesan->add('danger','msg','Gagal!',"Silahkan coba lagi","$this->folder/v/$aksi/".hashids_encrypt($id));
      }
    }

		if (isset($_POST['btnupload'])) {
			$file_size = 1024 * 5;
			$this->upload->initialize(array(
				"upload_path"   => "./img/upload",
				"allowed_types" => "jpg|jpeg|png|pdf",
				"max_size" => "$file_size",
				"remove_spaces" => TRUE,
				"encrypt_name" => TRUE,
			));
			$this->db->trans_begin();

					if ( $this->upload->do_upload("file"))
					{
							$uploadData = $this->upload->data();
							$filename = "img/upload/".$uploadData['file_name'];
							$file = preg_replace('/ /', '_', $filename);
					}else {
						$error = $this->upload->display_errors();
						$this->M_Pesan->add('danger','msg','Gagal!',$error,"$this->folder/v/$aksi/".hashids_encrypt($id));
		      }

			$data = array('upload'=>$file,'tgl_upload'=>$this->M_Web->tgl_now(),'status'=>2);
			if ($aksi=='u') {
				$simpan = $this->M_Data->update($data, array('id_data'=>$id));
      }else {
				redirect('404');
			}
			if ($simpan) {
				$this->db->trans_commit();
        $this->M_Pesan->add('success','msg','Sukses!',"Data berhasil diupload","$this->folder/v");
      }else {
				$this->db->trans_rollback();
        $this->M_Pesan->add('danger','msg','Gagal!',"Silahkan coba lagi","$this->folder/v/$aksi/".hashids_encrypt($id));
      }
    }

		if (isset($_POST['btn_ya'])) {
			$data = array('status'=>3, 'tgl_ferifikasi_direktur'=>$this->M_Web->tgl_now());
			$this->M_Data->update($data, array('id_data'=>$id));
			$this->M_Pesan->add('success','msg','Sukses!',"Data berhasil diupload","$this->folder/v");
		}
		if (isset($_POST['btn_tidak'])) {
			$data = array('status'=>4, 'tgl_ferifikasi_direktur'=>$this->M_Web->tgl_now());
			$this->M_Data->update($data, array('id_data'=>$id));
			$this->M_Pesan->add('success','msg','Sukses!',"Data berhasil diupload","$this->folder/v");
		}

	}

}



