<!DOCTYPE html>
<html lang="en">

<?= $this->include('layout/head') ?>

<body>
	<div class="col-lg-8 mx-auto py-md-5 px-3 px-md-0">
		<?= $this->include('layout/navbar') ?>
		<?= $this->renderSection('content') ?>
	</div>

	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/script.js') ?>"></script>
</body>

</html>