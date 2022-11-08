<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<div class="container py-md-5 pt-5">
	<?php if (session()->getFlashdata('msg')) : ?>
		<div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
	<?php endif; ?>
	<form action="/login/auth" method="post" class="col-md-4 mx-auto">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" />
			<div id="emailHelp" class="form-text">
				We'll never share your email with anyone else.
			</div>
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" name="password" />
		</div>
		<button type="submit" class="btn btn-warning">Login</button>
	</form>
</div>
<?= $this->endSection() ?>
