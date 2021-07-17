<?php 
$id = $_GET['id']; 
//koneksi database
include('koneksi.php');
//query
$query = "SELECT * FROM data WHERE id='$id'";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
 
</head>
<body>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light '>
    <div class="container">
        <a href="index.php" class="navbar-brand"></a>
        <button class="navbar-toggler" type="button" data-togle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto pt-2 pb-2">
            <li class="nav-item ml-4">
                <a href="logout.php" class="nav-link text-light"> Log Out </a>
            </li>
        </ul>
    </div>
</nav>
<div class="jumbotron jumbotron-fluid bg-light" style="height:90vh">
  <div class="container">

    <h1 align="center"><b>FORM DATA PEMANTAUAN COVID-19</b></h1>
        <div class="content">
        <form method="get" action="edit.php">
        	<?php
			 while ($row = mysqli_fetch_assoc($result)) {
                $wilayah = $row['nama_wilayah'];
 			?>
 			 <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <table>
            <tr><td><b> Nama Wilayah </b></td><td>
                <select name="nama_wilayah" value="<?php echo $row['nama_wilayah']; ?>">
                    <option value="Bangka Belitung" <?php if ($wilayah == "Bangka Belitung") { echo "selected";} ?>>Bangka Belitung</option>
                    <option value="Banten" <?php if ($wilayah == "Banten") { echo "selected";} ?>>Banten</option>
                    <option value="Bali" <?php if ($wilayah == "Bali") { echo "selected";} ?>>Bali</option>
                    <option value="Bengkulu" <?php if ($wilayah == "Bengkulu") { echo "selected"; } ?>>Bengkulu</option>
                    <option value="DI Yogyakarta" <?php if ($wilayah == "DI Yogyakarta") { echo "selected"; } ?>>DI Yogyakarta</option>
                    <option value="DKI Jakarta" <?php if ($wilayah == "DKI Jakarta") { echo "selected"; } ?>>DKI Jakarta</option>
                    <option value="Gorontalo" <?php if ($wilayah == "Gorontalo") { echo "selected"; } ?>>Gorontalo</option>
                    <option value="Jambi" <?php if ($wilayah == "Jambi") { echo "selected"; } ?>>Jambi</option>
                    <option value="Jawa Barat" <?php if ($wilayah == "Jawa Barat") { echo "selected"; } ?>>Jawa Barat</option>
                    <option value="Jawa Tengah" <?php if ($wilayah == "Jawa Tengah") { echo "selected"; } ?>>Jawa Tengah</option>
                    <option value="Jawa Timur" <?php if ($wilayah == "Jawa Timur") { echo "selected"; } ?>>Jawa Timur</option>
                    <option value="Kalimantan Barat" <?php if ($wilayah =="Kalimantan Barat") { echo "selected"; } ?>>Kalimantan Barat</option>
                    <option value="Kalimantan Selatan" <?php if ($wilayah =="Kalimantan Selatan") { echo "selected"; } ?>>Kalimantan Selatan</option>
                    <option value="Kalimantan Tengah" <?php if ($wilayah =="Kalimantan Tengah") { echo "selected"; } ?>>Kalimantan Tengah</option>
                    <option value="Kalimantan Timur" <?php if ($wilayah =="Kalimantan Timur") { echo "selected"; } ?>>Kalimantan Timur</option>            
                    <option value="Kalimantan Utara" <?php if ($wilayah == "Kalimantan Utara") { echo "selected"; } ?>>Kalimantan Utara</option>
                    <option value="Kepulauan Riau" <?php if ($wilayah =="Kepulauan Riau") { echo "selected"; } ?>>Kepulauan Riau</option>
                    <option value="Lampung" <?php if ($wilayah =="Lampung") { echo "selected"; } ?>>Lampung</option>
                    <option value="Maluku" <?php if ($wilayah =="Maluku") { echo "selected"; } ?>>Maluku</option>
                    <option value="Maluku Utara" <?php if ($wilayah =="Maluku Utara") { echo "selected"; } ?>>Maluku Utara</option>
                    <option value="Nanggroe Aceh Darussalam" <?php if ($wilayah =="Nanggroe Aceh Darussalam") { echo "selected"; } ?>>Nanggroe Aceh Darussalam</option> 
                    <option value="Nusa Tenggara Barat" <?php if ($wilayah =="Nusa Tenggara Barat") { echo "selected"; } ?>>Nusa Tenggara Barat</option>
                    <option value="Nusa Tenggara Timur" <?php if ($wilayah =="Nusa Tenggara Timur") { echo "selected"; } ?>>Nusa Tenggara Timur</option>
                    <option value="Papua" <?php if ($wilayah =="Papua") { echo "selected"; } ?>>Papua</option>
                    <option value="Papua Barat" <?php if ($wilayah =="Papua Barat") { echo "selected"; } ?>>Papua Barat</option>                   
                    <option value="Riau" <?php if ($wilayah =="Riau") { echo "selected"; } ?>>Riau</option>     
                    <option value="Sulawesi Barat" <?php if ($wilayah =="Sulawesi Barat") { echo "selected"; } ?>>Sulawesi Barat</option>
                    <option value="Sulawesi Selatan" <?php if ($wilayah =="Sulawesi Selatan") { echo "selected"; } ?>>Sulawesi Selatan</option>
                    <option value="Sulawesi Tengah" <?php if ($wilayah =="Sulawesi Tengah") { echo "selected"; } ?>>Sulawesi Tengah</option>              
                    <option value="Sulawesi Tenggara" <?php if ($wilayah =="Sulawesi Tenggara") { echo "selected"; } ?>>Sulawesi Tenggara</option>  
                    <option value="Sulawesi Utara" <?php if ($wilayah =="Sulawesi Utara") { echo "selected"; } ?>>Sulawesi Utara</option>                                                                                                               
                    <option value="Sumatra Barat" <?php if ($wilayah =="Sumatra Barat") { echo "selected"; } ?>>Sumatra Barat</option>
                    <option value="Sumatra Selatan" <?php if ($wilayah =="Sumatra Selatan") { echo "selected"; } ?>>Sumatra Selatan</option>                                                                                        
                    <option value="Sumatra Utara" <?php if ($wilayah =="Sumatra Utara") { echo "selected"; } ?>>Sumatra Utara</option>
                </select>
            </td></tr>
            <tr><td><b> Jumlah Positif </b></td><td><input type="text" size="24" name="jumlah_positif" value="<?php echo $row['jumlah_positif']; ?>"></td></tr>
            <tr><td><b> Jumlah Dirawat </b></td><td><input type="text" size="24" name="jumlah_dirawat" value="<?php echo $row['jumlah_dirawat']; ?>"></td></tr>
            <tr><td><b> Jumlah Sembuh  </b></td><td><input type="text" size="24" name="jumlah_sembuh" value="<?php echo $row['jumlah_sembuh']; ?>"></td></tr>
            <tr><td><b> Jumlah Meninggal </b></td><td><input type="text" size="24" name="jumlah_meninggal" value="<?php echo $row['jumlah_meninggal']; ?>"></td></tr>
            <tr><td><b> Nama Operator </b></td><td><input type="text" size="24" name="nama_operator" value="<?php echo $row['nama_operator']; ?>"></td></tr>
            <tr><td><b> NIM Mahasiswa </b></td><td><input type="text" size="24" name="nim_mahasiswa" value="<?php echo $row['nim_mahasiswa']; ?>"></td></tr>
            <tr><td colspan="5"><button type="submit" name="" value="edit" style="margin-left:2pc;">Update</button>
            <a href="index.php" style="margin-left:2pc;">Kembali</a></td></tr>

        </table>
    </div>
    </form>
    <?php
	}
	?>

  </div>
</div> 
</body>
 <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
 <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
 <script>
 $(document).ready(function() {
  $('.dtabel').DataTable();
 } );
 </script>
</html>
