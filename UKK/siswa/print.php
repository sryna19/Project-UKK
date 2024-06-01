<?php
include '../koneksi.php';
include '../cek1.php';
date_default_timezone_set('Asia/Jakarta');
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Print</title>
    <style>
        body {
            margin: 20px;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        table {
            margin-bottom: 30px;
        }

        .ttd {
            text-align: right;
        }
    </style>
</head>

<body>
    <header>

    </header>

    <main>
        <section class="content">
            <div class="col-1">
                <h2><?php echo $_SESSION['nama']; ?></h2>
                <h2 style="text-align:center;">Nilai</h2>
                <hr>
                <p style="text-align: center;">Ini adalah rekap nilai anda pada saat ini Semoga nilai anda memuaskan, TerimaKasih</p>
                <a href="home.php">Back</a>
                <br>
                <table border='1' cellspacing="0" cellpadding='5' width='100%'>
                    <tr>
                        <th>No</th>
                        <th>Kode Nilai</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
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
                    $sql = "SELECT * FROM nilai,siswa,guru WHERE nilai.nip=guru.nip AND nilai.nisn=siswa.nisn AND siswa.nisn='$_GET[id]' ORDER BY idnilai ASC";
                    $query = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                        echo "
				<tr>
					<td>$no</td>
					<td>$data[idnilai]</td>
					<td>$data[nisn]</td>
					<td>$data[nama]</td>    
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
                <div class="ttd">
                    <p>
                    <p>Gunungputri, <?php echo date('l/M/Y H:i'); ?></p>
                    <br><br><br>
                    <p>(............................................)
                    </p>
                </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Contoh Website. All rights reserved.</p>
    </footer>
    <script>
        window.print();
    </script>
</body>


</html>