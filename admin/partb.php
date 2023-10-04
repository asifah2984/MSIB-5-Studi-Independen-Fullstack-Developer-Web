<!DOCTYPE html>
<html lang="en">

<?php

$judul = "Portofolio";
$hsatu = "Do It Yourself! <small>Selamat Datang Diwebsite saya</small>";
$menua = "Home";
$menub = "Portofolio";
$menuc = "Contact";
$deskripsi = "Saya mahasiswa yang sedang menempuh semester 7 di Institut Teknologi Telkom Surabaya prodi Teknik Komputer. Saya seorang mahasiswa teknik komputer yang memiliki ketertarikan di bidang-bidang yang menyangkut dengan teknik komputer dan mampu berkomunikasi dengan baik dalam setiap kegiatan. Dapat bekerja secara individu maupun dalam tim serta dapat mudah beradaptasi dengan lingkungan yang baru.";
$htigaa = "Pendidikan";
$htigab = "Pengalaman Organisasi";
$htigac = "Hard Skill";
$htigad = "Soft Skill";
$quotes = "Ada sesuatu tentang diri Anda yang tidak Anda ketahui.";
$htigaaa = "SMA Negeri 1 Bangsal (April 2017 - Mei 2020)";
$htigaab = "Jl. Peterongan, Sukorejo, Peterongan, Kec. Bangsal, Kab. Mojokerto, Jawa Timur";
$htigaac = "Institut Teknologi Telkom Surabaya (Agustus 2020 - Sekarang)";
$htigaad = "Jl. Ketintang No.156, Ketintang, Kec. Gayungan, Kota SBY, Jawa Timur";
$htigaba = "Anggota Staff Divisi PSDM - HIMA Teknik Komputer (Januari 2021 - Februari 2023).";
$htigabb = "- Menjadi Panitia Divisi Acara pada kegiatan Pengkaderan.";
$htigabc = "- Menjadi Panitia Divisi Acara pada kegiatan Makrab (Malam Keakraban).";
$htigabd = "- Menjadi Panitia ketua kelompok pada kegiatan Makrab (Malam Keakraban).";
$htigabe = "Kakak Fasilitator - Panitia LKMM Pra TD	(Desember 2021).";
$htigabf = "- Menjadi kakak fasilitator untuk peserta LKMM Pra TD.";
$htigaca = "HTML, CSS, Javascript";
$htigacb = "Skill Intermediate";
$htigacc = "Flutter, Laravel";
$htigacd = "Skill Medium";
$htigace = "Vue Js, Node Js, Figma, Java, Database MySQL";
$htigacf = "Skill Basic";
$htigada = "Bekerja dengan tim maupun individu.";
$htigadb = "Manajemen waktu.";
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
	<!-- <div class="row">
		<div class="col-md-12">
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link" href="parta.php"><?= $menua ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="partb.php"><?= $menub ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="partc.php"><?= $menuc ?></a>
				</li>
			</ul>
		</div>
	</div> -->
	<div class="row">
		<div class="col-md-2">
			<img alt="Bootstrap Image Preview" src="images/fotod.jpg">
		</div>
		<div class="col-md-10">
			<p>
				<?= $deskripsi ?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h3><?= $htigaa ?></h3>
			<dl>
				<dt><?= $htigaaa ?></dt>
				<dd><?= $htigaab ?></dd>
				<dt><?= $htigaac ?></dt>
				<dd><?= $htigaad ?></dd>
			</dl>
		</div>

		<div class="col-md-6">
			<h3><?= $htigab ?></h3>
			<dl>
				<dt><?= $htigaba ?></dt>
				<dd><?= $htigabb ?></dd>
				<dd><?= $htigabc ?></dd>
				<dd><?= $htigabd ?></dd>
				<dt><?= $htigabe ?></dt>
				<dd><?= $htigabf ?></dd>
			</dl>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h3><?= $htigac ?></h3>
			<dl>
				<dt><?= $htigaca ?></dt>
				<dd><?= $htigacb ?></dd>
				<dt><?= $htigacc ?></dt>
				<dd><?= $htigacd ?></dd>
				<dt><?= $htigace ?></dt>
				<dd><?= $htigacf ?></dd>
			</dl>
		</div>
		<div class="col-md-6">
			<h3><?= $htigad ?></h3>
			<dl>
				<dt><?= $htigada ?></dt>
				<dt><?= $htigadb ?></dt>
			</dl>
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