<div class="col-md-3"></div>
<div class="col-md-6">

<?php
$data_arr = array(
  'Nama Lengkap' => $query['nama_lengkap'],
  'Username'     => $query['username'],
  'Password'     => $query['password'],
  'Level'        => ucwords($query['level']),
  'Tanggal Input' => date('d-m-Y H:i:s',strtotime($query['tgl_user'])),
);
?>
  <table class="table table-bordered table-striped table-hover" width="100%">
    <tbody>
      <?php foreach ($data_arr as $key => $value): ?>
        <tr>
          <th width="120"><?php echo $key; ?></th>
          <th width="1">:</th>
          <td><?php echo $value; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

    <a href="<?php echo $url; ?>/view" class="btn btn-default" title="Kembali"><i class="fa fa-angle-double-left"></i> </a>
    <a href="<?php echo $url; ?>/view/e/<?php echo hashids_encrypt($query['id_user']); ?>" class="btn btn-success" style="float:right" title="Edit"><i class="fa fa-pencil"></i> </a>

</div>
<div class="col-md-3"></div>
