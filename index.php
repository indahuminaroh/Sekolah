<?php
include "data_sekolah.php";
include "data_siswa.php";
include "data_spp.php";
?>
<html>
<head>
	<title>Aplikasi Absensi</title>
<link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap.min.css">
<script type="text/javascript" src="assets/bootstrap/jquery.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://create-script.blogspot.com">Aplikasi Pendataan Siswa</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#"><span class="fa fa-home">Home</span></a></li>
				<li><a href="#">Menu</a></li>
			</ul>
			    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="fa fa-sign-in"></span> Login</a></li>
    </ul>
		</div>
	</nav>
	<div class="tengah container">
		<center><h1>Aplikasi Pendataan Siswa</h1></center>
	</div>
	<div class="portal">
		<h1 align="center">Pilih Menu Dibawah ini</h1>
	<div class="col-sm-4">
		<center>
				<div class="menu_sekolah">
					<h1>Guru dan Staff</h1>
					<br>
					<img src="assets/img/graduate.png">
				</div>
		</center>
	</div>
	<div class="col-sm-4">
		<center>
				<div class="menu_siswa">
					<h1>Data Siswa</h1>
					<br>
					<img src="assets/img/student.png">
				</div>
		</center>
	</div>
	<div class="col-sm-4">
		<center>
				<div class="menu_spp">
					<h1>Data SPP</h1>
					<img style="margin-top: 12px;" src="assets/img/money.png">
				</div>
		</center>
	</div>
	</div>
	<div class="footer" style="background-color: black; margin-top: 380px; width: 100%; height: 40px; ">
		<p style="text-align: center; color: white; margin-bottom: 10px !important;">Copyright &copy By Angga Nur</p>
	</div>
	<!--<div id="footer"><center>Copyright &copy Angga Nur</center></div>-->
	<script type="text/javascript">
		$(document).ready(function(){
			$('.menu_sekolah').click(function(){
				$('.modal_sekolah, .background_sekolah').fadeIn("slow");
			});
			$('.tutup_sekolah').click(function(){
				$('.modal_sekolah, .background_sekolah').fadeOut("slow");
			});
			$('.menu_siswa').click(function(){
				$('.modal_siswa, .background_siswa').fadeIn("slow");
			});
			$('.tutup_siswa').click(function(){
				$('.modal_siswa, .background_siswa').fadeOut("slow");
			});
			$('.menu_spp').click(function(){
				$('.modal_spp, .background_spp').fadeIn("slow");
			});
			$('.tutup_spp').click(function(){
				$('.modal_spp, .background_spp').fadeOut("slow");
			});
		});
	</script>
	</body>
</html>
