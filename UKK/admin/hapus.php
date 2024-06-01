<?php
include "../koneksi.php";
$id = $_GET['id'];
$sql = mysqli_query($conn, "DELETE FROM admin WHERE id = '$id'");
if($sql){
    echo "<script>alert('Data Berhasil Di Hapus'); window.location.href = 'baca_admin.php'</script>";
}else{
    echo "<script>alert('Data Gagal Di Hapus'); window.location.href = 'baca_admin.php'</script>";
}
?>