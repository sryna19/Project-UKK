<?php
	include "../koneksi.php";
    if(isset($_POST['tambah_j'])){
	$namajurusan=$_POST['namajurusan'];
	$sql = "insert into jurusan(namajurusan) values('$namajurusan')";
	$query  =mysqli_query($conn,$sql);
	if($query)
	{
		header('location:bacajurusan.php');
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
   <h2>Tambah - Manajemen Jurusan</h2>
   <a href="bacajurusan.php">Back</a>
      <hr>
      <form  method='POST'>
	<table border="0">
	  <td>Jurusan</td>
	  <td><input type='text' name='namajurusan' id="namajurusan"></td>
	  </tr>
		<td></td>
		<td >
	  <input type='submit' value='simpan' name="tambah_j">
	  </td></tr>
	</table>
</form>
</body>
</html>