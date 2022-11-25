<?= $this->extend('dashboard/layout/default') ?>

<?= $this->section('content') ?>
<h1 class="my-4">Dashboard</h1>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body d-flex">
                <div>
                    <h1>52</h1>
                    <p>Siswa</p>
                </div>
                <div class="ms-auto align-self-center">
                    <i class="fas fa-users fa-2xl"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body d-flex">
                <div>
                    <h1>4</h1>
                    <p>Kelas</p>
                </div>
                <div class="ms-auto align-self-center">
                    <i class="fas fa-landmark fa-2xl"></i>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>