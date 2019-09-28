<div class="panel panel-default">
  <div class="panel-heading">
    <b><i class="fa fa-user"></i> Profile</b>
  </div>
  <div class="panel-body">
    <?php $this->M_Pesan->get('msg'); ?>

    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form class="form-horizontal" action="" method="post" data-parsley-validate="true">
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i>&nbsp;</span>
              <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $this->M_User->view('nama_lengkap'); ?>" placeholder="Nama Lengkap" title="Nama Lengkap" required autofocus onfocus="this.value=this.value">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group input-group">
              <span class="input-group-addon"><b>@</b></span>
              <input type="text" name="username" class="form-control" value="<?php echo $this->M_User->view('username'); ?>" placeholder="Username" title="Username" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group input-group">
              <span class="input-group-addon">&nbsp;<i class="fa fa-map-marker"></i>&nbsp;</span>
              <input type="text" name="level" class="form-control" value="<?php echo ucwords($this->M_User->view('level')); ?>" placeholder="Level" title="Level" readonly>
            </div>
          </div>
        </div>
        <button type="submit" name="btnsimpan" class="btn btn-primary" style="width:100%">Update</button>
      </form>
    </div>

  </div>
</div>
