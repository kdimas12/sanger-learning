<?= $this->extend('dashboard/layout/default') ?>

<?= $this->section('content') ?>
<div class="mt-4">
    <a href="<?= base_url('admin/kelas/tambah') ?>" class="btn btn-primary mb-4">Tambah Kelas</a>
    <table id="data-kelas" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID Kelas</th>
                <th>Nama Kelas</th>
                <th>Jenis Kelas</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>
</div>
<?= $this->endSection() ?>