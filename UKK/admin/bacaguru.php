<?php
include '../koneksi.php';
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
				<li><a href="bacaadmin.php">Home</a></li>
				<li><a href="bacaguru.php">Data Guru</a></li>
				<li><a href="bacasiswa.php">Data Siswa</a></li>
				<li><a href="bacakelas.php">Data Kelas</a></li>
				<li><a href="bacajurusan.php">Data Jurusan</a></li>
				<li><a href="bacamapel.php">Mapel</a></li>
				<li><a href="bacanilai.php">Nilai</a></li>
				<li><a href="logout.php">Keluar</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section class="content">
			<div class="col-1">
				<h2>Manajemen Guru</h2>
				<hr>
				<center><button type="button" value="Tambah Data" onclick="location.href='tambahguru.php'">Tambah Data</button></center>
				<br>
				<table border='1' cellspacing="0" cellpadding='5' style="width: 100%;">
					<tr style="text-align: center; background-color: #8BC34A; color: white;">
						<td>No</td>
						<td>Nip</td>
						<td>Nama Guru</td>
						<td>Jenis Kelamin</td>
						<td>Alamat</td>
						<td>Kelas</td>
						<td>Jurusan</td>
						<td>Mata Pelajaran</td>
						<td>Password</td>
						<td>Aksi</td>

					</tr>
					<?php
					$no = 1;
					$sql = "SELECT * FROM guru";
					$query = mysqli_query($conn, $sql);
					while ($data = mysqli_fetch_array($query)) {
					?>
						<tr>
							<td><?php echo "$no"; ?></td>
							<td><?php echo "$data[nip]"; ?></td>
							<td><?php echo "$data[namaguru]"; ?></td>
							<td><?php echo "$data[jk]"; ?></td>
							<td><?php echo "$data[alamat]"; ?></td>
							<td><?php echo "$data[kelas]"; ?></td>
							<td><?php echo "$data[namajurusan]"; ?></td>
							<td><?php echo "$data[namamapel]"; ?></td>
							<td><?php echo "$data[password]"; ?></td>

							<td>
								<a href="editguru.php?id=<?php echo "$data[idguru]"; ?>">EDIT</a> |
								<a href="hapusguru.php?id=<?php echo "$data[nip]"; ?>" onclick="return confirm('Anda yakin?')">HAPUS</a>
							</td>
						</tr>
					<?php
						$no++;
					}
					?>
				</table>
			</div>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 Contoh Website. All rights reserved.</p>
	</footer>
</body>

</html>