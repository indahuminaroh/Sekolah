<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html><?php
include "../perpustakaan/koneksi.php";

$nis = isset($_GET['id']) ? $_GET['id'] : '';

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

	$sql = "UPDATE data_siswa SET nis='$nis', nama='$nama', ttl='$ttl', jk='$jk', alamat='$alamat', tahun_ajaran='$tahun_ajaran', nama_ibu='$nama_ibu', ttl_ibu='$ttl_ibu', nama_ayah='$nama_ayah', ttl_ayah='$ttl_ayah', kelas='$kelas', masuk='$masuk', keluar='$keluar', spp='$spp' WHERE nis='$nis'";
	$query = mysqli_query($koneksi, $sql);
	header("location: utama.php?tampil=lihat");
}

$sql = "SELECT nis, nama, ttl, jk, alamat, tahun_ajaran, nama_ibu, ttl_ibu, nama_ayah, ttl_ayah, kelas, masuk, keluar, spp FROM data_siswa WHERE nis='$nis'";
$kueri = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($kueri);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
<script src="../assets/bootstrap/bootstrap.min.js"></script>
<script src="../assets/bootstrap/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
	<div class="container">
		<form method="POST" class="form" action="edit.php">
			<div class="form-group">
				<label>No Absen :</label>
					<input class="form-control" type="text" name="nis" id="nis" value=<?php echo $data['nis'];?>>
					<span class="pesan_nis">Masukkan Nis!!!</span>
			</div>
			<div class="form-group" id="div-nama">
				<label>Nama :</label>
					<input class="form-control" type="text" name="nama" id="nama" value=<?php echo $data['nama'];?>>
					<span class="pesan_nama">Masukkan Nama!!!</span>
			</div>
			<div class="form-group" id="div-ttl">
				<label>Tampat, Tanggal Lahir</label>
					<input class="form-control" type="text" name="ttl" id="ttl" value=<?php echo $data['ttl'];?>>
					<span class="pesan_ttl">Masukkan Tempat dan tanggal Lahir</span>
			</div>
			<div class="form-group" id="div-jk">
				<label>Jenis Kelamin</label>
				<div class="radio" id="jk">
					<label><input type="radio" name="jk" value="Perempuan" selected>Perempuan</label>
					<label><input type="radio" name="jk" value="Laki - Laki" selected>Laki - Laki</label>
					<span class="pesan_jk">Pilih Jenis Kelamin anda, jangan jenis kelamin Orang :v</span>
				</div>
			</div>
			<div class="form-group" id="div-alamat">
					<label>Alamat :</label>
					<input class="form-control" type="textares" id="alamat" name="alamat" value=<?php echo $data['alamat'];?>>
					<span class="pesan_alamat">Masukkan Alamat</span>
			</div>
			<div class="form-group" id="div-tahun_ajaran">
					<label>Tahun Ajaran</label>
					<input class="form-control" type="text" name="tahun_ajaran" id="tahun_ajaran" value=<?php echo $data['tahun_ajaran'];?>>
					<span class="pesan_tahun_ajaran">Masukkan Tahun Ajaran</span>
			</div>
			<div class="form-group" id="div-nama_ibu">
					<label>Nama Ibu :</label>
					<input class="form-control" type="text" name="nama_ibu" id="nama_ibu" value=<?php echo $data['nama_ibu'];?>>
					<span class="pesan_nama_ibu">Masukkan Nama Ibu, Jangan Nama Anda</span>
			</div>
			<div class="form-group" id="div-ttl_ibu">
					<label>Tanggal Lahir Ibu :</label>
					<input class="form-control" type="date" name="ttl_ibu" id="ttl_ibu" value=<?php echo $data['ttl_ibu'];?>>
					<span class="pesan_ttl_ibu">Masukkan Tanggal Lahir Ibu</span>
			</div>
			<div class="form-group" id="div-nama_ayah">
					<label>Nama Ayah :</label>
					<input class="form-control" type="text" name="nama_ayah" id="nama_ayah" value=<?php echo $data['nama_ayah'];?>>
					<span class="pesan_nama_ayah">masukkan nama ayah</span>
			</div>
			<div class="form-group" id="div-ttl_ayah">
					<label>Tanggal Lahir Ayah</label>
					<input class="form-control" type="date" name="ttl_ayah" id="ttl_ayah" value=<?php echo $data['ttl_ayah'];?>>
					<span class="pesan_ttl_ayah">Masukkan Tanggal Lahir Ayah</span>
			</div>
			<div class="form-group" id="div-kelas">
					<label>Kelas :</label>
					<input class="form-control" type="text" name="kelas" id="kelas" value=<?php echo $data['kelas'];?>>
					<span class="pesan_kelas">Masukkan Kelas Siswa</span>
			</div>
			<div class="form-group" id="div-masuk">
					<label>Masuk :</label>
					<input class="form-control" type="date" name="masuk" id="masuk" value=<?php echo $data['masuk'];?>>
					<span class="pesan_masuk">Masukkan Tanggal Masuk</span>
			</div>
			<div class="form-group" id="div-keluar">
					<label>Keluar :</label>
					<input class="form-control" type="date" name="keluar" id="keluar" value=<?php echo $data['keluar'];?>>
					<span class="pesan_keluar">Masukkan Tanggal Keluar Siswa</span>
			</div>
			<div class="form-group" id="div-spp">
					<label>Bayar SPP :</label>
					<input class="form-control" type="text" name="spp" id="spp" value=<?php echo $data['spp'];?>>
					<span class="pesan_spp">Masukkan Nominal SPP yang dibayarkan</span>
			</div>

					<input type="submit" class="btn btn-primary" name="submit" value="Edit">
			</div>
		</form>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('form').submit(function(){
				var nis = $('#nis').val().length;

				if(nis == 0){
					$(".pesan_nis").css('display', 'block');
					return false;
				}
			});
			$('.form').submit(function(){
				var nama = $('#nama').val().length;

				if(nama == 0){
					$(".pesan_nama").css('display', 'block');
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
					return false;
				}
			});
			$('.form').submit(function(){
				var alamat = $('#alamat').val().length;

				if(alamat == 0){
					$('.pesan_alamat').css('display', 'block');
					return false;
				}
			});
			$('.form').submit(function(){
				var tahun_ajaran = $('#tahun_ajaran').val().length;

				if(tahun_ajaran == 0){
					$('.pesan_tahun_ajaran').css('display', 'block');
					return false;
				}
			});
			$('.form').submit(function(){
				var nama_ibu = $('#nama_ibu').val().length;

				if(nama_ibu == 0){
					$('.pesan_nama_ibu').css('display', 'block');
					return false;
				}
			});
			$('.form').submit(function(){
				var ttl_ibu = $('#ttl_ibu').val().length;

				if(ttl_ibu == 0){
					$('.pesan_ttl_ibu').css('display', 'block');
					return false;
				}
			});
			$('.form').submit(function(){
				var nama_ayah = $('#nama_ayah').val().length;

				if(nama_ayah == 0){
					$('.pesan_nama_ayah').css('display', 'block');
					return false;
				}
			});
			$('.form').submit(function(){
				var ttl_ayah = $('#ttl_ayah').val().length;

				if(ttl_ayah == 0){
					$('.pesan_ttl_ayah').css('display', 'block');
					return false;
				}
			});
			$('.form').submit(function(){
				var kelas = $('#kelas').val().length;

				if(kelas == 0){
					$('.pesan_kelas').css('display', 'block');
					return false;
				}
			});
			$('.form').submit(function(){
				var masuk = $('#masuk').val().length;

				if(masuk == 0){
					$('.pesan_masuk').css('display', 'block');
					return false;
				}
			});
			$('.form').submit(function(){
				var keluar = $('#keluar').val().length;

				if(keluar == 0){
					$('.pesan_keluar').css('display', 'block');
					return false;
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
</body>
</html>
