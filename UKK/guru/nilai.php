<?php
include '../koneksi.php';
if (isset($_POST['tambah_n'])) {
	$nis = $_POST['nisn'];
	$nip = $_POST['nip'];
	$kdjurusan = $_POST['namajurusan'];
	$idkelas = $_POST['kelas'];
	$id_m = $_POST['namamapel'];
	$uh = $_POST['uh'];
	$uts = $_POST['uts'];
	$uas = $_POST['uas'];
	$na = ($uh + $uts + $uas) / 3;
	$na = round($na, 2);
	$sql = "INSERT INTO nilai(nisn,nip,namajurusan,kelas,namamapel,uh,uts,uas,na) VALUES('$nis','$nip','$kdjurusan','$idkelas','$id_m','$uh','$uts','$uas','$na')";
	$query  = mysqli_query($conn, $sql);
	if ($query) {
		echo "<script>alert('Data Terkirim'); window.location.href='halguru.php'</script>";
	} else {
		echo "Gagal Disimpan";
		echo mysqli_error($conn);
	}
}
?>
<?php
include '../cek1.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Beranda</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		header {
			position: relative;
		}

		.header-image {
			position: relative;
			overflow: hidden;
			aspect-ratio: 3/1;
			object-fit: cover;
		}

		.header-image img {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			max-width: 100%;
			/* set maksimum lebar gambar menjadi 50% dari lebar viewport */
		}

		nav {
			background-color: orange;
			color: #fff;
			padding: 20px;
		}

		nav ul {
			margin: 0;
			padding: 0;
			list-style: none;
			display: flex;
			flex-wrap: wrap;
		}

		nav ul li {
			margin-right: 20px;
		}

		nav ul li a {
			color: #fff;
			text-decoration: none;
			margin: 0;
			padding: 20px;
		}

		nav ul li a:hover {
			color: #fff;
			text-decoration: none;
			background-color: #777777;
			transition: 0.3s;
		}

		main {
			margin: 20px;
			display: flex;
			flex-direction: column;
		}

		.content {
			display: flex;
			flex-wrap: wrap;
			margin-bottom: 40px;
		}


		.col-1 .cont {
			margin: auto;
			background-color: #4DB6AC;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			color: white;

		}

		.col-1 .cont h2 {
			margin-top: 0;
		}


		.col-1 button {
			margin-bottom: 10px;
			width: 100px;
			height: 50px;
			background-color: #8BC34A;
			border: none;
			border-radius: 10px;
			color: white;
			font-size: 15px;
			font-weight: 500;
		}

		.col-1 button:hover {
			background-color: #048d16;
			color: white;
			cursor: pointer;
		}

		.col-1 form input[type='text'],
		.col-1 form input[type='password'] {
			width: 90%;
			padding: 10px;
			border-radius: 3px;
			border: none;
			margin-bottom: 20px;
		}

		.col-1 form input[type='submit'] {
			background-color: #048d16;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}


		footer {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
	</style>
</head>

<body>
	<header>
		<div class="header-image">
			<img src="../smkbisa1.jpeg" alt="Header Image" />
		</div>
		<nav>
			<ul>
				<li><a href="halguru.php">Home</a></li>

				<li><a href="nilai.php">Tambah Nilai</a></li>
				<li><a href="bacanilaig.php?id=<?php echo $_SESSION['nip']; ?>">Data Nilai</a></li>
				<li><a href="logout.php">Keluar</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<form action="" method="post">
			<section class="content">
				<div class="col-1">
					<h2>Input Nilai</h2>
					<hr>
					<br>
					<table border="0">
						<tr>
							<td>NISN</td>
							<td>
								<select name="nisn">
									<option value="">-- Pilih --</option>
									<?php
									$sqlsiswa = "SELECT * FROM siswa";
									$querysiswa = mysqli_query($conn, $sqlsiswa);
									while ($datasiswa = mysqli_fetch_array($querysiswa)) {
										echo "
	  					<option value='$datasiswa[nisn]'>$datasiswa[nisn] - $datasiswa[nama]</option>
	  				";
									}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Kode Guru</td>
							<td>
								<input type="text" name="nip" value="<?php echo $_SESSION['nip']; ?>" readonly>
							</td>
						</tr>
						<tr>
							<td>Kode Jurusan</td>
							<td>
								<select name="namajurusan">
									<?php
									$sqljurusan = "SELECT * FROM guru";
									$queryjurusan = mysqli_query($conn, $sqljurusan);
									while ($datajurusan = mysqli_fetch_array($queryjurusan)) {
										echo "
	  					<option value='$datajurusan[namajurusan]'>$datajurusan[namajurusan]</option>
	  				";
									}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Kode Kelas</td>
							<td>
								<select name="kelas">
									<?php
									$sqlkelas = "SELECT * FROM guru";
									$querykelas = mysqli_query($conn, $sqlkelas);
									while ($datakelas = mysqli_fetch_array($querykelas)) {
										echo "
	  					<option value='$datakelas[kelas]'>$datakelas[kelas]</option>
	  				";
									}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Kode Mata Pelajaran</td>
							<td>
								<select name="namamapel">
									<?php
									$sqlmapel = "SELECT * FROM guru WHERE namamapel";
									$querymapel = mysqli_query($conn, $sqlmapel);
									while ($datamapel = mysqli_fetch_array($querymapel)) {
										echo "
	  					<option value='$datamapel[namamapel]'>$datamapel[namamapel]</option>
	  				";
									}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Ujian Harian</td>
							<td><input type="text" name="uh"></td>
						</tr>
						<tr>
							<td>UTS</td>
							<td><input type="text" name="uts"></td>
						</tr>
						<tr>
							<td>UAS</td>
							<td><input type="text" name="uas"></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type='submit' value='simpan' name="tambah_n">
							</td>
						</tr>
					</table>
		</form>
		</div>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 Contoh Website. All rights reserved.</p>
	</footer>
</body>

</html>