<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">



    <title>-</title>

    <!-- <title><?php echo $judul_web; ?></title> -->

    <base href="<?php echo base_url(); ?>">

    <link rel="icon" type="image/png" href="<?php echo $this->M_Web->view('favicon'); ?>"/>

    <link rel="stylesheet" href="assets/css/style_print.css">

    <!-- <style type="text/css" media="print">

      @page { size: landscape; }

    </style> -->

  </head>

  <body onload="window.print();setTimeout(window.close, 1000);">


<img src="img/kopsurat.jpg" align="left" width="7%" height="4%"  ALIGN=”right”
style="margin-right: 30px;">
<BR CLEAR=”left” />
<BR CLEAR="right" />
    <center>

      <h3 style="margin-bottom:1px; margin-left: 5px">PEMERINTAHAN KABUPATEN SIGI</h3>
      <h2 style="margin-bottom:1px; margin-top: 1px">RUMAH SAKIT UMUM DAERAH TORA BELO</h2>
      <h6 style="margin-top:1px;margin-bottom: 2px">Alamat : Jl. Raya Palu-palolo Km 14 Sidera Kec.Sigibiromaru Kodepos : 94364, Email : rsudsigi@gmail.com</h6>
      <style>
   div{
     width: 1000px;
     margin-top: 2px;
     margin-bottom: 10px;
   }
   .satu { border: 2px solid black; }
   
</style>
<body>
<div class="satu"></div>
</body>

      <h5 style="margin-top:5px;margin-bottom: 10px">SURAT PERINTAH MEMBAYAR</h5>

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

//Penambahan untuk edit ppn dan pph 

      'tahun_anggaran'        => $query['tahun_anggaran'],

      'nomor_spm'        => $query['nomor_spm'],

      'no_rekening'  => $query['no_rekening'],

      'nama_bank'        => $query['nama_bank'],

      'npwp_perusahaan'        => $query['npwp_perusahaan'],

      'jumlah_potongan_pajak'  => $query['jumlah_potongan_pajak'],

      'dasar_pembayaran'        => $query['dasar_pembayaran'],
      'ps_21'                   => $query['ps_21'],
      'ps_22'                   =>  $query['ps_22'],
      'ps_23'                   =>  $query['ps_23'],
      'ps_4_2'                  =>  $query['ps_4_2'],
      'jumlah_yang_dibayar'     => $query['jumlah_yang_dibayar'],



      


    );

?>
<table class="table table-bordered table-striped table-hover" width="100%">
  <tbody>
     <tr> 
      <td width="50%">Tahun Anggaran: <?php echo $query['tahun_anggaran']; ?></td>
      <td width="50%">Nomor SPM : <?php echo $query['nomor_spm']; ?></td>
     </tr> 
     </tbody>
</table>
<table class="table table-bordered table-striped table-hover" width="100%">
    <tbody>
      <tr>
       <td width="100%">Pengguna Anggaran BLUD RSUD Kabupaten Sigi memerintahan kepada Bendahara Pengeluaran untuk mengeluarkan sejumlah uang : </td>
     </tr>
    </tbody>
</table>
<table class="table table-bordered table-striped table-hover" width="100%">
    <tbody>
      <tr>
      <tr>
      <td width="50%">Untuk Keperluan</td> <td width="50%"> :<?php echo $query['jenis_belanja'] ?></td>
      </tr>
      <tr>
       <td>No Rek</td> <td> : <?php echo $query['no_rekening']; ?> </td>
      </tr>
      <tr>
       <td>Nama Bank</td> <td> : <?php echo $query['nama_bank']; ?></td>
     </tr>
     <tr>
       <td>NPWP/ Perusahaan</td> <td> : <?php echo $query['npwp_perusahaan']; ?></td>
      </tr>
      <tr>
       <td>Dasar Pembayaran</td> <td> : <?php echo $query['dasar_pembayaran']; ?></td>
     </tr>
     </tr>
    </tbody>
</table>
<table class="table table-bordered table-striped table-hover" width="100%">
    <tbody>
      <tr>
       <td align="center" width="" ="100%">Pembebanan pada Kode Rekening : </td>
     </tr>
    </tbody>
</table>
<table class="table table-bordered table-striped table-hover" width="100%">
    <tbody>
      <tr>
       <th width="20%">Kode Rekening</th>
       <th width="60%">Uraian</th>
       <th width="20%">Jumlah</th>
     </tr>
     <tr>
       <th width="20%">5.2.1.07.01</th>
       <th width="60%"> <?php echo $query['uraian']; ?></th>
       <th width="20%"><?php echo $query['jumlah']; ?></th>
     </tr>
     <tr>
       <th width="20%">- </th>
       <th width="60%"> Jumlah : </th>
       <th width="20%"><?php echo $query['jumlah']; ?></th>
     </tr>
    </tbody>
</table>
<table class="table table-bordered table-striped table-hover" width="100%">
    <tbody>
      <tr>
       <td align="left" width="" ="100%">SPM Yang Dibayarkan : </td>
     </tr>
    </tbody>
