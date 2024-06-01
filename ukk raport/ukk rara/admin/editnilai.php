<?php
include "../koneksi.php";
if (isset($_POST['edit_n'])) {
	$id = $_GET['id'];
	$nisn = $_POST['nisn'];
	$idnilai = $_POST['idnilai'];
	$nip = $_POST['nip'];
	$kdjurusan = $_POST['namajurusan'];
	$idkelas = $_POST['kelas'];
	$id_m = $_POST['mapel'];
	$uh = $_POST['uh'];
	$uts = $_POST['uts'];
	$uas = $_POST['uas'];
	$na = ($uh + $uts + $uas) / 3;
	$na = round($na, 2);

	$sql2 = "UPDATE nilai SET idnilai='$idnilai',nisn='$nisn', nip='$nip', namajurusan='$kdjurusan', kelas = '$idkelas', namamapel = '$id_m',uh='$uh',uts='$uts',uas='$uas',na='$na' WHERE idnilai = '$id'";
	$query = mysqli_query($conn, $sql2);
	if ($query) {
		header('location:bacanilai.php');
	} else {
		echo "Edit nilai gagal";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
	<h2>Edit - Manajemen Nilai</h2>
	<a href="bacanilai.php">back</a>
	<hr>
	<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM nilai WHERE idnilai='$id'";
	$query = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($query);
	?>
	<form method='POST'>
		<table border="0">

			<tr>
				<td>Kode Nilai</td>
				<td><input type="text" name="idnilai" value="<?php echo "$data[idnilai]"; ?>" readonly></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nisn" value="<?php echo "$data[nisn]"; ?>"></td>
			</tr>
			<tr>
				<td>Kode Guru</td>
				<td>
					<select name="nip">
						<?php
						$sqlguru = "SELECT * FROM guru";
						$queryguru = mysqli_query($conn, $sqlguru);
						while ($dataguru = mysqli_fetch_array($queryguru)) {
							if ($dataguru['nip'] == $data['nip']) {
								echo "
	  					<option value='$dataguru[nip]' selected>$dataguru[nip] - $dataguru[namaguru]</option>
	  				";
							} else {
								echo "
	  					<option value='$dataguru[nip]'>$dataguru[nip] - $dataguru[namaguru]</option>
	  				";
							}
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kode Jurusan</td>
				<td>
					<select name="namajurusan">
						<option value="">-- Pilih --</option>
						<?php
						$sqljurusan = "SELECT * FROM jurusan";
						$queryjurusan = mysqli_query($conn, $sqljurusan);
						while ($datajurusan = mysqli_fetch_array($queryjurusan)) {
							if ($datajurusan['namajurusan'] == $data['namajurusan']) {
								echo "
	  					<option value='$datajurusan[namajurusan]' selected>$datajurusan[namajurusan]</option>
	  				";
							} else {
								echo "
	  					<option value='$datajurusan[namajurusan]'>$datajurusan[namajurusan]</option>
	  				";
							}
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kode Kelas</td>
				<td>
					<select name="kelas">
						<option value="">-- Pilih --</option>
						<?php
						$sqlkelas = "SELECT * FROM kelas";
						$querykelas = mysqli_query($conn, $sqlkelas);
						while ($datakelas = mysqli_fetch_array($querykelas)) {
							if ($datakelas['kelas'] == $data['kelas']) {
								echo "
	  					<option value='$datakelas[idkelas]' selected>$datakelas[kelas]</option>
	  				";
							} else {
								echo "
	  					<option value='$datakelas[idkelas]'>$datakelas[kelas]</option>
	  				";
							}
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kode Mata Pelajaran</td>
				<td>
					<select name="namamapel">
						<option value="">-- Pilih --</option>
						<?php
						$sqlmapel = "SELECT * FROM mapel";
						$querymapel = mysqli_query($conn, $sqlmapel);
						while ($datamapel = mysqli_fetch_array($querymapel)) {
							if ($datamapel['id_m'] == $data['id_m']) {
								echo "
	  					<option value='$datamapel[id_m]' selected>$datamapel[id_m] - $datamapel[namamapel]</option>
	  				";
							} else {
								echo "
	  					<option value='$datamapel[id_m]'>$datamapel[id_m] - $datamapel[namamapel]</option>
	  				";
							}
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Ujian Harian</td>
				<td><input type="text" name="uh" value="<?php echo "$data[uh]"; ?>"></td>
			</tr>
			<tr>
				<td>UTS</td>
				<td><input type="text" name="uts" value="<?php echo "$data[uts]"; ?>"></td>
			</tr>
			<tr>
				<td>UAS</td>
				<td><input type="text" name="uas" value="<?php echo "$data[uas]"; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type='submit' value='simpan' name='edit_n'>
				</td>
			</tr>
		</table>
	</form>
</body>

</html>