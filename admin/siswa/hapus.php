<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="refresh" content="1;url=index.php">
</head>
<body>

<?php 

include "../lib/koneksi.php";

$nisn = $_GET['id'];

$sql = "DELETE FROM tb_siswa WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);

if($query){
echo "Dihapus";
}else{
	echo "Tidak Dihapus";
}


 ?>

</body>
</html>