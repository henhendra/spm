 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>_</title> 
    <!-- <base href="<?php echo base_url(); ?>"> -->
    <link rel="icon" type="image/png" href="<?php echo $this->M_Web->view('favicon'); ?>"/>
    <link rel="stylesheet" href="assets/css/style_print.css">
    <!-- <style type="text/css" media="print">
      @page { size: landscape; }
    </style> -->
  </head>
  <body onload="window.print();setTimeout(window.close, 1000);">

    <center>
      <h5 style="margin-bottom:1px;margin-top:1px;">PEMERINTAH KABUPATEN SIGI </h5>
      <h4 style="margin-bottom:1px; margin-top:1px;">RUMAH SAKIT UMUM DAERAH TORA BELO</h4>
      <h6 style="margin-bottom:1px; margin-top:1px; border-right: 10px ">Alamat : Jl.Raya palu-palolo km.14 Sidera Kec.Sigi Biromaru Kode Pos 94364 Email:rsudsigi@gmail.com</h6>


    </center>

    <br> 


    <?php
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
      $upload = '<img src="'.$query['upload'].'">';
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

      <!-- <!-- <table class="table table-bordered table-striped table-hover" width="100%">
        <tbody>
          <?php foreach ($data_arr as $key => $value): ?>
            <tr>
              <th width="150" style="vertical-align:top;text-align:left"><?php echo $key; ?></th>
              <th width="1" style="vertical-align:top;text-align:left">:</th>
              <td><?php echo $value; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table> -->

  </body>
</html> 
