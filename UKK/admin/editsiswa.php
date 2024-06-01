<?php
include '../koneksi.php';
if(isset($_POST['edit_g'])){
$id = $_GET['id'];
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];

$sql2 = "UPDATE siswa SET nisn = '$nisn',nama = '$nama',jk = '$jk',alamat = '$alamat', password = '$password' WHERE idsiswa = '$id'";
$query = mysqli_query($conn, $sql2);
if ($query) {
	header('location:bacasiswa.php');
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
	$sql = "SELECT * FROM siswa WHERE idsiswa ='$id'";
	$query = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($query);
	?>
	<form method='POST'>
		<table border="0">
			<tr>
				<td>Nip</td>
				<td><input name='nisn' type='text' id="nisn" value="<?php echo $data['nisn'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Siswa</td>
				<td><input name='nama' type='text' id="nama" value="<?php echo $data['nama'] ?>"></td>
			</tr>
            <tr>
				<td>Jenis Kelamin</td>
				<td><select name="jk" id="">
                    <option value="<?php echo $data['jk'];?>"><?php echo $data['jk'];?></option>
                    <option value="laki-laki">Laki Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select></td>
			</tr>
            <tr>
				<td>Alamat</td>
				<td><input name='alamat' type='text' id="alamat" value="<?php echo $data['alamat'] ?>"></td>
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