<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<div class="container py-md-5 pt-5">
	<?php if (isset($validation)) : ?>
		<div class="alert alert-danger"><?= $validation->listErrors() ?></div>
	<?php endif; ?>
	<form action="/register/save" method="post" class="mx-auto col-md-6 row g-3">
		<div class="col-md-6">
			<label for="firstName" class="form-label">First Name</label>
			<input type="text" class="form-control" id="firstName" name="firstName" />
		</div>
		<div class="col-md-6">
			<label for="lastName" class="form-label">Last Name</label>
			<input type="text" class="form-control" id="lastName" name="lastName" />
		</div>
		<div class="col-md-12">
			<label for="inputEmail" class="form-label">Email</label>
			<input type="email" class="form-control" id="inputEmail" name="email" />
		</div>
		<div class="col-md-12">
			<label for="inputPassword" class="form-label">Password</label>
			<input type="password" class="form-control" id="inputPassword" name="password" />
		</div>
		<div class="col-md-12">
			<label for="inputConfirmPassword" class="form-label">Confirm Password</label>
			<input type="password" class="form-control" id="inputConfirmPassword" name="confirmPassword" />
		</div>
		<div class="col-12">
			<button type="submit" class="btn btn-warning">Register</button>
		</div>
	</form>
</div>
<?= $this->endSection() ?>
