<?php $this->extend('layout/template'); ?>
<?php $this->section ('content'); ?>
<form action="<?= base_url('Users/simpan'); ?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NAMA KECAMATAN</label>
    <input type="text" class="form-control" name="namaKecamatan" >
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">KODEPOS KECAMATAN </label>
    <input type="text" class="form-control" name="kodeposKecamatan">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ALAMAT KANTOR KECAMATAN </label>
    <input type="text" class="form-control" name="alamatKantorKecamatan">
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $this->endSection(); ?>