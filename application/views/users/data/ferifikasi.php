<?php $this->M_Pesan->get('msg'); ?>
<div class="col-md-3"></div>
<div class="col-md-6">
  <form class="form-horizontal" action="" method="post" data-parsley-validate="true">
    <div class="form-group">
      <div class="col-md-2"></div>
      <div class="col-md-4">
        <button name="btn_ya" class="btn btn-success" required style="width:100%;"><i class="fa fa-check"></i> Setuju</button>
      </div>
      <div class="col-md-4">
        <button name="btn_tidak" class="btn btn-danger" required style="width:100%;"><i class="fa fa-close"></i> Tidak Setuju</button>
      </div>
      <div class="col-md-2"></div>
    </div>
    <hr>
    <div class="form-group">
      <div class="col-md-6">
        <a href="<?php echo $url; ?>/v" class="btn btn-default"><i class="fa fa-angle-double-left"></i> </a>
      </div>
    </div>
  </form>
</div>
<div class="col-md-3"></div>
