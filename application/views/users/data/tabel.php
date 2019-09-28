<style>
  table > thead > tr > th {font-size: 12px;}
  table > tbody > tr > td {font-size: 10px;}
</style>
<?php $level 	 = $this->session->userdata('level');
if($level=='user'){ ?>
<a href="<?php echo $url; ?>/v/t" class="btn btn-primary">+ <?php echo $judul_web; ?></a>
<hr>
<?php } ?>
<?php $this->M_Pesan->get('msg'); ?>
<div class="table-responsive">
  <table id="data_tables" class="table table-bordered table-striped table-hover" width="100%">
    <thead>
      <tr>
        <th width="1%">No.</th>
        <th>Jenis Belanja</th>
        <th>Tgl.Usulan</th>
        <th>Uraian</th>
        <th>Ferifikasi_t_usaha</th>
        <th>Ferifikasi_k_perencanaan</th>
        <th>Volume</th>
        <th>Satuan</th>
        <th>Harga Satuan</th>
        <th>Jumlah</th>
        <th width="200">Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no=1;
      foreach ($query->result() as $key => $value) {
        $id_pk = hashids_encrypt($value->id_data); ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $value->jenis_belanja; ?></td>
          <td><?php echo $value->tgl_usulan; ?></td>
          <td><?php echo $value->uraian; ?></td>
          <td><?php echo $value->ferifikasi_t_usaha; ?></td>
          <td><?php echo $value->ferifikasi_k_perencanaan; ?></td>
          <td><?php echo $value->volume; ?></td>
          <td><?php echo $value->satuan; ?></td>
          <td><?php echo $value->harga_satuan; ?></td>
          <td><?php echo $value->jumlah; ?></td>
          <td class="text-center">
            <a href="<?php echo $url; ?>/v/d/<?php echo $id_pk; ?>" class="btn btn-info btn-xs" title="Detail"><i class="fa fa-list"></i></a>
            <?php if ($value->status==3){ ?>
              <a href="javascript:void(0);" class="btn btn-success btn-xs" title="Disetujui"><i class="fa fa-check"></i></a>
            <?php }elseif ($value->status==4){ ?>
              <a href="javascript:void(0);" class="btn btn-danger btn-xs" title="Tidak Disetujui"><i class="fa fa-close"></i></a>
            <?php }else{ ?>
              <?php if ($level=='user'): ?>
              <a href="<?php echo $url; ?>/v/e/<?php echo $id_pk; ?>" class="btn btn-success btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>


              <a href="<?php echo $url; ?>/v/h/<?php echo $id_pk; ?>" class="btn btn-danger btn-xs" title="Hapus" onclick="return confirm('Anda Yakin?');"><i class="fa fa-trash"></i></a>
              <?php endif; ?>
              <?php if ($level=='pengusulan'): ?>
                <?php if ($value->status==1): ?>

                  <a href="<?php echo $url; ?>/v/t/<?php echo $id_pk; ?>" class="btn btn-success btn-xs" title="Edit">Edit 2</a>


                  <a href="<?php echo $url; ?>/v/u/<?php echo $id_pk; ?>" class="btn btn-primary btn-xs" title="Upload"><i class="fa fa-cloud-upload"></i></a>
                <?php endif; ?>
              <?php endif; ?>
              <?php if ($level=='direktur'): ?>
                <?php if ($value->status==2): ?>
                  <a href="<?php echo $url; ?>/v/f/<?php echo $id_pk; ?>" class="btn btn-success btn-xs" title="Ferifikasi"><i class="fa fa-file"></i></a>
                <?php endif; ?>
              <?php endif; ?>
            <?php } ?>
          </td>
        </tr>
      <?php
      } ?>
    </tbody>
  </table>
</div>
