<?php
	include "../koneksi.php";
    if(isset($_POST['tambah_m'])){
	$namamapel=$_POST['namamapel'];
	$sql = "insert into mapel(namamapel) values('$namamapel')";
	$query  =mysqli_query($conn,$sql);
	if($query)
	{
		header('location:bacamapel.php');
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
   <h2>Tambah - Manajemen Mapel</h2>
   <a href="bacamapel.php">Back</a>
      <hr>
      <form  method='POST'>
	<table border="0">
	  <td>Mata Pelajaran</td>
      <tr>
	  <td><input type='text' name='namamapel' id="namamapel"></td>
	  </tr>
<tr>
		<td>
	  <input type='submit' value='simpan' name="tambah_m">
	  </td></tr>
	</table>
</form>
</body>
</html>