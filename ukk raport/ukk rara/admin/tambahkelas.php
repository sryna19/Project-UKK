<?php
	include "../koneksi.php";
    if(isset($_POST['tambah_k'])){
	$kelas=$_POST['kelas'];
	$namakelas=$_POST['namakelas'];
	$sql = "insert into kelas(kelas,namakelas) values('$kelas','$namakelas')";
	$query  =mysqli_query($conn,$sql);
	if($query)
	{
		header('location:bacakelas.php');
	}
	else
	{
	echo"Gagal Disimpan";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
   <h2>Tambah - Manajemen Kelas</h2>
   <a href="bacakelas.php">Back</a>
      <hr>
      <form  method='POST'>
	<table border="0">
	  <td>Kelas</td>
	  <td><input type='text' name='kelas' id="kelas"></td>
	  </tr>
	<tr>
	  <td>Nama Kelas</td>
	  <td><input type='text' name='namakelas' id="namakelas"></td>
	  </tr>
	<tr>
		<td></td>
		<td >
	  <input type='submit' value='simpan' name="tambah_k">
	  </td></tr>
	</table>
</form>
</body>
</html>