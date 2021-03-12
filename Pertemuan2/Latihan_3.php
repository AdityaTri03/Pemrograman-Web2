<!DOCTYPE html>
<html>
<head>
	<title>Program Kalkulator</title>
	<style type="text/css"></style>
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$nilai1 = $_POST['nilai1'];
		$nilai2 = $_POST['nilai2'];
		$operasi = $_POST['operator'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $nilai1+$nilai2;
			break;
			case 'kurang':
				$hasil = $nilai1-$nilai2;
			break;
			case 'kali':
				$hasil = $nilai1*$nilai2;
			break;
			case 'bagi':
				$hasil = $nilai1/$nilai2;
			break;			
		}
	}
	?>
<div class="Kalkulator">
	<form method="post" action="#">
		<table>
			<tr>
				<th>Nilai I</th>
				<th></th>
				<th>Nilai II</th>
				<tr>
					<td><input type="number" name="nilai1" class="nilai" placeholder="Nilai 1" ></td>
					<td>
						<select name="operator">
							<option value="tambah"> + </option>
							<option value="kurang"> - </option>
							<option value="kali"> * </option>
							<option value="bagi"> / </option>
						</select>
					</td>
					<td><input type="number" name="nilai2" class="nilai" placeholder="Nilai 2" ></td>
					<td>
						<input type="submit" value="Submit" name="hitung" class="tombol">
					</td>
		</table>
	</form>
	<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="nilai">
		<?php }else{ ?>
			<input type="text" value="0" class="nilai">
		<?php } ?>	
</div>
</body>
</html>