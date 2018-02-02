<?php

include "../lib/koneksi.php";

if(isset($_POST['submit'])){
	$nis = $_POST['nis'];
	$nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$tempat_lahir =  $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$id_jk = $_POST['id_jk'];
	$id_tahpel = $_POST['id_tahpel'];
	$id_kelas = $_POST['id_kelas'];
	$id_jurusan = $_POST['id_jurusan'];
	$no_telp = $_POST['no_telp'];
	$nama_ayah = $_POST['nama_ayah'];
	$tempat_lahir_ayah = $_POST['tempat_lahir_ayah'];
	$tanggal_lahir_ayah = $_POST['tanggal_lahir_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$tempat_lahir_ibu = $_POST['tempat_lahir_ibu'];
	$tanggal_lahir_ibu = $_POST['tanggal_lahir_ibu'];
	$alamat_ortu = $_POST['alamat_ortu'];

	$sql = "INSERT INTO tb_siswa(nis, nisn, nama, tempat_lahir, tanggal_lahir, alamat, id_jk, id_tahpel, id_kelas, id_jurusan, no_telp, nama_ayah, tempat_lahir_ayah, tanggal_lahir_ayah, nama_ibu, tempat_lahir_ibu, tanggal_lahir_ibu, alamat_ortu) VALUES ('$nis','$nisn','$nama','$tempat_lahir','$tanggal_lahir','$alamat','$id_jk','$id_tahpel','$id_kelas','$id_jurusan', '$no_telp','$nama_ayah','$tempat_lahir_ayah','$tanggal_lahir_ayah','$nama_ibu','$tempat_lahir_ibu','$tanggal_lahir_ibu','$alamat_ortu')";
	$query = mysqli_query($koneksi, $sql);
	header("location: index.php");

}
?>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="../pendukung/css/bootstrap.css">
    <script type="text/javascript" src="../pendukun</div>g/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<form method="POST" class="form-horizontal">
			<h2>Masukkan data Siswa</h2>
				<div class="form-group">
					<label>NIS</label>
					<input type="text" class="form-control" name="nis">
				</div>
				<div class="form-group">
					<label>NISN</label>
					<input type="text" name="nisn" class="form-control">
				</div>
				<div class="form-group">
					<label>NAMA</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<div class="form-group">
					<label>TEMPAT LAHIR</label>
					<input type="text" name="tempat_lahir" class="form-control">
				</div>
				<div class="form-group">
					<label>TANGGAL LAHIR</label>
					<input type="date" name="tanggal_lahir" class="form-control">
				</div>
				<div class="form-group">
					<label>ALAMAT</label>
					<input type="text" name="alamat" class="form-control">
				</div>
				<div class="form-group">
					<label>JENIS KELAMIN</label>
					<div class="radio">
					<input type="radio" name="id_jk" value="1">Laki - Laki
					<input type="radio" name="id_jk" value="2">Perempuan
					</div>
				</div>
				<div class="form-group">
					<label>TAHUN PELAJARAN</label>
					<select name="id_tahpel" class="form-control">
						<option value="1">2016 / 2017</option>
						<option value="2">2017 / 2018</option>
						<option value="3">2018 / 2019</option>
						<option value="4">2019 / 2020</option>
						<option value="5">2020 / 2021</option>
					</select>
				</div>
				<div class="form-group">
					<div class="radio">
					<label>KELAS</label>
					<input type="radio" name="id_kelas" value="1">X
					<input type="radio" name="id_kelas" value="2">XI
					<input type="radio" name="id_kelas" value="3">XII
					</div>
				</div>
				<div class="form-group">
					<label>JURUSAN</label>
					<select name="id_jurusan" class="form-control">
						<option value="1">RPL (Rekayasa Perangkat Lunak)</option>
						<option value="2">TPHP (Teknik Pengolahan Hasil Pertanian)</option>
						<option value="3">TO (Teknik Ototronik)</option>
						<option value="4">TKR (Teknik Kendaraan Ringan)</option>
						<option value="5">TSM (Teknik Sepeda Motor)</option>
					</select>
				</div>
				<div class="form-group">
					<label>NO. TELP</label>
					<input type="text" name="no_telp" class="form-control">
				</div>
				<div class="form-group">
					<label>NAMA AYAH</label>
					<input type="text" name="nama_ayah" class="form-control">
				</div>
				<div class="form-group">
					<label>TEMPAT LAHIR AYAH</label>
					<input type="text" name="tempat_lahir_ayah" class="form-control">
				</div>
				<div class="form-group">
					<label>TANGGAL LAHIR AYAH</label>
					<input type="date" name="tanggal_lahir_ayah" class="form-control">
				</div>
				<div class="form-group">
					<label>NAMA IBU</label>
					<input type="text" name="nama_ibu" class="form-control">
				</div>
				<div class="form-group">
					<label>TEMPAT LAHIR IBU</label>
					<input type="text" name="tempat_lahir_ibu" class="form-control">
				</div>
				<div class="form-group">
					<label>TANGGAL LAHIR IBU</label>
					<input type="date" name="tanggal_lahir_ibu" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat Orang Tua</label>
					<input type="text" name="alamat_ortu" class="form-control">
				</div>
					<input type="submit" name="submit" value="Save" class="btn btn-primary">
		</form>
	</div>
</body>
</html>
