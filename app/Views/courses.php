<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<div class="mt-4">
	<h2 class="mb-3">Courses List</h2>
	<div class="d-flex align-items-start">
		<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<?php foreach ($courses as $key => $value) : ?>
				<button class="nav-link <?= ($key == array_key_first($courses)) ? "active" : "" ?>" id="v-pills-<?= $key ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?= $key ?>" type="button" role="tab" aria-controls="v-pills-<?= $key ?>" aria-selected="<?= ($key == array_key_first($courses)) ? "true" : "false" ?>"><?= $key ?></button>
			<?php endforeach ?>
		</div>
		<div class="tab-content" id="v-pills-tabContent">
			<?php foreach ($courses as $key => $value) : ?>
				<div class="tab-pane fade <?= ($key == array_key_first($courses)) ? "show active" : "" ?>" id="v-pills-<?= $key ?>" role="tabpanel" aria-labelledby="v-pills-<?= $key ?>-tab" tabindex="0">
					<?php foreach ($value as $key => $course) : ?>
						<div class="card mb-3">
							<div class="card-body">
								<h5 class="card-title"><?= $course['nama_kelas'] ?></h5>
								<small class="badge rounded-pill text-bg-success"><?= $course['nama_jenis'] ?></small>
								<p class="card-text"><?= $course['ket_kelas'] ?></p>
								<div class="d-grid">
									<a href="<?= base_url('pendaftaran-kelas') ?>/<?= $course['id_kelas'] ?>" class="btn btn-warning">Register</a>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
<?= $this->endSection() ?>