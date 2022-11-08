<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<div class="container py-md-5 pt-5">
    <form action="/pendaftaran-kelas/daftar" method="post" class="mx-auto col-md-6 row g-3">
        <div class="col-md-6">
            <label for="firstName" class="form-label">Nama Depan</label>
            <input class="form-control" type="text" value="<?= $dataUser['nama_depan'] ?>" aria-label="<?= $dataUser['nama_depan'] ?>">
        </div>
        <div class="col-md-6">
            <label for="lastName" class="form-label">Nama Belakang</label>
            <input class="form-control" type="text" value="<?= $dataUser['nama_belakang'] ?>" aria-label="<?= $dataUser['nama_belakang'] ?>">
        </div>
        <div class="col-md-12">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="text" value="<?= $dataUser['email'] ?>" aria-label="<?= $dataUser['email'] ?>" disabled readonly>
        </div>
        <div class="col-md-6">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" aria-label="gender">
                <option selected>Pilih</option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
            <div class="input-group mb-3">
                <input name="tanggalLahir" type="text" value="" class="form-control" id="datepicker">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                </span>
            </div>
        </div>
        <div class="col-md-12">
            <label for="alamatLengkap" class="form-label">Alamat Lengkap</label>
            <textarea class="form-control" id="alamatLengkap" rows="3" name="alamatLengkap"></textarea>
        </div>
        <div class="col-md-12">
            <label for="kota">Kota</label>
            <input type="text" class="form-control" id="kota" name="kota">
        </div>
        <div class="col-md-12">
            <label for="no_handphone">No WhatsApp</label>
            <input type="text" class="form-control" id="no_handphone" name="no_handphone">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-warning">Save</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>