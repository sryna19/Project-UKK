<?php
include '../koneksi.php';
if (isset($_POST['tambah_n'])) {
    $id = $_GET['id'];
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
        header('location:bacanilai.php');
    } else {
        echo "Gagal Disimpan";
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h2>Tambah - Manajemen Nilai</h2>
    <a href="bacanilai.php">back</a>
    <hr>
    <form method='POST'>
        <?php
        $id = $_GET['id'];
        ?>
        <table border="0">
            <tr>
                <td>NISN</td>
                <td>
                    <select name="nisn">
                        <?php
                        $sqlsiswa = "SELECT * FROM siswa WHERE idsiswa = '$id'";
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
                    <select name="nip">
                        <?php
                        $sqlguru = "SELECT * FROM guru";
                        $queryguru = mysqli_query($conn, $sqlguru);
                        while ($dataguru = mysqli_fetch_array($queryguru)) {
                            echo "
	  					<option value='$dataguru[nip]'>$dataguru[nip] - $dataguru[namaguru]</option>
	  				";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kode Jurusan</td>
                <td>
                    <select name="namajurusan">
                        <?php
                        $sqljurusan = "SELECT * FROM siswa WHERE idsiswa = '$id'";
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
                        $sqlkelas = "SELECT * FROM siswa WHERE idsiswa = '$id'";
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
                        $sqlmapel = "SELECT * FROM mapel";
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
</body>

</html>