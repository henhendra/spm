<div class="col-md-3"></div>
<div class="col-md-6">

<?php
$level 	 = $this->session->userdata('level');
if ($query['status']==3) {
  $status = 'Disetujui';
}elseif ($query['status']==4) {
  $status = 'Tidak Disetujui';
}else {
  $status = 'Proses. . .';
}

if ($query['upload']=='') {
  $upload = '-';
}else {
  $upload = '<a href="'.$query['upload'].'" class="btn btn-primary" target="_blank"><i class="fa fa-image"></i></a>';
}
$data_arr = array(
  'Jenis Belanja' => $query['jenis_belanja'],
  'Tgl Usulan'    => $query['tgl_usulan'],
  'Uraian'        => $query['uraian'],
  'Ferifikasi Tata Usaha' => $query['ferifikasi_t_usaha'],
  'Ferifikasi Ke Perencanaan' => $query['ferifikasi_k_perencanaan'],
  'Volume'        => $query['volume'],
  'Satuan'        => $query['satuan'],
  'Harga Satuan'  => $query['harga_satuan'],
  'Jumlah'        => $query['jumlah'],
  'Status'        => "<b>$status</b>",
  'Bukti Kwitansi' => $upload,
);
?>

  <table class="table table-bordered table-striped table-hover" width="100%">
    <tbody>
      <?php foreach ($data_arr as $key => $value): ?>
        <tr>
          <th width="150"><?php echo $key; ?></th>
          <th width="1">:</th>
          <td><?php echo $value; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

    <a href="<?php echo $url; ?>/v" class="btn btn-default" title="Kembali"><i class="fa fa-angle-double-left"></i> </a>

</div>
<div class="col-md-3"></div>
