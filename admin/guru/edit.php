<?php
include '../../perpustakaan/koneksi.php';

$id_guru = $_GET['id'];

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

$sql = "UPDATE tb_guru SET nip='$nip', nama_guru='$nama', tempat_lahir='$tmp_lhr', tanggal_lahir='$tgl_lhr', alamat='$alamat', id_jk='$jk', no_telp='$no_telp', tahun_masuk='$thn_masuk', mapel='$mapel' WHERE id_guru='$id_guru'";
$query = mysqli_query($koneksi, $sql);
//header("location: index.php");
}
$sql = "SELECT nip, nama_guru, tempat_lahir, tanggal_lahir, alamat, id_jk, no_telp, tahun_masuk, mapel FROM tb_guru";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

function jk($idJK, $koneksi){
  $sql = "SELECT jk FROM tb_jk WHERE id_jk=$idJK";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);
  return $data['jk'];
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
				<td>:<input type="text" name="nip" value="<?php echo $data['nip'] ?>"><br /></td>
			</tr>
			<tr>
				<td><label>NAMA LENGKAP</label>:</td>
				<td>:<input type="text" name="nama_guru" value="<?php echo $data['nama_guru'] ?>"><br /></td>
			</tr>
			<tr>
				<td><label>TMP LAHIR</label>:</td>
				<td>:<input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir'] ?>"><br /></td>
			</tr>
			<tr>
				<td><label>TGL LAHIR</label>: </td>
				<td>:<input type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>"><br /></td>
			</tr>
			<tr>
				<td><label>ALAMAT</label></td>
				<td>:<textarea name="alamat"><?php echo $data['alamat'] ?></textarea><br /></td>
			</tr>
			<tr>
				<td><label>JENIS KELAMIN</label></td>
				<td>
					<input type="radio" name="id_jk" value="1" value=">
				<td>:<textarea name="alamat" value="<?php echo $data['nama'] ?>"">Laki-Laki
					<input type="radio" name="id_jk" value="<?php echo $data['nama'] ?>">Perempuan<br />
				</td>
			</tr>
			<tr>
				<td><label>NO TELP</label></td>
				<td>:<input type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>"><br /></td>
			</tr>
			<tr>
				<td><label>TAHUN MASUK</label> </td>
				<td>:
					<select name="tahun_masuk">
						<option value="<?php echo $data['tahun_masuk'] ?>">
            			<?php echo $data['tahun_masuk'];?>
						<option value="2013/2014">2013/2014</option>
						<option value="2014/2015">2014/2015</option>
						<option value="2015/2016">2015/2016</option>
					</select><br />
				</td>
			</tr>
			<tr>
				<td><label>MAPEL</label> </td>
				<td>:
					<input type="checkbox" name="mapel" value="<?php echo $data['mapel'] ?>">Matematika
					<input type="checkbox" name="mapel" value="<?php echo $data['mapel'] ?>">IPA
					<input type="checkbox" name="mapel" value="<?php echo $data['mapel'] ?>">IPS
					<input type="checkbox" name="mapel" value="<?php echo $data['mapel'] ?>">PPKn
					<input type="checkbox" name="mapel" value="<?php echo $data['mapel'] ?>">B. Jawa
					<input type="checkbox" name="mapel" value="<?php echo $data['mapel'] ?>">B. Indonesia
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>