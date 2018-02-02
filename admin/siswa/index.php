<?php
include '../lib/koneksi.php';
$sql = "SELECT nis, nisn, nama, tempat_lahir, tanggal_lahir, alamat, id_jk, id_tahpel, id_kelas, id_jurusan, no_telp, nama_ayah, tempat_lahir_ayah, tanggal_lahir_ayah, nama_ibu, tempat_lahir_ibu, tanggal_lahir_ibu, alamat_ortu FROM tb_siswa";
$query = mysqli_query($koneksi, $sql);

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
/*
var_dump($query);
if ($query) {
    echo "berhasi;";
  }else {
    echo "gagal";
    echo mysqli_error($koneksi);
  }*/

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tampil Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="../pendukung/css/bootstrap.css">
    <script type="text/javascript" src="../pendukung/js/bootstrap.js"></script>
  </head>

  <body>
    <div class="container">
      <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
  <table>
    <thead>
      <tr>
        <th>NIS</th>
        <th>NISN</th>
        <th>NAMA</th>
        <th>TEMPAT, TANGGAL LAHIR</th>
        <th>ALAMAT</th>
        <th>JENIS KELAMIN</th>
        <th>TAHUN AJARAN</th>
        <th>KELAS</th>
        <th>JURUSAN</th>
        <th>NO. TELP</th>
        <th>NAMA AYAH</th>
        <th>TEMPAT, TANGGAL LAHIR AYAH</th>
        <th>NAMA IBU</th>
        <th>TEMPAT, TANGGAL LAHIR IBU</th>
        <th>ALAMAT Orang Tua</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
  <?php 
    foreach ($query as $data):
  ?>
      <tr>
        <td>
          <?php echo $data['nis'];?>
        </td>
        <td>
          <?php echo $data['nisn'];?>
        </td>
        <td>
          <?php echo $data['nama'];?>
        </td>
        <td>
          <?php echo $data['tempat_lahir']. ", " .$data['tanggal_lahir'];?>
        </td>
        <td>
          <?php echo $data['alamat'];?>
        </td>
        <td>
          <?php echo jk($data['id_jk'],$koneksi);?>
        </td>
        <td>
          <?php echo tahpel($data['id_tahpel'],$koneksi);?>
        </td>
        <td>
          <?php echo kelas($data['id_kelas'],$koneksi);?>
        </td>
        <td>
          <?php echo jurusan($data['id_jurusan'],$koneksi);?> 
        </td>
        <td>
          <?php echo $data['no_telp'];?>
        </td>
        <td>
          <?php echo $data['nama_ayah'];?>
        </td>
        <td>
          <?php echo $data['tempat_lahir_ayah']. ", ".$data['tanggal_lahir_ayah'];?>
        </td>
        <td>
          <?php echo $data['nama_ibu'];?>
        </td>
        <td>
          <?php echo $data['tempat_lahir_ibu']. ", ". $data['tanggal_lahir_ibu'];?>
        </td>
        <td>
          <?php echo $data['alamat_ortu'];?>
        </td>
        <td>
          <a href="edit.php?id=<?php echo $data['nisn'];?>" class="btn btn-success">Edit</a>
          <a href="hapus.php?id=<?php echo $data['nisn'];?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
        </td>
      </tr>
  <?php 
    endforeach;
  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>

