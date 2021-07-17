<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['simpan'])){
 
 //inlcude atau memasukkan file koneksi ke database
 include('koneksi.php');
 
 //jika tombol tambah benar di klik maka lanjut prosesnya
 $nama_wilayah  = $_POST['nama_wilayah']; 
 $jumlah_positif = $_POST['jumlah_positif'];
 $jumlah_dirawat  = $_POST['jumlah_dirawat']; 
 $jumlah_sembuh = $_POST['jumlah_sembuh']; 
 $jumlah_meninggal = $_POST['jumlah_meninggal'];
 $nama_operator = $_POST['nama_operator'];
 $nim_mahasiswa = $_POST['nim_mahasiswa'];


 //melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
 $input = "INSERT INTO data VALUES(NULL, '$nama_wilayah', '$jumlah_positif', '$jumlah_dirawat', '$jumlah_sembuh', '$jumlah_meninggal', '$nama_operator', '$nim_mahasiswa')";
 
 //jika query input sukses
 if(mysqli_query($con,$input)){
  
  echo "<script>alert('Data berhasil di tambahkan!');window.location='index.php'</script>";  //Pesan jika berhasil
  
 }else{
  
  echo "Gagal menambahkan data!".mysqli_error($con) ;  //Pesan jika proses tambah gagal
  echo '<a href="index.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
  
 }

}else{ //jika tidak terdeteksi tombol tambah di klik

 //redirect atau dikembalikan ke halaman tambah
 echo '<script>window.history.back()</script>';

}
?>