</table>
<table class="table table-bordered table-striped table-hover" width="100%">
    <tbody>
      <tr>
       <th width="20%">Jumlah Yang Diminta</th>
       <th width="60%"><?php echo $query['jumlah']; ?></th>
       <th width="20%">-</th>
     </tr>
     <tr>
       <th width="20%"> Jumlah Potongan Pajak Pertambahan nilai (PPN) </th>
       <th width="60%"><?php echo $query['jumlah_potongan_pajak'];  ?></th>
       <th width="20%">- </th>
     </tr>
     <tr>
       <th width="20%">Pajak Penghasilan Ps.21</th>
       <th width="60%"> <?php echo $query['ps_21'];  ?> </th>
       <th width="20%">-</th>
     </tr>
     <tr>
       <th width="20%">Pajak Penghasilan Ps.22</th>
       <th width="60%"> <?php echo $query['ps_22'];  ?> </th>
       <th width="20%">-</th>
     </tr>
     <tr>
       <th width="20%">Pajak Penghasilan Ps.23</th>
       <th width="60%"> <?php echo $query['ps_23'];  ?> </th>
       <th width="20%">-</th>
     </tr>
     <tr>
       <th width="20%">Pajak Penghasilan Ps.4(2)</th>
       <th width="60%"> <?php echo $query['ps_4_2'];  ?> </th>
       <th width="20%">-</th>
     </tr>
     <tr>
       <th width="20%">Jumlah Yang Dibayarkan</th>
       <th width="60%"><?php echo $query['jumlah_yang_dibayar']; ?> </th>
       <th width="20%">-</th>
     </tr>
    </tbody>
</table>
<table class="table table-bordered table-striped table-hover" width="100%">
    <tbody>
      <tr>
       <td align="left" width="" ="100%">Jumlah SSP yang di Minta  : <?php echo $query['jumlah']; ?> </td>


       <td align="left" width="" ="50%"><b>Terbilang : </b>    <?php function penyebut($nilai) {
    $nilai = abs($nilai);
    $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
    $temp = "";
    if ($nilai < 12) {
      $temp = " ". $huruf[$nilai];
    } else if ($nilai <20) {
      $temp = penyebut($nilai - 10). " Belas";
    } else if ($nilai < 100) {
      $temp = penyebut($nilai/10)." Puluh". penyebut($nilai % 10);
    } else if ($nilai < 200) {
      $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
      $temp = penyebut($nilai/100) . " Ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
      $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
      $temp = penyebut($nilai/1000) . " Ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
      $temp = penyebut($nilai/1000000) . " Juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
      $temp = penyebut($nilai/1000000000) . " Milyar" . penyebut(fmod($nilai,1000000000));
    } else if ($nilai < 1000000000000000) {
      $temp = penyebut($nilai/1000000000000) . " Trilyun" . penyebut(fmod($nilai,1000000000000));
    }     
    return $temp;
  }
 
  function terbilang($nilai) {
    if($nilai<0) {
      $hasil = "minus ". trim(penyebut($nilai));
    } else {
      $hasil = trim(penyebut($nilai));
    }         
    return $hasil;
  }
 
  echo terbilang($query['jumlah']);
  ?>

   </td>






     </tr>
    </tbody>
</table>
<table class="table table-bordered table-striped table-hover" width="100%">
    <tbody>
      <tr>
       <th width="30%">Uraian</th>
       <th width="15%">Tanggal </th>
       <th width="10%"> Jam </th>
       <th width="15">Paraf</th>
       <th width="30">Ket</th>
     </tr>
     <tr>
       <th width="30%">Di ferifikasi</th>
       <th width="15%"><?php echo date("d-m-Y"); ?> </th>
       <th width="10%"> - </th>
       <th width="15">-</th>
       <th width="30">Ka Sub Keuangan</th>
     </tr>
     <tr>
       <th width="30%">Di setujui</th>
       <th width="15%"><?php echo date("d-m-Y"); ?></th>
       <th width="10%"> - </th>
       <th width="15">-</th>
       <th width="30"> Penjabat Keuangan</th>
     </tr>
     <tr>
       <th width="30%">Disetujui</th>
       <th width="15%"><?php echo date("d-m-Y"); ?> </th>
       <th width="10%">-</th>
       <th width="15">-</th>
       <th width="30">Direktur</th>
     </tr>
    </tbody>
</table>





  <h5 style="text-align: right; margin-bottom: 1px; width: 900px">Sigi,<?php echo date("d-m-Y"); ?> </h5>
  <h5 style="text-align: center; margin-bottom: 1px; margin-top:1px; width: 1750px">Pimpinan BUD RSUD Tora Belo</h5>
  <h5 style="text-align: right; margin-bottom: 80px; margin-top:1px; width: 910px">Kabupaten Sigi</h5>
 
  <h5 style="text-align-last: right ; margin-bottom: 1px; margin-top: 80px; width: 935px"><u>dr, Graf R.F.Beba,MPH</u></h5>
  <h5 style="text-align-last: right ; margin-bottom: 1px; margin-top: 1px; width: 945px">NIP.19630126 200112 1 002</h5>
  
  




      


      

       <!-- <table class="table table-bordered table-striped table-hover" width="100%">

        <tbody>

          <?php foreach ($data_arr as $key => $value): ?>

            <tr>

              <th width="150" style="vertical-align:top;text-align:left"><?php echo $key; ?></th>

              <th width="1" style="vertical-align:top;text-align:left">:</th>

              <td><?php echo $value; ?></td>

            </tr>

          <?php endforeach; ?>

        </tbody>

      </table> 
 -->


  </body>

</html>

