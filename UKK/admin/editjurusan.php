<?php
include "../koneksi.php";
if(isset($_POST['edit_j'])){
$id = $_GET['id'];
$namajurusan = $_POST['namajurusan'];

$sql2 = "UPDATE jurusan SET namajurusan = '$namajurusan' WHERE kdjurusan = '$id'";
$query = mysqli_query($conn, $sql2);
if ($query) {
	header('location:bacajurusan.php');
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
    $sql = mysqli_query($conn, "SELECT * FROM jurusan WHERE kdjurusan = '$id'");
    $data = mysqli_fetch_array($sql); 
    ?>
    <form method="post">
        <h2>Edit Data Admin</h2>
        <a href="bacajurusan.php">Back</a>
        <input type="text" name="namajurusan" value="<?php echo $data['namajurusan']; ?>">
        <input type="submit" name="edit_j" value="Edit">
    </form>
</body>
</html>