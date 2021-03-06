<?= $this->extend('landing/layout/template'); ?>

<?= $this->section('content-landing'); ?>

<section style="background-color: #0080ff;">

	<div class="container-fluid">
		<div class="row justify-content-center align-items-end" style="height: 100vh;">
			<div class="col-lg-5">
				<h2 class="" style="color: brown; font-weight: 500;">
					Selamat Datang di
				</h2>
				<h3 class="text-warning">
					Aplikasi Pelaporan Kecelakaan Lalu Lintas
				</h3>
				<p style="font-weight: 500; color: #fff;">
					Mari bergabung dan laporkan ! <br>
					Saat anda menemukan kecelakaan lalu lintas disekitar anda.
				</p>
				<a href="<?= base_url(); ?>/choose-user" class="mt-4 btn btn-warning shadow" style="width: 200px;">
					<i class="fa fa-arrow-right"></i> Mulai
				</a>
				<img src="<?= base_url(); ?>/img/laka-2.png" style="width: 80%;" class="mt-4">
			</div>
		</div>
	</div>

</section>


<?= $this->endSection('content-landing'); ?>