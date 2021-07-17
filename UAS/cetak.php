<?php 
	require 'koneksi.php';
	$id = $_GET['id'];
?>
<html>
	<head>
		<title> Cetak </title>
		<link rel="stylesheet" href="bootstrap.css">
	</head>
	<body>
		<script>window.print();</script>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
		<?php 
		
		$sql = mysqli_query($con,"SELECT * FROM data  WHERE id='$id'");
		while($data = mysqli_fetch_array($sql)){
		?>
					<center>
						<br><br><br><br>
						<p>Data Pemantauan Covid19 wilayah <?php echo $data['nama_wilayah'];?></p>
						<p>per <?php  echo date('d F Y, H:i:s');?></p>
						<p><?php  echo $data['nama_operator'];?> / <?php echo $data['nim_mahasiswa'];?></p>
					</center><br>
					<table  border="1" style="width:100%;">
						<tr>
							<td><center><b>Positif</b></center></td>
							<td><center><b>Dirawat</b></center></td>
							<td><center><b>Sembuh</b></center></td>
							<td><Center><b>Meninggal</b></Center></td>
						</tr>
						
							<td><center><?php echo $data['jumlah_positif'];?></center></td>
							<td><center><?php echo $data['jumlah_dirawat'];?></center></td>
							<td><center><?php echo $data['jumlah_sembuh'];?></center></td>
							<td><center><?php echo $data['jumlah_meninggal'];?></center></td>
						</tr>
					</table>
				<?php
			}
			?>
		</div>
	</body>
</html>
