<!-- <?php $level   = $this->session->userdata('level');
if($level=='user'){ ?>
<a href="<?php echo('spm') ?>/v/t" class="btn btn-primary">+ Edit SPM</a>

<hr>
<?php } ?>
<?php $this->M_Pesan->get('msg'); ?> -->


<style>
  table > thead > tr > th {font-size: 12px;}

  table > tbody > tr > td {font-size: 10px;}

</style>

<?php $this->M_Pesan->get('msg'); ?>

<div class="table-responsive">

  <table id="data_tables" class="table table-bordered table-striped table-hover" width="100%">

    <thead>

      <tr>

        <th width="1%">No.</th>

        <th>Jenis Belanja</th>

        <th>Tgl.Usulan</th>

        <th>Uraian</th>

        <th>Ferifikasi_t_usaha</th>

        <th>Ferifikasi_k_perencanaan</th>

        <th>Volume</th>

        <th>Satuan</th>

        <th>Harga Satuan</th>

        <th>Jumlah</th>

        <th width="10">Opsi</th>

      </tr>

    </thead>

    <tbody>

      <?php

      $no=1;

      foreach ($query->result() as $key => $value) {

        $id_pk = hashids_encrypt($value->id_data); ?>

        <tr>

          <td><?php echo $no++; ?></td>

          <td><?php echo $value->jenis_belanja; ?></td>

          <td><?php echo $value->tgl_usulan; ?></td>

          <td><?php echo $value->uraian; ?></td>

          <td><?php echo $value->ferifikasi_t_usaha; ?></td>

          <td><?php echo $value->ferifikasi_k_perencanaan; ?></td>

          <td><?php echo $value->volume; ?></td>

          <td><?php echo $value->satuan; ?></td>

          <td><?php echo $value->harga_satuan; ?></td>

          <td><?php echo $value->jumlah; ?></td>

          <td class="text-center">

            <a href="<?php echo $url; ?>/cetak/<?php echo $id_pk; ?>" class="btn btn-primary btn-xs" title="Cetak" target="_blank"><i class="fa fa-print"></i></a>

           <!--  <a href="<?php echo $url; ?>/cetak/<?php echo $id_pk; ?>" class="btn btn-primary btn-xs" title="Cetak" target="_blank"><i class="fa fa-print"></i></a> -->

           <a href="<?php echo $url; ?>/v1/e/<?php echo $id_pk; ?>" class="btn btn-success btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>

           <!-- <a href="<?php echo $url; ?>/v2/e/<?php echo $id_pk; ?>" class="btn btn-success btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>
 -->
          
          </td>

        </tr>

      <?php

      } ?>

    </tbody>

  </table>

</div>

