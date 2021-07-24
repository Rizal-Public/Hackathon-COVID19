<!DOCTYPE html>
<html>
<head>
	<title>Laundry</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/rujukan.css">
</head>
<body>
	<div class="rumah-sakit">
		<?php foreach($api as $rm): ?>
			<div class="keterangan">
				<div class="row">
					<div class="col-md-12"><h2><?= $rm->name ?></h2></div>
					<div class="col-md-5"><p>address</p></div>
					<div class="col-md-5"><?= $rm->address ?></div>
					<div class="col-md-5"><p>region</p></div>
					<div class="col-md-5"><?= $rm->region ?></div>
					<div class="col-md-5"><p>phone</p></div>
					<div class="col-md-5"><?= $rm->phone ?></div>
					<div class="col-md-5"><p>province</p></div>
					<div class="col-md-5"><?= $rm->province ?></div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</body>
</html>