<?php
include "koneksi.php";
if(isset($_POST['tambah'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = mysqli_query($conn, "INSERT INTO admin(username, password) VALUES ('$username','$password')");
    if($sql){
        echo "<script>alert('Data Tersimpan'); window.location.href='admin/baca_admin.php'</script>";
    }
}
if(isset($_POST['edit_admin'])){
    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = mysqli_query($conn, "UPDATE admin SET username = '$username', password = '$password' WHERE id = '$id'");
    if($sql){
        echo "<script>alert('Data Berhasil Di Update'); window.location.href = 'admin/baca_admin.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Di Update'); window.location.href = 'admin/edit_admin.php'</script>";
    }
}
if(isset($_POST['tambah_s'])){
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $al = $_POST['alamat'];
    $sql = mysqli_query($conn, "INSERT INTO siswa(nisn, nama, jk, alamat) VALUES ('$nisn','$nama','$jk','$al')");
    if($sql){
        echo "<script>alert('Data Berhasil Di Update'); window.location.href = 'siswa/baca_siswa.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Di Update'); window.location.href = 'siswa/baca_siswa.php'</script>";
    }
}
if(isset($_POST['edit-s'])){
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $al = $_POST['alamat'];
    $sql = mysqli_query($conn, "UPDATE siswa SET nisn = '$nisn', nama = '$nama', jk = '$jk', alamat = '$al' WHERE nisn = '$nisn'");
    if($sql){
        echo "<script>alert('Data Berhasil Di Update'); window.location.href = 'siswa/baca_siswa.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Di Update'); window.location.href = 'siswa/edit_siswa.php'</script>";
    }
    }
?>