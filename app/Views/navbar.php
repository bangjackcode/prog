<nav class="navbar navbar-expand-lg navbar-light bg-info">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">PROG</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Home</a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Angkatan
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="<?= base_url('Home/angkatan') ?>/10">10</a></li>
					<li><a class="dropdown-item" href="<?= base_url('Home/angkatan') ?>/11">11</a></li>
					<li><a class="dropdown-item" href="<?= base_url('Home/angkatan') ?>/12">12</a></li>
					<li><a class="dropdown-item" href="<?= base_url('Home/angkatan') ?>/13">13</a></li>
					<li><a class="dropdown-item" href="<?= base_url('Home/angkatan') ?>/14">14</a></li>
					<li><a class="dropdown-item" href="<?= base_url('Home/angkatan') ?>/15">15</a></li>
				</ul>
				</li>

				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Prodi
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<?php
						foreach ($prodi as $p) :
					?>
					<li><a class="dropdown-item" href="<?= base_url('Home/prodi/'.$p['kode_program_studi']) ?>"><?= $p['nama_program_studi']; ?></a></li>
					<?php endforeach?>
				</ul>
				</li>

                <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Matkul
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<?php
						foreach ($prodi as $p) :
					?>
					<li><a class="dropdown-item" href="<?= base_url('Home/matkul/'.$p['kode_program_studi']) ?>">Matkul <?= $p['nama_program_studi']; ?></a></li>
					<?php endforeach?>
				</ul>
				</li>

			</ul>
			</div>
		</div>
	</nav>