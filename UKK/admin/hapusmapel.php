<?php
include "../koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM mapel WHERE id_m = '$id'";
$query = mysqli_query($conn, $sql);
if ($query) {
	header('location:bacamapel.php');
} else {
	echo "hapus admin Gagal";
}
