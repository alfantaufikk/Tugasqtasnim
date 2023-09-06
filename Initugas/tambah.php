<?php
include  'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];




    $query = "INSERT INTO tb_murid (nis, nama_murid, kelas, jurusan, alamat) VALUES ('$nis', '$nama', '$kelas', '$jurusan', '$alamat')";
    $result = pg_query($conn, $query);

    if ($result) {
        header('location:index.php');
    } else {
        echo "Gagal menambahkan data: " . pg_last_error();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Tambahkan Data</title>
</head>
<body>
    <div class="container container-fluid">
    <form method="POST" action="tambah.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Nis</label>
    <input type="text" class="form-control" id="#" aria-describedby="#" placeholder="Masukan Nis" name="nis">  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input type="#" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama" name="nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kelas</label>
    <input type="#" class="form-control" id="exampleInputPassword1" placeholder="Kelas" name="kelas">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jurusan</label>
    <input type="#" class="form-control" id="exampleInputPassword1" placeholder="Jurusan" name="jurusan">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="#" class="form-control" id="exampleInputPassword1" placeholder="Alamat" name="alamat">
  </div>
  <input type="submit" class="btn btn-primary mt-2"></button>
</form>
    </div>
</body>
</html>