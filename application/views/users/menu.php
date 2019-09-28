<?php
$url_1 = strtolower($this->uri->segment(1));
$url_2 = strtolower($this->uri->segment(2));
$url_3 = strtolower($this->uri->segment(3));
$level = $this->session->userdata('level');
?>
<style>
  .panel-collapse > ul > li{padding-left:20px;}
  .menu_active{background:#337ab7;color:#fff;}
  .submenu_active{background:#f1f1f1;color:#2196f3;}
</style>
<div id="navbar" class="panel panel-defaultx collapse navbar-collapse" style="padding:0px;">
  <div class="panel-heading collapse navbar-collapse">
  </div>
  <div class="panel-body">
    <ul class="nav nav-pills nav-stacked">
      <li<?php if($url_1=='beranda' or $url_1=='users' AND $url_2==''){echo ' class="active"';}?>>
        <a href=""><i class="fa fa-home"></i> Beranda</a>
      </li>
      <?php if ($level!=='admin'): ?>
        <li<?php if($url_1=='data' ){echo ' class="active"';}?>>
          <a href="data/v.html"><i class="fa fa-clipboard"></i> Usulan Biaya</a>
        </li>




        <li<?php if($url_1=='spm'){echo ' class="active"';}?>>
          <a href="spm/v.html"><i class="fa fa-file"></i> SPM</a>
        </li>


        
      <?php endif; ?>
      <?php if ($level=='admin'): ?>
        <li><hr style="margin:0px;"> </li>
        <li<?php if($url_1=='users' && $url_2=='view'){echo ' class="active"';}?>>
          <a href="users/view.html"><i class="fa fa-users"></i> Pengguna</a>
        </li>
      <?php endif; ?>
      <li><hr style="margin:0px;"> </li>
      <li<?php if($url_1=='users' AND $url_2=='profile'){echo ' class="active"';}?>>
        <a href="users/profile.html"><i class="fa fa-user"></i> Profile</a>
      </li>
      <li<?php if($url_1=='users' AND $url_2=='ubah_pass'){echo ' class="active"';}?>>
        <a href="users/ubah_pass.html"><i class="fa fa-key"></i> Ubah Password</a>
      </li>
      <li><hr style="margin:0px;"> </li>
      <li>
        <a href="web/logout.html" onclick="return confirm('Anda Yakin?');"><i class="fa fa-sign-out"></i> Logout</a>
      </li>
    </ul>
  </div>
</div>
