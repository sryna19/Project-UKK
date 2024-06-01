<?php
include '../koneksi.php';
if (isset($_POST['tambah_s'])) {
	$nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$kelas = $_POST['kelas'];
	$jurusan = $_POST['namajurusan'];
	$password = $_POST['password'];
	$sql = "insert into siswa(nisn,nama,jk,alamat,kelas,namajurusan,password) values('$nisn','$nama','$jk','$alamat','$kelas','$jurusan','$password')";
	$query  = mysqli_query($conn, $sql);
	if ($query) {
		header('location:bacasiswa.php');
	} else {
		echo "Gagal Disimpan";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
	<h2>Tambah - Manajemen Siswa</h2>
	<a href="bacasiswa.php">Back</a>
	<hr>
	<form method='POST'>
		<table border="0">
			<td>nisn</td>
			<td><input type='text' name='nisn' id="=nisn"></td>
			</tr>
			<tr>
				<td>Nama Siswa</td>
				<td><input type='text' name='nama' id="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><select name="jk" id="">
						<option value="laki-laki">Laki Laki</option>
						<option value="perempuan">Perempuan</option>
					</select></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type='text' name='alamat' id="alamat"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><select name="kelas" id="">
						<option value="RPL 1">RPL 1</option>
						<option value="RPL 2">RPL 2</option>
						<option value="LOGAM 1">LOGAM 1</option>
						<option value="LOGAM 2">LOGAM 2</option>
					</select></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><select name="namajurusan" id="">
						<option value="REKAYASA PERANGKAT LUNAK">RPL</option>
						<option value="KIMIA">KIMIA</option>
						<option value="INSTRUMEN LOGAM">LOGAM</option>
						<option value="ELEKTRO">ELEKTRO</option>
					</select></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type='text' name='password' id="password"></td>
			</tr>
			<tr>

				<td></td>
				<td>
					<input type='submit' value='simpan' name="tambah_s">
				</td>
			</tr>
		</table>
	</form>
</body>

</html>