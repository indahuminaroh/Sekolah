<?php

include "../lib/koneksi.php";

$nisn = $_GET['id'];

if(isset($_POST['submit'])){
	$nis = $_POST['nis'];
	$nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
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

$sql = "UPDATE tb_siswa SET nis='$nis', nisn='$nisn', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', id_jk='$id_jk', id_tahpel='$id_tahpel', id_kelas='$id_kelas', id_jurusan='$id_jurusan', no_telp='$no_telp', nama_ayah='$nama_ayah', tempat_lahir_ayah='$tempat_lahir_ayah', tanggal_lahir_ayah='$tanggal_lahir_ayah', nama_ibu='$nama_ibu', tempat_lahir_ibu='$tempat_lahir_ibu', tanggal_lahir_ibu='$tanggal_lahir_ibu', alamat_ortu='$alamat_ortu' WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
header("Location:index.php");
}
$sql = "SELECT nis, nisn, nama, tempat_lahir, tanggal_lahir, alamat, id_jk, id_tahpel, id_kelas, id_jurusan, no_telp, nama_ayah, tempat_lahir_ayah, tanggal_lahir_ayah, nama_ibu, tempat_lahir_ibu, tanggal_lahir_ibu, alamat_ortu FROM tb_siswa WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
$hasil = mysqli_fetch_assoc($query);

function jk($idJk, $koneksi){
  $sql = "SELECT jk FROM tb_jk WHERE id_jk=$idJk";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);
  return $data['jk'];
}
function tahpel($idTahPel, $koneksi){
  $sql = "SELECT tahun_pelajaran FROM tb_tahun_pelajaran WHERE id_tahun=$idTahPel";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);
  return $data['tahun_pelajaran'];
}
function kelas($idKelas, $koneksi){
  $sql = "SELECT kelas FROM tb_kelas WHERE id_kelas=$idKelas";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);
  return $data['kelas'];
}
function jurusan($idJurusan, $koneksi){
  $sql = "SELECT jurusan FROM tb_jurusan WHERE id_jurusan=$idJurusan";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);
  return $data['jurusan'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="../pendukung/bootstrap/assets/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="../pendukung/bootstrap/assets/dist/css/bootstrap.js"></script>
</head>
<body>
	<form method="POST">
		<label>NIS</label>
		<input type="text" name="nis" value="<?php echo $hasil['nis']?>" required/>

		<label>NISN</label>
		<input type="text" name="nisn" value="<?php echo $hasil['nisn']?>"><br>

		<label>NAMA</label>
		<input type="text" name="nama" value="<?php echo $hasil['nama']?>"><br>

		<label>TEMPAT LAHIR</label>
		<input type="text" name="tempat_lahir" value="<?php echo $hasil['tempat_lahir']?>"><br>

		<label>TANGGAL LAHIR</label>
		<input type="date" name="tanggal_lahir" value="<?php echo $hasil['tanggal_lahir']?>"><br>

		<label>ALAMAT</label>
		<input type="text" name="alamat" value="<?php echo $hasil['alamat']?>"><br>

		<label>JENIS KELAMIN</label>
		<input type="radio" name="id_jk" value="1">Laki - Laki
		<input type="radio" name="id_jk" value="2">Perempuan<br>

		<label>TAHUN PELAJARAN</label>
		<select name="id_tahpel">
			<option value="1">2016 / 2017</option>
			<option value="2">2017 / 2018</option>
			<option value="3">2018 / 2019</option>
			<option value="4">2019 / 2020</option>
			<option value="5">2020 / 2021</option>
		</select><br>

		<label>KELAS</label>
		<input type="radio" name="id_kelas" value="1">X
		<input type="radio" name="id_kelas" value="2">XI
		<input type="radio" name="id_kelas" value="3">XII<br>

		<label>JURUSAN</label>
		<select name="id_jurusan">
			<option value="1">RPL (Rekayasa Perangkat Lunak)</option>
			<option value="2">TPHP (Teknik Pengolahan Hasil Pertanian)</option>
			<option value="3">TO (Teknik Ototronik)</option>
			<option value="4">TKR (Teknik Kendaraan Ringan)</option>
			<option value="5">TSM (Teknik Sepeda Motor)</option>
		</select><br>
	
		<label>NO. TELP</label>
		<input type="text" name="no_telp" value="<?php echo $hasil['no_telp']?>"><br>
	
		<label>NAMA AYAH</label>
		<input type="text" name="nama_ayah" value="<?php echo $hasil['nama_ayah']?>"><br>
	
		<label>TEMPAT LAHIR AYAH</label>
		<input type="text" name="tempat_lahir_ayah" value="<?php echo $hasil['tempat_lahir_ayah']?>"><br>
	
		<label>TANGGAL LAHIR AYAH</label>
		<input type="date" name="tanggal_lahir_ayah" value="<?php echo $hasil['tanggal_lahir_ayah']?>"><br>
	
		<label>NAMA IBU</label>
		<input type="text" name="nama_ibu" value="<?php echo $hasil['nama_ibu']?>"><br>
	
		<label>TEMPAT LAHIR IBU</label>
		<input type="text" name="tempat_lahir_ibu" value="<?php echo $hasil['tempat_lahir_ibu']?>"><br>
	
		<label>TANGGAL LAHIR IBU</label>
		<input type="date" name="tanggal_lahir_ibu" value="<?php echo $hasil['tanggal_lahir_ibu']?>"><br>
	
		<label>Alamat Orang Tua</label>
		<input type="text" name="alamat_ortu" value="<?php echo $hasil['alamat_ortu']?>"><br>
	
		<input type="submit" name="submit" class="btn btn-danger" value="Save">
		</form>

</body>
</html>