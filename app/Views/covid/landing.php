<!DOCTYPE html>
<html>
<head>
	<title>Laundry</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/covid.css">
	<script type="text/javascript" src="/js/covid.js"></script>
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
</body>
</html>