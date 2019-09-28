<?php $level = $this->session->userdata('level'); ?>
<div class="wrap">

<?php if ($level!=='admin'): ?>
  <div class="col-md-6">
    <a href="data/v.html">
      <div class="box bg-blue">
        <div class="bg-icon"><i class="fa fa-clipboard"></i></div>
        <label>Usulan Biaya</label>
      </div>
    </a>
  </div>

  <div class="col-md-6">
    <a href="spm/v.html">
      <div class="box bg-cyan">
        <div class="bg-icon"><i class="fa fa-file"></i></div>
        <label>SPM</label>
      </div>
    </a>
  </div>
<?php endif; ?>

<?php if ($level=='admin'): ?>
  <div class="col-md-12">
    <a href="users/view.html">
      <div class="box bg-red">
        <div class="bg-icon"><i class="fa fa-users"></i></div>
        <label>Pengguna</label>
      </div>
    </a>
  </div>
<?php endif; ?>

  <div class="col-md-4">
    <a href="users/profile">
      <div class="box bg-purple">
        <div class="bg-icon"><i class="fa fa-user"></i></div>
        <label>Profile</label>
      </div>
    </a>
  </div>

  <div class="col-md-4">
    <a href="users/ubah_pass">
      <div class="box bg-yellow">
        <div class="bg-icon"><i class="fa fa-key"></i></div>
        <label>Ubah Password</label>
      </div>
    </a>
  </div>

  <div class="col-md-4">
    <a href="web/logout" onclick="return confirm('Anda Yakin?');">
      <div class="box bg-black">
        <div class="bg-icon"><i class="fa fa-sign-out"></i></div>
        <label>Logout</label>
      </div>
    </a>
  </div>

</div>
