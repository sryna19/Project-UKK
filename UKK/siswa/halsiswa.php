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

		nav ul li a:active {
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
			font-size: 20px;
			font-weight: 500;
			font-style: bold;
			font-family: 'Times New Roman', Times, serif;
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

		.column {
			width: 100%;
			padding: 20px;
			box-sizing: border-box;
			margin-left: 200px;
		}

		@media only screen and (min-width: 768px) {
			.column {
				width: 50%;
			}
		}

		.column h2 {
			margin-top: 0;
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
				<li><a href="home.php">Home</a></li>
				<li><a href="halsiswa.php?id=<?php echo $_SESSION['nisn']; ?>">Data Nilai</a></li>
				<li><a href="mapel.php">Mata Pelajaran</a></li>
				<li><a href="jurusan.php">Data jurusan</a></li>
				<li><a href="logout.php">Keluar</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section class="content">
			<div class="col-1">
				<h2>Nilai</h2>
				<button onclick="location.href='print.php?id=<?php echo $_SESSION['nisn']; ?>'">Print</button>
				<hr>
				<br>
				<table border='1' cellspacing="0" cellpadding='5'>
					<tr>
						<th>No</th>
						<th>Kode Nilai</th>
						<th>NIS</th>
						<th>NIP</th>
						<th>Nama Guru</th>
						<th>Nama Jurusan</th>
						<th>Nama Kelas</th>
						<th>Nama Mapel</th>
						<th>UH</th>
						<th>UTS</th>
						<th>UAS</th>
						<th>NA</th>

					</tr>
					<?php
					$id = $_GET['id'];
					$no = 1;
					$sql = "SELECT * FROM nilai,guru WHERE guru.nip=nilai.nip AND nisn='$_GET[id]' ORDER BY idnilai ASC";
					$query = mysqli_query($conn, $sql);
					while ($data = mysqli_fetch_array($query)) {
						echo "
				<tr>
					<td>$no</td>
					<td>$data[idnilai]</td>
					<td>$data[nisn]</td>
                    <td>$data[nip]</td>
					<td>$data[namaguru]</td>
					<td>$data[namajurusan]</td>
					<td>$data[kelas]</td>
					<td>$data[namamapel]</td>
					<td>$data[uh]</td>
					<td>$data[uts]</td>
					<td>$data[uas]</td>
					<td>$data[na]</td>		
				</tr>
				";
						$no++;
					}
					?>
				</table>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 Contoh Website. All rights reserved.</p>
	</footer>
</body>

</html>