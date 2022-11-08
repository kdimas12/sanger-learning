<nav class="navbar navbar-expand-lg border-bottom">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('assets/img/logo-sanger.png') ?>" alt="logo-sanger" width="250" /></a>
		<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?= base_url() ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('courses') ?>">Courses</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('contact') ?>">Contact Us</a>
				</li>
			</ul>
			<?php if (!session()->get('logged_in')) : ?>
				<div class="d-grid d-md-flex align-items-center gap-2">
					<a href="<?= base_url('login') ?>" class="btn btn-sm btn-warning">Login</a>
					<a href="<?= base_url('register') ?>" class="btn btn-sm btn-outline-warning">Register</a>
				</div>
			<?php else : ?>
				<div class="dropdown text-end">
					<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
							<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
							<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
						</svg>
					</a>
					<ul class="dropdown-menu text-small">
						<li><a class="dropdown-item" href="<?= base_url('profile') ?>">Profile</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a></li>
					</ul>
				</div>
			<?php endif ?>
		</div>
	</div>
</nav>