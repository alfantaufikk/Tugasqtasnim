<?php
    include "koneksi.php";

    $nisn = $_POST["nisn"];

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE tb_murid SET nis='$nis', nama_murid='$nama', kelas='$kelas', jurusan='$jurusan', alamat='$alamat' WHERE nis='$nisn'";
    $result = pg_query($conn, $query);

    if ($result) {
        echo "Data berhasil diubah.";
        header("location:index.php");
    } else {
        echo "Gagal mengubah data: " . pg_last_error();
    }
?>