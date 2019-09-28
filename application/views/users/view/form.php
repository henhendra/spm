<?php $this->M_Pesan->get('msg'); ?>
<div class="col-md-3"></div>
<div class="col-md-6">
  <form class="form-horizontal" action="" method="post" data-parsley-validate="true">
    <div class="form-group">
      <div class="col-md-12">
        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $query['nama_lengkap']; ?>" required autofocus onfocus="this.value=this.value">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <label>Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $query['username']; ?>" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <label>Password</label>
        <input type="password" name="pass1" class="form-control" value="" <?php if($query['id_user']==''){echo "required";} ?>>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <label>Ulangi Password</label>
        <input type="password" name="pass2" class="form-control" value="" <?php if($query['id_user']==''){echo "required";} ?>>
      </div>
    </div>
    <div class="form-group" hidden>
      <div class="col-md-12">
        <label>Level</label>
        <?php echo $this->M_Select->level($query['level'],'required'); ?>
      </div>
    </div>
    <hr>
    <div class="form-group">
      <div class="col-md-6">
        <a href="<?php echo $url; ?>/view.html" class="btn btn-default"><i class="fa fa-angle-double-left"></i> </a>
      </div>
      <div class="col-md-6">
        <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right">Simpan</button>
      </div>
    </div>
  </form>
</div>
<div class="col-md-3"></div>
