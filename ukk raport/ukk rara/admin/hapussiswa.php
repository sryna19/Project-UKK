<?php
include "../koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM siswa WHERE idsiswa = '$id'";
$query = mysqli_query($conn, $sql);
if ($query) {
	header('location:bacasiswa.php');
} else {
	echo "hapus admin Gagal";
}
