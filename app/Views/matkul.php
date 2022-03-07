<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Prog UBG</title>
  </head>
  <body>
	<?= $this->include('navbar'); ?>
	

	<div class="container">
	<form method="POST" action="<?= base_url('Home/filterMatkul') ?>" class="row g-3 mt-3">
		<div class="col-auto">
			<select name="smtr" class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
				<?php for($i=1; $i<=12; $i++){ ?>
				<option value="<?= $i; ?>">Smt => <?= $i; ?></option>
				<?php } ?>
			</select>
		</div>
		<input type="hidden" name="kode_prodi" value="<?= $kdprodi; ?>">
		<div class="col-auto">
			<button type="submit" class="btn btn-primary mb-3">Confirm</button>
		</div>
	</form>
		<table class="table">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Kode prodi</th>
				<th scope="col">Kode Matkul</th>
				<th scope="col">Nama Matkul</th>
				</tr>
			</thead>
			<tbody>

			<?php
                                        
				$no = 1;
                foreach ($matkul as $m) :
            ?>
				<tr>
				<th scope="row"><?= $no; ?></th>
				<td><?= $m['kode_program_studi']; ?></td>
				<td><?= $m['kode_matakuliah']; ?></td>
				<td><?= $m['nama_matakuliah']; ?></td>
				</tr>
				<?php $no++; endforeach?>
			</tbody>
		</table>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>