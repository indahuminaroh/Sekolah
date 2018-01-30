<?php
include "../perpustakaan/koneksi.php";

if(isset($_POST['submit'])){
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$tahun_ajaran = $_POST['tahun_ajaran'];
	$nama_ibu = $_POST['nama_ibu'];
	$ttl_ibu = $_POST['ttl_ibu'];
	$nama_ayah = $_POST['nama_ayah'];
	$ttl_ayah = $_POST['ttl_ayah'];
	$kelas = $_POST['kelas'];
	$masuk = $_POST['masuk'];
	$keluar = $_POST['keluar'];
	$spp = $_POST['spp'];

$sql = "INSERT INTO data_siswa (nis, nama, ttl, jk, alamat, tahun_ajaran, nama_ibu, ttl_ibu, nama_ayah, ttl_ayah, kelas, masuk, keluar, spp) VALUES ('$nis','$nama','$ttl','$jk','$alamat','$tahun_ajaran','$nama_ibu','$ttl_ibu','$nama_ayah','$ttl_ayah','$kelas','$masuk','$keluar','$spp')";
$kueri = mysqli_query($koneksi, $sql);
//header("location: home.php");
var_dump($kueri);
if($kueri){
	echo "Berhasil";
}else{
	echo "GAgal";
	echo mysqli_error($koneksi);
}
}
?>

<html>
<head>
	<title>Tambah Data Siswa</title>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
<script src="../assets/bootstrap/bootstrap.min.js"></script>
<script src="../assets/bootstrap/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">	
</head>
<body>
	<div class="container">
		<h2>Tambah Data Siswa</h2>
		<form method="POST" class="form-horizontal form">
			<div class="form-group">
				<label>No Absen :</label>
				<input class="form-control" type="text" name="nis" id="nis">
				<span class="pesan_nis">Wajib Mengisi Nis</span>
			</div>
			<div class="form-group" id="div-nama">
				<label>Nama :</label>
				<input class="form-control" type="text" name="nama" id="nama">
				<span class="pesan_nama">Wajib Mengisi Nama</span>
			</div>
			<div class="form-group" id="div-ttl">
				<label>Tempat, Tanggal Lahir :</label>
				<input class="form-control" type="text" name="ttl" id="ttl">
				<span class="pesan_ttl">Masukkan Tempat dan Tanggal Lahir</span>
			</div>
			<div class="form-group" id="div-jk">
					<label>Jenis Kelamin</label>
			<div class="radio" id="jk">
				<label><input type="radio" name="jk" value="Perempuan" selected>Perempuan</label>
				<label><input type="radio" name="jk" value="Laki - Laki">Laki - Laki</label>
				<span class="pesan_jk">Masukkan Jenis Kelamin, karena anda manusia :v</span>
				</div>
			</div>
			<div class="form-group" id="div-alamat">
				<label>Alamat :</label>
				<input class="form-control" type="textarea" name="alamat" id="alamat">
				<span class="pesan_alamat">Masukkan Alamat</span>
			</div>
			<div class="form-group" id="div-tahun_ajaran">
					<label>Tahun Ajaran :</label>
					<input class="form-control" type="text" name="tahun_ajaran" id="tahun_ajaran">
					<span class="pesan_tahun_ajaran">Masukkan Tahun Ajaran Siswa Masuk</span>
			</div>
			<div class="form-group" id="div-nama_ibu">
					<label>Nama Ibu :</label>
				<input class="form-control" type="text" name="nama_ibu" id="nama_ibu">
				<span class="pesan_nama_ibu">Masukkan Nama Ibu</span>
			</div>
			<div class="form-group" id="div-ttl_ibu">
				<label>Tanggal Lahir Ibu :</label>
				<input class="form-control" type="date" name="ttl_ibu" id="ttl_ibu">
				<span class="pesan_ttl_ibu">Masukkan tanggal lahir ibu</span>
			</div>
			<div class="form-group" id="div-nama_ayah">
				<label>Nama Ayah :</label>
				<input class="form-control" type="text" name="nama_ayah" id="nama_ayah">
				<span class="pesan_nama_ayah">Masukkan Nama Ayah</span>
			</div>
			<div class="form-group" id="div-ttl_ayah">
				<label>Tanggal Lahir Ayah :</label>
				<input class="form-control" type="date" name="ttl_ayah" id="ttl_ayah">
				<span class="pesan_ttl_ayah">Masukkan Tanggal Lahir Ayah</span>
			</div>
			<div class="form-group" id="div-kelas">
				<label>Kelas :</label>
				<input class="form-control" type="text" name="kelas" id="kelas">
				<span class="pesan_kelas">Masukkan Kelas Siswa</span>
			</div>
			<div class="form-group" id="div-masuk">
				<label>Masuk Sekolah :</label>
				<input class="form-control" type="date" name="masuk" id="masuk">
				<span class="pesan_masuk">Masukkan tanggal siswa Masuk Sekolah</span>
			</div>
			<div class="form-group" id="div-keluar">
				<label>Keluar Sekolah :</label>
				<input class="form-control" type="date" name="keluar" id="keluar">
				<span class="pesan_keluar">Masukkan tanggal siswa Keluar Sekolah</span>
			</div>
			<div class="form-group" id="div-spp">
				<label>Bayar SPP :</label>
				<input class="form-control" type="text" name="spp" id="spp">
				<span class="pesan_spp">Masukkan Nominal Siswa Bayar SPP</span>
			</div>
			
					<input type="submit" class="btn btn-primary" name="submit" value="Simpan">
				
		</form>
	</div>

