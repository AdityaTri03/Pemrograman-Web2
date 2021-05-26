<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysqli_error($con));
 }
mysqli_select_db($con, "lat_dbase");
$cek=mysqli_query($con, "UPDATE tbl_mhs SET Age = '36'
WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");
if ($cek) {
	echo "Berhasil Edit Data";
}
mysqli_close($con);
?>