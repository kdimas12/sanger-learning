<?= $this->extend('dashboard/layout/default') ?>

<?= $this->section('content') ?>
<div class="mt-4">
    <table id="data-siswa" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Email</th>
                <th>Bukti Administrasi</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <td>Dimas</td>
            <td>Kurniawan</td>
            <td>dimas@user.com</td>
            <td><a href="" target="_blank">Tampilkan</a></td>
            <td class="text-danger">Belum Bayar</td>
            <td><a href="#" class="btn btn-primary btn-sm">Konfirmasi</a> <a href="#" class="btn btn-danger btn-sm">Hapus</a></td>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>