</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.form').submit(function(){
				var nis = $('#nis').val().length;

				if(nis == 0){
					$(".pesan_nis").css('display','block');
					return false;
				}
			});
			$('.form').submit(function(){
				var nama = $('#nama').val().length;

				if(nama == 0){
					$(".pesan_nama").css('display','block');
					return false;
				}
			});
			$('.form').submit(function(){
				var ttl = $('#ttl').val().length;

				if(ttl == 0){
					$('.pesan_ttl').css('display', 'block');
					return false;
				}
			});
			$('.form').submit(function(){
				var jk = $('#jk').val().length;

				if(jk == 0){
					$('.pesan_jk').css('display', 'block');
				}
			});
			$('.form').submit(function(){
				var alamat = $('#alamat').val().length;

				if(alamat == 0){
					$('.pesan_alamat').css('display', 'block');
				}
			});
			$('.form').submit(function(){
				var tahun_ajaran = $('#tahun_ajaran').val().length;

				if(tahun_ajaran == 0){
					$('.pesan_tahun_ajaran').css('display', 'block');
				}
			});
			$('.form').submit(function(){
				var nama_ibu = $('#nama_ibu').val().length;

				if(nama_ibu == 0){
					$('.pesan_nama_ibu').css('display', 'block');
				}
			});
			$('.form').submit(function(){
				var ttl_ibu = $('#ttl_ibu').val().length;

				if(ttl_ibu == 0){
					$('.pesan_ttl_ibu').css('display', 'block');
				}
			});
			$('.form').submit(function(){
				var nama_ayah = $('#nama_ayah').val().length;

				if(nama_ayah == 0){
					$('.pesan_nama_ayah').css('display', 'block');
				}
			});
			$('.form').submit(function(){
				var ttl_ayah = $('#ttl_ayah').val().length;

				if(ttl_ayah == 0){
					$('.pesan_ttl_ayah').css('display', 'block');
				}
			});
			$('.form').submit(function(){
				var kelas = $('#kelas').val().length;

				if(kelas == 0){
					$('.pesan_kelas').css('display', 'block');
				}
			});
			$('.form').submit(function(){
				var masuk = $('#masuk').val().length;

				if(masuk == 0){
					$('.pesan_masuk').css('display', 'block');
				}
			});
			$('.form').submit(function(){
				var keluar = $('#keluar').val().length;

				if(keluar == 0){
					$('.pesan_keluar').css('display', 'block');
				}
			});
			$('.form').submit(function(){
				var spp = $('#spp').val().length;

				if(spp == 0){
					$('.pesan_spp').css('display', 'block');
				}
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#nis").keyup(function(){
				$("#div-nama").slideDown("slow");
			});
			$("#div-nama").keyup(function(){
				$("#div-ttl").slideDown("slow");
			});
			$("#div-ttl").keyup(function(){
				$("#div-jk").slideDown("slow");
			});
			$("#div-jk").keyup(function(){
				$("#div-alamat").slideDown("slow");
			});
			$("#div-alamat").keyup(function(){
				$("#div-tahun_ajaran").slideDown("slow");
			});
			$("#div-tahun_ajaran").keyup(function(){
				$("#div-nama_ibu").slideDown("slow");
			});
			$("#div-nama_ibu").keyup(function(){
				$("#div-ttl_ibu").slideDown('slow');
			});
			$("#div-ttl_ibu").keyup(function(){
				$("#div-nama_ayah").slideDown("slow");
			});
			$("#div-nama_ayah").keyup(function(){
				$("#div-ttl_ayah").slideDown("slow");
			});
			$('#div-ttl_ayah').keyup(function(){
				$("#div-kelas").slideDown("slow");
			});
			$("#div-kelas").keyup(function(){
				$("#div-masuk").slideDown("slow");	
			});
			$('#div-masuk').keyup(function(){
				$("#div-keluar").slideDown("slow");
			});
			$("#div-keluar").keyup(function(){
				$("#div-spp").slideDown();
			});
		});
	</script>
</html>