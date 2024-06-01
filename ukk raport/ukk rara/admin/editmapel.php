<?php
include "../koneksi.php";
if(isset($_POST['edit_m'])){
$id = $_GET['id'];
$namamapel = $_POST['namamapel'];

$sql2 = "UPDATE mapel SET namamapel = '$namamapel' WHERE id_m = '$id'";
$query = mysqli_query($conn, $sql2);
if ($query) {
	header('location:bacamapel.php');
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
    $sql = mysqli_query($conn, "SELECT * FROM mapel WHERE id_m = '$id'");
    $data = mysqli_fetch_array($sql); 
    ?>
    <form method="post">
        <h2>Edit Data Admin</h2>
        <a href="bacamapel.php">Back</a><br><br>
        <input type="text" name="namamapel" value="<?php echo $data['namamapel']; ?>">
        <input type="submit" name="edit_m" value="Edit">
    </form>
</body>
</html>