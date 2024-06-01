<?php
include "../koneksi.php";
if(isset($_POST['edit_k'])){
$id = $_GET['id'];
$kelas = $_POST['kelas'];
$namakelas = $_POST['namakelas'];

$sql2 = "UPDATE kelas SET kelas = '$kelas', namakelas = '$namakelas' WHERE idkelas = '$id'";
$query = mysqli_query($conn, $sql2);
if ($query) {
	header('location:bacakelas.php');
} else {
	echo "Edit admin gagal";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM kelas WHERE idkelas = '$id'");
    $data = mysqli_fetch_array($sql); 
    ?>
    <form method="post">
        <h2>Edit Data Admin</h2>
        <a href="bacaadmin.php">Back</a>
        <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>">
        <input type="text" name="namakelas" value="<?php echo $data['namakelas']; ?>">
        <input type="submit" name="edit_k" value="Edit">
    </form>
</body>
</html>