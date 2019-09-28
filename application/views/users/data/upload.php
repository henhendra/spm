<?php $this->M_Pesan->get('msg'); ?>
<div class="col-md-3"></div>
<div class="col-md-6">
  <form class="form-horizontal" action="" method="post" data-parsley-validate="true" enctype="multipart/form-data">
    <div class="form-group">
      <div class="col-md-12">
        <label>Upload Bukti Kwitansi</label>
        <input type="file" name="file" class="form-control" value="" required>
      </div>
    </div>
    <hr>
    <div class="form-group">
      <div class="col-md-6">
        <a href="<?php echo $url; ?>/v" class="btn btn-default"><i class="fa fa-angle-double-left"></i> </a>
      </div>
      <div class="col-md-6">
        <button type="submit" name="btnupload" class="btn btn-primary" style="float:right">Upload</button>
      </div>
    </div>
  </form>
</div>
<div class="col-md-3"></div>
