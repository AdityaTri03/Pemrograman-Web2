<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="js/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">Buku Tamu</h3>
		<br>
	</div>
	
<!-- KODING KE 1 -->  
<?php
	include "koneksi.php";
	$nama=$_POST['nama'];
	$no_hp=$_POST['no_hp'];
	$email=$_POST['email'];
	$keperluan=$_POST['keperluan'];
	$tanggal=date("d-m-Y");
	$waktu=date("h:i:s A");
	$tombol=$_POST['Save'];
	if($tombol=='Save'){
	$insdata=mysqli_query($koneksi,"INSERT INTO tamu VALUES   (NULL,'$nama','$no_hp', '$email','$keperluan','$tanggal','$waktu')");
	?>

	
        <table class="table" cellpadding="0" cellspacing="1" bgcolor="#B2E9FB">
            <tr>
                <td align="center" valign="middle" bgcolor="#F6FCFF"><strong>Sukses!!</strong> Anda telah mengisi Bukutamu </td>
            </tr>
            <tr>
            	<td align="center"><a href="index.php">Kembali ke Buku Tamu</a></td>
            </tr>
        </table>

<!-- KODING KE 2 -->	
    <?php  } else {    ?>
		
	<div class="panel-body">
    <form action="" method="post" name="form1">
        <table height="219" class="tg">
			<tr>
				<td width="89" valign="top">Nama</td>
				<td width="620"><input  name="nama" class="form-control" type="text" placeholder="Nama" id="nama" required/></td>
			</tr>
			<tr>
				<td valign="top">No. Hp</td>
				<td><input  name="no_hp" class="form-control" type="text" placeholder="No. Hp" id="no_hp" required/></td>
			</tr>
			<tr>
				<td valign="top">Email</td>
				<td><input  name="email" class="form-control" type="text" placeholder="Email" id="email" required/></td>
			</tr>
			<tr>
				<td valign="top">Keperluan</td>
				<td><textarea  name="keperluan" class="form-control" rows="7"   placeholder="Keperluan" id="keperluan" required/></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input name="Save" type="submit" class="btn btn-xs btn-primary" value="Save">
				<input name="Clear" type="reset" class="btn btn-xs btn-success" value="Clear">
				</td>
			</tr>
		</table>
	</form>

	</div>

<!-- KODING KE 3 --> 
    <?php  }  ?>
</div>
<hr>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">Daftar Tamu</h3>
	</div>
	<div class="panel-body">

					<center>
					<table width="452" border="0" cellpadding="0" cellspacing="1">
					<tr>
						<td height="47" align="center">
						<table width="1150" border="2" cellpadding="2" cellspacing="0">
					<tr style="background-color:#7FFFD4;">
							<th width="160"><center><b>Waktu</b></center></th>
							<th width="150"><center><b>Nama</b></center></th>
							<th width="150"><center><b>No. HP</b></center></th>
							<th width="170"><center><b>Email</b></center></th>
							<th width="200"><center><b>Keperluan</b></center></th>
						</tr>
<!-- KODING KE 4 -->
<?php		
$tmpbukutamu=mysqli_query($koneksi,"SELECT * FROM tamu ORDER BY no DESC LIMIT 0,5");
while($bukutm=mysqli_fetch_array($tmpbukutamu)){
?>
						<tr style="background-color:#FFF8DC;">
							<td><center><font style="font-size:15px; "><?=$bukutm['tgl']?> | <?=$bukutm['wkt']?></font></center></td>
							<td><font style="font-size:15px; "><?=($bukutm['nama'])?></font><br></td>
							<td><center><font style="font-size:15px; "><?=$bukutm['no_hp']?> </font></center></td>
							<td><font style="font-size:15px; "><?=$bukutm['email']?> </font></td>
							<td><?=$bukutm['keperluan']?></td>
						</tr>
						<?php  }  ?>
					</table>
					</center>
				</td>
			</tr>
		</table>
		<br>
<!-- KODING KE 5 -->	   	
	</div>
</div>
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>