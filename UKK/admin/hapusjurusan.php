<?php
include "../koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM jurusan WHERE kdjurusan = '$id'";
$query = mysqli_query($conn, $sql);
if ($query) {
	header('location:bacajurusan.php');
} else {
	echo "hapus admin Gagal";
}
