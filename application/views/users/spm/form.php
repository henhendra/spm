


<?php $this->M_Pesan->get('msg'); ?>
<div class="col-md-3"></div>
<div class="col-md-6">
  <form class="form-horizontal" action="" method="post" data-parsley-validate="true">
    
   <div class="form-group">
      <div class="col-md-12">
         <label>Jumlah</label>
         <input type="number" name="Jumlah" class="form-control" value="<?php echo $query['jumlah']; ?>" required readonly style="background:#fff;"> 
      </div>
    </div>




    <div class="form-group">
      <div class="col-md-12">
         <label>Tahun Anggaran</label>
         <input type="text" name="tahun_anggaran" class="form-control" value="<?php echo $query['tahun_anggaran']; ?>"required> 
      </div>
    </div>


    <div class="form-group">
      <div class="col-md-12">
        <label>Nomor SPM</label>
        <input type="text" name="nomor_spm" class="form-control" value="<?php echo $query['nomor_spm']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-12">
        <label>Nomor Rekening</label>
        <input type="text" name="no_rekening" class="form-control" value="<?php echo $query['no_rekening']; ?>" required>
      </div>
    </div>


    



    <div class="form-group">
      <div class="col-md-12">
        <label>Nama Bank</label>
        <input type="text" name="nama_bank" class="form-control" value="<?php echo $query['nama_bank']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-12">
        <label>NPWP Perusahaan</label>
        <input type="text" name="npwp_perusahaan" class="form-control" value="<?php echo $query['npwp_perusahaan']; ?>" required>
      </div>
    </div>




    <div class="form-group">
      <div class="col-md-12">
        <label>Jumlah Potongan Pajak</label>
      
       <input type="text" name="jumlah_potongan_pajak" class="form-control" value="<?php echo $query['jumlah_potongan_pajak']; ?>">
       <a onclick="cekppn()" class="btn btn-danger">cekppn</a>  

      </div>
    </div>

    <div class="form-group">
      <div class="col-md-12">
        <label>Ps 21</label>
        <input type="text" name="ps_21" class="form-control" value="<?php echo $query['ps_21']; ?>">
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-12">
        <label>Ps 22</label>
        <input type="text" name="ps_22" class="form-control" value="<?php echo $query['ps_22']; ?>"> 
        <a onclick="cekps22()" class="btn btn-danger">cek-ps-22</a>
      </div>
    </div>


    <div class="form-group">
      <div class="col-md-12">
        <label>Ps 23</label>
        <input type="text" name="ps_23" class="form-control" value="<?php echo $query['ps_23']; ?>"> 
        <a onclick="cekps23()" class="btn btn-danger">cek-ps-23</a>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-12">
        <label>Ps 4 (2)</label>
        <input type="text" name="ps_4_2" class="form-control" value="<?php echo $query['ps_4_2']; ?>"> 
        <a onclick="cekps42()" class="btn btn-danger">cek-ps-4.2</a>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-12">
        <label>Jumlah Yang dibayar</label>
        <input type="text" name="jumlah_yang_dibayar" class="form-control" value="<?php echo $query['jumlah_yang_dibayar']; ?>"> 
        <a onclick="bayar()" class="btn btn-primary">jumlah yang dibayar</a>
      </div>
    </div>



    <div class="form-group">
      <div class="col-md-12">
        <label>Dasar Pembayarank</label>
        <input type="text" name="dasar_pembayaran" class="form-control" value="<?php echo $query['dasar_pembayaran']; ?>" required>
      </div>
    </div>


    
    <div class="form-group">
      <div class="col-md-6">
        <a href="<?php echo $url; ?>/v" class="btn btn-default"><i class="fa fa-angle-double-left"></i> </a>
      </div>
      <div class="col-md-6">
        <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right">Simpan</button>
      </div>
    </div>
  </form>
</div>
<div class="col-md-3"></div>


<script type="text/javascript">
  function hitung()
  {
    val1 = $('[name="volume"]').val();
    val2 = $('[name="harga_satuan"]').val();
    var kali = parseInt(val1) * parseInt(val2);
  	if ( val1 != "" && val2 != "" ) {
  	   $('[name="jumlah"]').val(kali);
  	}
  }
</script>

<script type="text/javascript">

  function cekppn()
  {
    val3 = $('[name="Jumlah"]').val();
    val4 = 10/100;
    val5 = 100 ;
    var bagi = val3 * val5 / 110 * val4 ;
       // $('[name="jumlah_potongan_pajak"]').val(bagi.toFixed(0));
       var  reverse = bagi.toFixed().split('').reverse().join(''),
        ribuan  = reverse.match(/\d{1,3}/g);
        ribuan  = ribuan.join('.').split('').reverse().join('');
        $('[name="jumlah_potongan_pajak"]').val(ribuan);
      }
    
    // function cekps21() 
    // {
    //   val4 = $('[name="jumlah"]').val();
    //   val5 = 2/100;
    //   val6 = 100 ;
    //   // val5 = 100 % ;
    //   var ps21 = val4 * val6 / 110 * val5;
    //   var  reverse = ps21.toFixed().split('').reverse().join(''),
    //     ribuan  = reverse.match(/\d{1,3}/g);
    //     ribuan  = ribuan.join('.').split('').reverse().join('');
    //      $('[name="ps_21"]').val(ribuan);

    // }
    function cekps22() {
    val7 = $('[name="jumlah"]').val();
    val8 = 1/100;
    val9 = 100 ;
      var ps22 = val7 * val9 / 110 * val8;
      var  reverse = ps22.toFixed().split('').reverse().join(''),
        ribuan  = reverse.match(/\d{1,3}/g);
        ribuan  = ribuan.join('.').split('').reverse().join('');
         $('[name="ps_22"]').val(ribuan);
    }

    function cekps23()  {
    val10 = $('[name="jumlah"]').val();
      val11 = 2/100;
      val12 = 100 ;
      // val5 = 100 % ;
      var ps23 = val10 * val12 / 110 * val11;
      var  reverse = ps23.toFixed().split('').reverse().join(''),
        ribuan  = reverse.match(/\d{1,3}/g);
        ribuan  = ribuan.join('.').split('').reverse().join('');
         $('[name="ps_23"]').val(ribuan);
    }
    // function cekps42()  {
    // val13 = $('[name="jumlah"]').val();
    //   val14 = 3/100;
    //   val15 = 100 ;
    //   // val5 = 100 % ;
    //   var ps42 = val13 * val15 / 110 * val14;
    //   var  reverse = ps42.toFixed().split('').reverse().join(''),
    //     ribuan  = reverse.match(/\d{1,3}/g);
    //     ribuan  = ribuan.join('.').split('').reverse().join('');
    //      $('[name="ps_42"]').val(ribuan);
    // }

    function bayar()  {
      val16 = $('[name="jumlah"]').val();
      val17 = $('[name="jumlah_potongan_pajak"]') .val();
      val18 = $('[name="ps_21"]').val();
      val19 = $('[name="ps_22"]').val();
      val20 = $('[name="ps_23"]').val();
      val21 = $('[name="ps_4_2"]').val();
      var kurang = val16 - val17;
      var kurang1 = kurang - val18;
      var kurang2 = kurang1 - val19;
      var kurang3 = kurang2 - val20;
      var kurang4 = kurang3 - val21;

      var  reverse = kurang.val().split('').reverse().join(''),
        ribuan  = reverse.match(/\d{1,3}/g);
        ribuan  = ribuan.join('.').split('').reverse().join('');
         $('[name="jumlah_yang_dibayar"]').val(toFixed()kurang);
    }
      
</script>
