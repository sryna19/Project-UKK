<?php
include "../koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM kelas WHERE idkelas = '$id'";
$query = mysqli_query($conn, $sql);
if ($query) {
	header('location:bacakelas.php');
} else {
	echo "hapus admin Gagal";
}
