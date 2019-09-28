<?php $this->M_Pesan->get('msg'); ?>
<div class="col-md-3"></div>
<div class="col-md-6">
  <form class="form-horizontal" action="" method="post" data-parsley-validate="true">
    <div class="form-group">
      <div class="col-md-12">



         <label>Jenis Biaya</label>
         <input type="text" name="jenis_belanja" class="form-control" value="<?php echo $query['jenis_belanja']; ?>" required autofocus onfocus="this.value=this.value"> 



      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <label>Tanggal Usulan</label>
        <input type="text" name="tgl_usulan" id="tgl_1" class="form-control" value="<?php if($query['id_data']==''){echo date('d-m-Y');}else{echo date('d-m-Y',strtotime($query['tgl_usulan']));} ?>" required readonly style="background:#fff;">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <label>Uraian</label>
        <input type="text" name="uraian" class="form-control" value="<?php echo $query['uraian']; ?>" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <label>Ferifikasi Tata Usaha</label>
        <?php echo $this->M_Select->pilih('ferifikasi_t_usaha',$query['ferifikasi_t_usaha'],'required'); ?>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <label>Ferifikasi Ke Perencanaan</label>
        <?php echo $this->M_Select->pilih('ferifikasi_k_perencanaan',$query['ferifikasi_k_perencanaan'],'required'); ?>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <label>Volume</label>
        <input type="number" name="volume" class="form-control" value="<?php echo $query['volume']; ?>" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <label>Satuan</label>
        <input type="text" name="satuan" class="form-control" value="<?php echo $query['satuan']; ?>" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <label>Harga Satuan</label>
        <input type="number" name="harga_satuan" class="form-control" value="<?php echo $query['harga_satuan']; ?>" required>
        <a onclick="hitung()" class="btn btn-danger">Hitung</a>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <label>Jumlah</label>
        <input type="number" name="jumlah" class="form-control" value="<?php echo $query['jumlah']; ?>" required readonly style="background:#fff;">
      </div>
    </div>
    <hr>
    <div class="form-group">
      <div class="col-md-6">
        <a href="<?php echo $url; ?>/v" class="btn btn-default"><i class="fa fa-angle-double-left"></i> </a>
      </div>
      <div class="col-md-6">
        <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right">Simpan</button>
      </div>
    </div>
  </form>
</div>
<div class="col-md-3"></div>


<script type="text/javascript">
  function hitung()
  {
    val1 = $('[name="volume"]').val();
    val2 = $('[name="harga_satuan"]').val();
    var kali = parseInt(val1) * parseInt(val2);
  	if ( val1 != "" && val2 != "" ) {
  	   $('[name="jumlah"]').val(kali);
  	}
  }
</script>
