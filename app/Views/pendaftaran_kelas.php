<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<div class="container py-md-5 pt-5">
    <form action="/pendaftaran-kelas/daftar" method="post" class="mx-auto col-md-6 row g-3">
        <div class="col-md-12">
            <label class="form-label">Pilih Kelas</label>
            <select name="kelas" class="form-select" aria-label="kelas">
                <option selected>Pilih</option>
                <?php foreach ($dataCourses as $course => $value) : ?>
                    <option value="<?= $value['id_kelas'] ?>" <?= ($selectedCourses == $value['id_kelas']) ? "selected" : "" ?>>[<?= $value['nama_jenis'] ?>] <?= $value['nama_kelas'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-warning">Daftar</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>