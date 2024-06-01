<?php
include '../koneksi.php';
if (isset($_POST['edit_g'])) {
	$id = $_GET['id'];
	$nip = $_POST['nip'];
	$namaguru = $_POST['namaguru'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$password = $_POST['password'];
	$mapel = $_POST['namamapel'];
	$kelas = $_POST['kelas'];
	$jurusan = $_POST['namajurusan'];

	$sql2 = "UPDATE guru SET nip = '$nip',namaguru = '$namaguru',jk = '$jk',alamat = '$alamat', password = '$password', kelas = '$kelas' ,namajurusan = '$jurusan', namamapel = '$mapel' WHERE idguru = '$id'";
	$query = mysqli_query($conn, $sql2);
	if ($query) {
		header('location:bacaguru.php');
	} else {
		echo "Edit admin gagal";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
	<h2>Edit - Manajemen Guru</h2>
	<a href="bacaguru.php">Back</a>
	<hr>
	<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM guru WHERE idguru ='$id'";
	$query = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($query);
	?>
	<form method='POST'>
		<table border="0">
			<tr>
				<td>Nip</td>
				<td><input name='nip' type='text' id="nip" value="<?php echo $data['nip'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Guru</td>
				<td><input name='namaguru' type='text' id="namaguru" value="<?php echo $data['namaguru'] ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><select name="jk" id="">
						<option value="<?php echo $data['jk']; ?>"><?php echo $data['jk']; ?></option>
						<option value="laki-laki">Laki Laki</option>
						<option value="perempuan">Perempuan</option>
					</select></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input name='alamat' type='text' id="alamat" value="<?php echo $data['alamat'] ?>"></td>
			</tr>
			<tr>
				<td>Mata Pelajaran</td>
				<td><select name="namamapel" id="">
						<option value="<?php echo $data['namamapel']; ?>"><?php echo $data['namamapel']; ?></option>
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
						<option value="<?php echo $data['kelas']; ?>"><?php echo $data['kelas']; ?></option>
						<option value="RPL 1">RPL 1</option>
						<option value="RPL 2">RPL 2</option>
						<option value="LOGAM 1">LOGAM 1</option>
						<option value="LOGAM 2">LOGAM 2</option>
					</select></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><select name="namajurusan" id="">
						<option value="<?php echo $data['namajurusan']; ?>"><?php echo $data['namajurusan']; ?></option>
						<option value="REKAYASA PERANGKAT LUNAK">RPL</option>
						<option value="KIMIA">KIMIA</option>
						<option value="INSTRUMEN LOGAM">LOGAM</option>
						<option value="ELEKTRO">ELEKTRO</option>
					</select></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input name='password' type='text' id="password" value="<?php echo $data['password'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type='submit' value='simpan' name="edit_g"></td>
			</tr>
		</table>
	</form>
</body>

</html>