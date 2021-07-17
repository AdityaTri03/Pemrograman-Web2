<?php

include('koneksi.php');


 $id = $_GET['id'];
 $nama_wilayah  = $_GET['nama_wilayah']; 
 $jumlah_positif = $_GET['jumlah_positif'];
 $jumlah_dirawat  = $_GET['jumlah_dirawat']; 
 $jumlah_sembuh = $_GET['jumlah_sembuh']; 
 $jumlah_meninggal = $_GET['jumlah_meninggal'];
 $nama_operator = $_GET['nama_operator'];
 $nim_mahasiswa = $_GET['nim_mahasiswa'];


//query update
$query = "UPDATE data SET nama_wilayah='$nama_wilayah' , jumlah_positif='$jumlah_positif' , jumlah_dirawat='$jumlah_dirawat' , jumlah_sembuh='$jumlah_sembuh', jumlah_meninggal='$jumlah_meninggal', nama_operator='$nama_operator', nim_mahasiswa='$nim_mahasiswa' WHERE id='$id' ";

if (mysqli_query($con, $query)) {
 # credirect ke page index
	 echo "<script>alert('Data berhasil diupdate..');window.location='index.php'</script>";
 header("location:index.php");
 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($con);
 echo '<a href="editform.php">Kembali</a>'; 
}
mysqli_close($con);
?>