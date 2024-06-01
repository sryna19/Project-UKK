<?php
include "../koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM guru WHERE nip = '$id'";
$query = mysqli_query($conn, $sql);
if ($query) {
	header('location:bacaguru.php');
} else {
	echo "hapus admin Gagal";
}
