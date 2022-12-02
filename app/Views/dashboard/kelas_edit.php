<?= $this->extend('dashboard/layout/default') ?>

<?= $this->section('content') ?>
<form class="mt-4" method="post">
    <div class="mb-3">
        <label for="id_kelas" class="form-label">ID Kelas</label>
        <input type="text" name="id_kelas" class="form-control" id="id_kelas" value="<?= $kelas['id_kelas'] ?>">
    </div>
    <div class="mb-3">
        <label for="nama_kelas" class="form-label">Nama Kelas</label>
        <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" value="<?= $kelas['nama_kelas'] ?>">
    </div>
    <div class="mb-3">
        <label for="id_jenis" class="form-label">ID Jenis</label>
        <input type="text" name="id_jenis" class="form-control" id="id_jenis" value="<?= $kelas['id_jenis'] ?>">
    </div>
    <div class="mb-3">
        <label for="ket_kelas" class="form-label">Keterangan</label>
        <textarea type="text" name="ket_kelas" class="form-control" id="ket_kelas"><?= $kelas['ket_kelas'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" name="harga" class="form-control" id="harga" value="<?= $kelas['harga'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?= $this->endSection() ?>