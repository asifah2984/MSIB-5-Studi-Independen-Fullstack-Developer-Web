
<!-- Lanjutkan pembuatan website yang dibuat menggunakan layouit pada materi JS kemarin, 
ubah ekstension file menjadi .php dan  untuk bagian Nama, alamat, email, nomor telpon, dan data diri lainnya 
diubah menjadi sebuah variable yang dikemudian ditampilkan pada web yang sudah ada  -->

<!DOCTYPE html>
<html lang="en">
	
<?php

$judul = "Contact";
$hsatu = "Do It Yourself! <small>Selamat Datang Diwebsite saya</small>";
$menua = "Home";
$menub = "Portofolio";
$menuc = "Contact";
$htiga = "Sekian Website Kami";
$nama = "Nama";
$usia = "Usia";
$linkedin = "Linkedin";
$jeniskelamin = "Jenis Kelamin";
$instagram = "Instagram";
$alamat = "Alamat";
$email = "Email";
$whatsapp = "Whatsapp";
$quotes = "Saya antusias dan ambisius, dan saya bekerja keras.";
$namaa = "Ahmad Asif Iltizam";
$usiaa = 22;
$linkedinn = "www.linkedin.com/in/ahmad-dasif-825155237";
$jeniskelaminn = "Laki-laki";
$instagramm = "www.instagram.com/ahmadasif8089";
$alamatt = "Jl. Jemur Gayungan II No. 30, Kec. Gayungan, Kota Surabaya, Prov. Jawa Timur";
$emaill = "Asifahmad2984@gmail.com";
$whatsappp = "081216287095";
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
					<a class="nav-link" href="parta.php"><?= $menua ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="partb.php"><?= $menub ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="partc.php"><?= $menuc ?></a>
				</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>
				<?= $htiga ?>
			</h3>
			<dl>
				<dt><?= $nama ?></dt>
				<dd><?= $namaa ?></dd>
				<dt><?= $usia ?></dt>
				<dd><?= $usiaa ?></dd>
				<dt><?= $linkedin ?></dt>
				<dd><?= $linkedinn ?></dd>
				<dt><?= $jeniskelamin ?></dt>
				<dd><?= $jeniskelaminn ?></dd>
				<dt><?= $instagram ?></dt>
				<dd><?= $instagramm ?></dd>
				<dt><?= $alamat ?></dt>
				<dd><?= $alamatt ?></dd>
				<dt><?= $email ?></dt>
				<dd><?= $emaill ?></dd>
				<dt><?= $whatsapp ?></dt>
				<dd><?= $whatsappp ?></dd>
				
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

<!-- http://localhost/tugasphpmsib5/TugasPertemuan1/partc.php -->