<?php
include 'koneksi.php';

$nis = $_GET['id'];
$query = "SELECT * FROM tb_murid WHERE nis=$nis";
$result = pg_query($conn, $query);
$row = pg_fetch_assoc($result);
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
    <form method="POST" action="ubah_aksi.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Nis</label>
    <input type="hidden" value="<?php echo $row["nis"] ?>" name="nisn">
    <input type="text" class="form-control" id="#" aria-describedby="#" placeholder="Masukan Nis" name="nis" value="<?php echo $row['nis']   ?>">  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input type="#" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama" name="nama" value="<?php echo $row['nama_murid']   ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kelas</label>
    <input type="#" class="form-control" id="exampleInputPassword1" placeholder="Kelas" name="kelas"value="<?php echo $row['kelas']   ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jurusan</label>
    <input type="#" class="form-control" id="exampleInputPassword1" placeholder="Jurusan" name="jurusan"value="<?php echo $row['jurusan']   ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="#" class="form-control" id="exampleInputPassword1" placeholder="Alamat" name="alamat"value="<?php echo $row['alamat']   ?>">
  </div>
  <input type="submit" class="btn btn-primary mt-2">
</form>
    </div>
</body>
</html>