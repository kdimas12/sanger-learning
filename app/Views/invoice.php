<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<div class="mt-4">
    <!-- title row -->
    <div class="row">
        <div class="col-12">
            <h4>INVOICE : <b><?= $konfirmasi['id_konfirmasi'] ?></b></h4>
            <table class="table table-striped">
                <thead class="table-dark">
                    <th>Item</th>
                    <th class="text-end">Keterangan</th>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $konfirmasi['nama_kelas'] ?></td>
                        <td class="text-end"><?= $konfirmasi['nama_jenis'] ?></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td class="text-end"><?= "Rp. " . number_format($konfirmasi['harga'], 0, ',', '.') ?></td>
                    </tr>
                    <tr>
                        <td>Kode Unik</td>
                        <td class="text-end">Rp. 5</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td class="text-end"><?= "Rp. " . number_format($konfirmasi['harga'] + 5, 0, ',', '.') ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="mb-5">
                <p class="fw-bold">Metode Pembayaran</p>
                <ul>
                    <li>
                        <p class="mb-0">BANK SYARIAH INDONESIA (BSI)</p>
                        <p class="mb-0 fw-bold">123 4567 890</p>
                        <p class="fw-bold">a.n Sanger Learning</p>
                    </li>
                    <li>
                        <p class="mb-0">BANK RAKYAT INDONESIA (BRI)</p>
                        <p class="mb-0 fw-bold">123 4567 890</p>
                        <p class="fw-bold">a.n Sanger Learning</p>
                    </li>
                </ul>
            </div>

            <div class="border-top border-dark pt-4">
                <h4 class="fw-bold">Konfirmasi Pembayaran</h4>
                <form action="" method="POST">
                    <div class="mb-2">
                        <label for="bukti_administrasi" class="form-label fw-bold">Bukti Transfer</label>
                        <input type="file" id="bukti_administrasi" name="bukti_administrasi" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_administrasi" class="form-label fw-bold">Tanggal Transfer</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar-week"></i></span>
                            <input type="text" class="form-control" id="tanggal_administrasi" aria-describedby="basic-addon1" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning float-end">Konfirmasi Pembayaran</button>
                </form>
            </div>
        </div>
        <!-- /.col -->
    </div>
</div>
<script>
    $(function() {
        $("#tanggal_administrasi").inputmask("yyyy-mm-dd", {
            placeholder: "yyyy-mm-dd",
        });
    })
</script>
<?= $this->endSection() ?>