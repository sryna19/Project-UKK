<?php
include "koneksi.php";
if (isset($_POST['login'])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql = "SELECT * FROM admin where username = '$username' and password = '$password'";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) != 0) {
		echo "<br>Login sukses";
		$data = mysqli_fetch_array($query);
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['log'] = true;
		header("location:admin/bacaadmin.php");
	} else {
		echo "<script>alert('Masukkan Data Terlebih Dahulu'); window.location.href='index.php'</script>";
	}
}
