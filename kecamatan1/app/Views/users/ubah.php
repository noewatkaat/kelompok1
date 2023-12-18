<?php $this->extend('layout/template'); ?>
<?php $this->section ('content'); ?>
<h5> UBAH DATA KECAMATAN </h5>
<form action="<?= base_url('Users/update'); ?>" method="POST">
<input type="hidden" name="kode" value="<?= $users['ID']; ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NAMA KECAMATAN</label>
    <input type="text" class="form-control" name="namaKecamatan" value="<?= $users['Nama_kecamatan']; ?>">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">KODEPOS KECAMATAN </label>
    <input type="text" class="form-control" name="kodeposKecamatan"  value="<?= $users['Kodepos_kecamatan']; ?>">
   
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ALAMAT KANTOR KECAMATAN </label>
    <input type="text" class="form-control" name="alamatKantorKecamatan"  value="<?= $users['Alamat_kantor_kecamatan']; ?>">
  
  <button type="submit" class="btn btn-primary">ubah</button>
</form>

<?php $this->endSection(); ?>