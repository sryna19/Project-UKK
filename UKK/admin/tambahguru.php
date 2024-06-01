<?php
include '../koneksi.php';
if (isset($_POST['tambah_g'])) {
	$nip = $_POST['nip'];
	$namaguru = $_POST['namaguru'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$password = $_POST['password'];
	$namamapel = $_POST['namamapel'];
	$kelas = $_POST['kelas'];
	$jurusan = $_POST['namajurusan'];
	$sql = "insert into guru(nip,namaguru,jk,alamat,password,namamapel,kelas,namajurusan) values('$nip','$namaguru','$jk','$alamat','$password','$namamapel','$kelas','$jurusan')";
	$query  = mysqli_query($conn, $sql);
	if ($query) {
		header('location:bacaguru.php');
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
	<h2>Tambah - Manajemen Guru</h2>
	<a href="bacaguru.php">Back</a>
	<hr>
	<form method='POST'>
		<table border="0">
			<td>NIP</td>
			<td><input type='text' name='nip' id="nip"></td>
			</tr>
			<tr>
				<td>Nama Guru</td>
				<td><input type='text' name='namaguru' id="namaguru"></td>
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
				<td>Mata Pelajaran</td>
				<td><select name="namamapel" id="">
						<option value="BAHASA INDONESIA">B INDO</option>
						<option value="MATEMATIKA">MTK</option>
						<option value="PENDIDIKAN KEWARGANEGARAAN">PKN</option>
						<option value="PENDIDIKAN AGAMA ISLAM">PAI</option>
					</select></td>
				</td>
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
			<tr>
				<td>Password</td>
				<td><input type='text' name='password' id="password"></td>
			</tr>
			<td></td>
			<td>
				<input type='submit' value='simpan' name="tambah_g">
			</td>
			</tr>
		</table>
	</form>
</body>

</html>