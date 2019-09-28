<!-- <a href="<?php echo $url; ?>/view/t" class="btn btn-primary">+ <?php echo $judul_web; ?></a> -->
<hr>
<?php $this->M_Pesan->get('msg'); ?>
<table id="data_tables" class="table table-bordered table-striped table-hover" width="100%">
  <thead>
    <tr>
      <th width="1%">No.</th>
      <th width="35%">Nama Lengkap</th>
      <th width="19%">Username</th>
      <th width="15%">Password</th>
      <!-- <th width="15%">Level</th> -->
      <th width="15%">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no=1;
    foreach ($query->result() as $key => $value) {
      $id_pk = hashids_encrypt($value->id_user); ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $value->nama_lengkap; ?></td>
        <td><?php echo $value->username; ?></td>
        <td><?php echo $value->password; ?></td>
        <!-- <td><?php echo ucwords($value->level); ?></td> -->
        <td class="text-center">
          <a href="<?php echo $url; ?>/view/d/<?php echo $id_pk; ?>" class="btn btn-info btn-xs" title="Detail"><i class="fa fa-list"></i></a>
          <a href="<?php echo $url; ?>/view/e/<?php echo $id_pk; ?>" class="btn btn-success btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>
          <a href="<?php echo $url; ?>/view/h/<?php echo $id_pk; ?>" class="btn btn-danger btn-xs" title="Hapus" onclick="return confirm('Anda Yakin?');"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    <?php
    } ?>
  </tbody>
</table>
