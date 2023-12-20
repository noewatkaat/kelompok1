<?php $this->extend('layout/template'); ?>
<?php $this->section ('content'); ?>


<div class="row">
  <div class="col-md-10">
    <h3> DATA KECAMATAN</h3>
  </div>
  <div class="col">
  <a href="<?= base_url('logout'); ?>" class="btn btn-info text-white btn-sm">logout</a>
  </div>
</div>
            
            <br>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAMA KECAMATAN</th>
      <th scope="col">KODEPOS KECAMATAN</th>
      <th scope="col">ALAMAT KANTOR KECAMATAN </th>
      <th>aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $id = 1; foreach($users as $data) : ?>
    <tr>
      <th scope="row"><?=$id; ?></th>
      <td><?= $data['Nama_kecamatan']; ?></td>
      <td><?= $data['Kodepos_kecamatan']; ?></td>
      <td><?= $data['Alamat_kantor_kecamatan']; ?></td>
      <td> 
        <a href="<?= base_url('users/ubah/' . $data['ID']); ?>" class="btn btn-sm btn-info">ubah</a>
        <a href="<?= base_url('users/delete/' . $data['ID']); ?>" class="btn btn-sm btn-danger">hapus</a>
      </td>
    </tr>
    <?php $id++; endforeach; ?>

  </tbody>
</table>

<a href="<?=base_url('users/tambah'); ?>" class="btn btn-sm btn-primary">ADD</a>
    <?php $this->endSection(); ?>