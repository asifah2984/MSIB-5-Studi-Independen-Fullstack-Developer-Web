<!DOCTYPE html>
<html lang="en">

<?php

$judul = "Portofolio";
$hsatu = "Do It Yourself! <small>Selamat Datang Diwebsite saya</small>";
$menua = "Home";
$menub = "Portofolio";
$menuc = "Contact";
$hdua = "Halo Pendatang Website Kami";
$deskripsi = "Perkenalkan, nama saya Ahmad Asif Iltizam. Saya adalah seorang full stack developer. Saya juga merupakan lulusan teknik Komputer dari Institut Teknologi Telkom Surabaya.";
$quotes = "Orang-orang mengambil risiko setiap saat, dan Anda tidak ingin mengecewakan mereka.";
$quotess = "Jason Statham";

?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $judul ?></title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					<?= $hsatu ?>
				</h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link active" href="parta.php"><?= $menua ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="partb.php"><?= $menub ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="partc.php"><?= $menuc ?></a>
				</li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-684654">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-684654" class="active">
					</li>
					<li data-slide-to="1" data-target="#carousel-684654">
					</li>
					<li data-slide-to="2" data-target="#carousel-684654">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="images/fotoa.jpg">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="images/fotob.jpg">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src="images/fotoc.jpg">
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-684654" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-684654" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h2><?= $hdua ?></h2>
			<p><?= $deskripsi ?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<blockquote class="blockquote">
				<p class="mb-0">
					<?= $quotes ?>
				</p>
				<footer class="blockquote-footer">
					<?= $quotess ?>
				</footer>
			</blockquote>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>