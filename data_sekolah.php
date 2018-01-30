<?php

include "perpustakaan/koneksi.php";
$sql = "SELECT nis, nama, kelas FROM data_siswa";
$kueri = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap.min.css">
	<script type="text/javascript" src="assets/bootstrap/jquery.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/modal.css">
</head>
<body>

	<div class="background_sekolah"></div>
	<div class="modal_sekolah">
		<h1>Data Sekolah Murid</h1>
	<table class="table table-condensed table-hover">
		<thead>
			<tr class="danger">
				<th>No Abs</th>
				<th>Nama</th>
				<th>Kelas</th>
			</tr>
		</thead>
		<tbody>
				<?php
				foreach ($kueri as $data):
				?>
			<tr>
				<td><?php echo $data['nis'];?></td>
				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['kelas'];?></td>
			</tr>
		<?php
		endforeach;
		?>
		</tbody>
	</table>
	<div class="tutup_sekolah">
		<button class="tombol_tutup_sekolah btn btn-danger">Keluar</button>
	</div>
	</div>
</body>
</html>
