<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Select extends CI_Model {

  public function bln($id='')
  {
    for ($i=1; $i <=12; $i++) { if ($i<10) { $i = "0".$i; } ?>
      <option value="<?php echo $i; ?>" <?php if($i==$id){echo "selected";} ?>><?php echo $this->M_Web->bln_id($i); ?></option> <?php
    }
  }

  public function thn($min,$max,$id='')
  {
    for ($i=$max; $i >=$min; $i--) { ?>
      <option value="<?php echo $i; ?>" <?php if($i==$id){echo "selected";} ?>><?php echo $i; ?></option> <?php
    }
  }

  public function option($data='',$id='',$html='')
	{?>
    <select class="form-control default-select2" name="<?php echo $data; ?>" <?php echo $html; ?>>
      <option value="">- Pilih <?php echo ucwords($data); ?> -</option>
      <?php
      if ($data=='bulan'){
        $this->bln($id);
      }elseif ($data=='tahun'){
        $min = $this->M_Penjualan->get('','thn','ASC','1');
        if ($min->num_rows()==0) { $min=date('Y'); }else { $min=$min->row()->thn; }
        $max = date('Y');
        $this->thn($min,$max,$id);
      } ?>
    </select> <?php
	}

  public function level($id='',$html='')
	{?>
    <select class="form-control default-select2" name="level" <?php echo $html; ?>>
      <option value="">- Pilih Level -</option>
      <?php
      $data = array('admin','user','pengusulan','direktur');
      foreach ($data as $key => $value): ?>
        <option value="<?php echo $value; ?>" <?php if($value==$id){echo "selected";} ?>><?php echo ucwords($value); ?></option>
      <?php
      endforeach; ?>
    </select> <?php
	}

  public function pilih($name='',$id='',$html='')
	{?>
    <select class="form-control default-select2" name="<?php echo $name; ?>" <?php echo $html; ?>>
      <option value="">- Pilih -</option>
      <?php
      $data = array('Setuju','Tidak Setuju');
      foreach ($data as $key => $value): ?>
        <option value="<?php echo $value; ?>" <?php if($value==$id){echo "selected";} ?>><?php echo ucwords($value); ?></option>
      <?php
      endforeach; ?>
    </select> <?php
	}

}
