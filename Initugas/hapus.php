<?php
include 'koneksi.php';

$id = $_GET['nis'];
$query = "DELETE FROM tb_murid WHERE nis=$id";
$result = pg_query($conn, $query);

if ($result) {
    echo "Data berhasil dihapus.";
    header('location:index.php');
} else {
    echo "Gagal menghapus data: " . pg_last_error();
}
?>