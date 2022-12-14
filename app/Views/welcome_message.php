<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<!-- jumbotron -->
<div class="container py-md-5 pt-5">
	<?php if ($konfirmasi) : ?>
		<div class="d-flex mb-3 alert alert-success">
			<div class="p-2 align-self-center">Silahkan melakukan pembayaran dan konfirmasi</div>
			<div class="ms-auto p-2"><a href="#" class="btn btn-success">Konfirmasi</a></div>
		</div>
	<?php endif ?>
	<div class="row g-5">
		<div class="col-md-7 col-xs-12 align-self-center text-center text-md-start">
			<h2>
				Upgrading your <b>Skills</b> and <br />
				<b>Self-Improvement</b>
			</h2>
			<p>
				Kalian akan dibimbing oleh trainer yang profesional dan telah
				berpengalaman dalam mengembangkan berbagai macam website, aplikasi
				dan produk industri kreatif.
			</p>
			<a href="<?= (!session()->get('logged_in') ? base_url('register') : base_url('courses')) ?>" class="btn btn-warning">Mulai Sekarang</a>
		</div>
		<div class="col-md-5 col-12">
			<img src="<?= base_url('assets/img/learning.svg') ?>" alt="learning" class="img-fluid" />
		</div>
	</div>
</div>

<!-- why choose us section -->
<div class="container py-5">
	<div class="row g-5">
		<div class="col-md-5 col-8 offset-md-1 align-self-center d-none d-md-block">
			<img src="<?= base_url('assets/img/choose.svg') ?>" alt="choose" class="img-fluid" />
		</div>
		<div class="col-md-6">
			<h2 class="fw-bold">Why Choose Us?</h2>
			<hr class="col-3 col-md-2 mb-3" />
			<div>
				<p class="fw-bold mb-0">Kumpulan Profesional</p>
				<p>Dibimbing oleh beberapa pengajar yang sudah berpengalaman.</p>
			</div>
			<div>
				<p class="fw-bold mb-0">One Project</p>
				<p>
					Menyelesaikan satu projek hingga selesai dari setiap kursus yang
					diberikan.
				</p>
			</div>
			<div>
				<p class="fw-bold mb-0">Kelas Intensive</p>
				<p>
					Minimal 2 peserta kelas akan mulai sejak tanggal ditentukan!
				</p>
			</div>
			<div>
				<p class="fw-bold mb-0">Free Internet</p>
				<p>
					Internet tersedia secara gratis untuk mendukung proses
					pembelajaran.
				</p>
			</div>
		</div>
	</div>
</div>
<?= $this->include('layout/footer') ?>
<?= $this->endSection() ?>