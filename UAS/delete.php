<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM data WHERE id = '$id' ";

if (mysqli_query($con , $query)) {
 
	echo "<script>alert('Data berhasil dihapus..');window.location='index.php'</script>";
}
else{
 echo "ERROR, data gagal dihapus". mysqli_error($con);
}

mysqli_close($con);
?>