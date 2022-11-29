<!DOCTYPE html>
<html lang="en">

<?= $this->include('dashboard/layout/head') ?>

<body class="sb-nav-fixed">
    <?= $this->include('dashboard/layout/navbar') ?>
    <div id="layoutSidenav">
        <?= $this->include('dashboard/layout/sidebar') ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <?= $this->renderSection('content') ?>
                </div>
            </main>
            <?= $this->include('dashboard/layout/footer') ?>
        </div>
    </div>
    <script src="<?= base_url('assets/js/jquery-3.6.0.js') ?>"></script>
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/sidebar-sbadmin.js') ?>"></script>
    <script src="<?= base_url('assets/js/datatables.min.js') ?>"></script>
</body>

</html>