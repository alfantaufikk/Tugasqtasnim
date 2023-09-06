<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hayoloooo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM public.tb_murid";
    $no = 1;
    $result = pg_query($conn, $query);
    while ($row = pg_fetch_assoc($result)) {
    ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>

      <td><?php echo $row ['nis'] ?></td>
      <td><?php echo $row ['nama_murid'] ?></td>
      <td><?php echo $row ['kelas'] ?></td>
      <td><?php echo $row ['jurusan'] ?></td>
      <td><?php echo $row ['alamat'] ?></td>
      <td>
        <button type="button" class="btn btn-outline-denger"><a href="ubah.php?id=<?php echo $row['nis'];?>">Edit</a></button>
        <button type="button" class="btn btn-outline-denger"><a href="hapus.php?nis=<?php echo $row['nis'];?>">Hapus</a></button>
    </tr>
  <?php
    }
  ?>
  </tbody>
</table>
<a class="ms-3 btn btn-outline-secondary" role="button" href="tambah.php">Tambah Data</button>
</body>
</html>