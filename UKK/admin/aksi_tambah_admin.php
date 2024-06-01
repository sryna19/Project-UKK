<?php
include "../koneksi.php";
$username = $_POST['username'];
$kelas = $_POST['kelas'];
$namamapel = $_POST['namamapel'];
$jurusan = $_POST['jurusan'];
$password = $_POST['password'];
$sql = "insert into admin(username,kelas,namamapel,jurusan,password) values('$username','$kelas','$''$password')";
$query  = mysqli_query($conn, $sql);
if ($query) {
	header('location:bacaadmin.php');
} else {
	echo "Gagal Disimpan";
}
