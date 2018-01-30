<?php
	include "../perpustakaan/koneksi.php"
?>
<html>
<head>
	<title>Pilih yang Mana?</title>
	<style type="text/css">
		.kotak{
			width: 600px;
			height: 400px;
			margin: 400px auto;
		}
		.hapus{
			color:#fff;
			background-color:#337ab7;
			border-color:#2e6da4;
			position:relative;
			float:left;
			padding: 100px;
			border-radius:0;
		}
	</style>
</head>
<body>
	<div class="kotak">
		<table>
			<tr>
				<td>Batal</td>
				<td>Hapus</td>
			</tr>
			<tr>
				<td><button class="batal">Batal</button></td>
				<td><button class="hapus">Hapus</button></td>
			</tr>
		</table>
	</div>

</body>
</html>