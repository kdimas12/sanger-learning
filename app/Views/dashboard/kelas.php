<?= $this->extend('dashboard/layout/default') ?>

<?= $this->section('content') ?>
<div class="mt-4">
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