<!DOCTYPE html>
<html>
<head>
	<title>Laundry</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/covid.css">
</head>
<body>
	<div class="covid-count">
		<div class="row">
			<div class="col-md-3">
				<div class="positif card">
					<div class="card-title"><h2>Positif</h2></div>
					<?= $api->positif ?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="dirawat card">
					<div class="card-title"><h2>Dirawat</h2></div>
					<?= $api->dirawat ?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="sembuh card">
					<div class="card-title"><h2>Sembuh</h2></div>
					<?= $api->sembuh ?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="meninggal card">
					<div class="card-title"><h2>Meninggal</h2></div>
					<?= $api->meninggal ?>
				</div>
			</div>
		</div> 
	</div>
	<div class="modul-vaksin">
		<h2>Vaksinasi</h2>
		<form method="post">
			<p>Nama</p>
			<input class="form-control" type="text" name="nama">
			<p>Alamat</p>
			<input class="form-control" type="text" name="alamat">
			<p>Pilih Vaksin</p>
			<select class="form-select" name="vaksin">
				<option value="sinovac">Sinovac</option>
				<option value="astra-zeneca">Astra Zeneca</option>
				<option value="sinopharm">Sinopharm</option>
				<option value="moderna">Moderna</option>
				<option value="pfizer">Pfizer</option>
				<option value="novavax">Novavax</option>
			</select>
			<br>
			<button class="btn btn-primary" type="submit">Vaksin</button>
		</form>
	</div>
	<div class="rujukan">
		<h1>Rumah Sakit Rujukan Covid 19</h1><a href="/rujukan">buka</a>
	</div>
</body>
</html>