<?php
include "../koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM nilai WHERE idnilai = '$id'";
$query = mysqli_query($conn, $sql);
if ($query) {
	header('location:bacanilai.php');
} else {
	echo "hapus admin Gagal";
}
