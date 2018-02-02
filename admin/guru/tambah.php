<?php
include '../../perpustakaan/koneksi.php';
if (isset($_POST['submit'])){
	$nip = $_POST['nip'];
	$nama = $_POST['nama_guru'];
	$tmp_lhr = $_POST['tempat_lahir'];
	$tgl_lhr = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['id_jk'];
	$no_telp = $_POST['no_telp'];
	$thn_masuk = $_POST['tahun_masuk'];
	$mapel = $_POST['mapel'];

$sql = "INSERT INTO tb_guru(nip, nama_guru, tempat_lahir, tanggal_lahir, alamat, id_jk, no_telp, tahun_masuk, mapel) VALUES ('$nip', '$nama', '$tmp_lhr', '$tgl_lhr', '$alamat', '$jk', '$no_telp', '$thn_masuk', '$mapel')";
$query = mysqli_query($koneksi, $sql);
var_dump($query);
	if ($query) {
		echo "Berhasil";
	}else{
		echo "gagal";
		echo mysqli_error($koneksi);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td><label>NIP</label></td>
				<td>:<input type="text" name="nip"><br /></td>
			</tr>
			<tr>
				<td><label>NAMA LENGKAP</label>:</td>
				<td>:<input type="text" name="nama_guru"><br /></td>
			</tr>
			<tr>
				<td><label>TMP LAHIR</label>:</td>
				<td>:<input type="text" name="tempat_lahir"><br /></td>
			</tr>
			<tr>
				<td><label>TGL LAHIR</label>: </td>
				<td>:<input type="text" name="tanggal_lahir"><br /></td>
			</tr>
			<tr>
				<td><label>ALAMAT</label></td>
				<td>:<textarea name="alamat"></textarea><br /></td>
			</tr>
			<tr>
				<td><label>JENIS KELAMIN</label></td>
				<td>
					<input type="radio" name="id_jk" value="1">Laki-Laki
					<input type="radio" name="id_jk" value="2">Perempuan<br />
				</td>
			</tr>
			<tr>
				<td><label>NO TELP</label></td>
				<td>:<input type="text" name="no_telp"><br /><html></td>
			</tr>
			<tr>
				<td><label>TAHUN MASUK</label> </td>
				<td>:
					<select name="tahun_masuk">
						<option value="2013/2014">2013/2014</option>
						<option value="2014/2015">2014/2015</option>
						<option value="2015/2016">2015/2016</option>
					</select><br />
				</td>
			</tr>
			<tr>
				<td><label>MAPEL</label> </td>
				<td>:
					<input type="checkbox" name="mapel" value="Matematika">Matematika
					<input type="checkbox" name="mapel" value="IPA">IPA
					<input type="checkbox" name="mapel" value="IPS">IPS
					<input type="checkbox" name="mapel" value="PPKn">PPKn
					<input type="checkbox" name="mapel" value="B. Jawa">B. Jawa
					<input type="checkbox" name="mapel" value="B. Indonesia">B. Indonesia
					<input type="checkbox" name="mapel" value="">
					<input type="checkbox" name="mapel" value="">
					<input type="checkbox" name="mapel" value="">
					<input type="checkbox" name="mapel" value="">
					<input type="checkbox" name="mapel" value="">
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>