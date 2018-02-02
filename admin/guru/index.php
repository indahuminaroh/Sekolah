<?php
include '../../perpustakaan/koneksi.php';
$sql = "SELECT id_guru, nip, nama_guru, tempat_lahir, tanggal_lahir, alamat, id_jk, no_telp, tahun_masuk, mapel FROM tb_guru";
$query = mysqli_query($koneksi, $sql);

function jk($idJK, $koneksi){
  $sql = "SELECT jk FROM tb_jk WHERE id_jk=$idJK";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);
  return $data['jk'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
   <table class="table table-striped" border="1">
      <thead>
        <tr>
          <th>Nip</th>
          <th>Nama</th>
          <th>TTL</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>No Telp</th>
          <th>Tahun Masuk</th>
          <th>Mapel</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
    foreach ($query as $data):
        ?>
        <tr>
          <td>
            <?php echo $data['nip'];?>
          </td>
          <td>
            <?php echo $data['nama_guru'];?>
          </td>
          <td>
            <?php echo $data['tempat_lahir'].", ".$data['tanggal_lahir'];?>
          </td>
          <td>
            <?php echo $data['alamat'];?>
          </td>
          <td>
            <?php echo jk($data['id_jk'],$koneksi);?>
          </td>
          <td>
            <?php echo $data['no_telp'];?>
          </td>
          <td>
            <?php echo $data['tahun_masuk'];?>
          </td>
          <td>
            <?php echo $data['mapel'];?>
          </td>
          <td>
            <a href="edit.php?id=<?php echo $data['id_guru'];?>" class="btn btn-success">Edit</a>
            <a href="hapus.php?id=<?php echo $data['id_guru'];?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
          </td>
      </tr>
  <?php 
    endforeach;
  ?>
              </tbody>
            </table>
</body>
</html>