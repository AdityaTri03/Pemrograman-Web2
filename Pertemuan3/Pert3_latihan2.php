<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<html>
<head>
<title>contoh Penggunaan IF</title>
</head>
<body>
<form>
Besar Pembelian :
<input type=text name=total_beli><br><br>
<input type=submit value="Tentukan Diskon">
</form  method="get">
<?php
  	$total_beli = $_GET["total_beli"];
	if (isset($total_beli)) {
	$total_beli=intval($total_beli);
	$diskon=0; 

	}if($total_beli>=200000) {
	$diskon=0.1;
	
	}else if ($total_beli>=100000) {
	$diskon= 0.05;
	
	}else{
	$diskon=0.01;
}

$diskon=$diskon * intval($total_beli);
$pembayaran = $total_beli-$diskon;
echo "Total Beli = Rp. $total_beli <br>";
echo "Diskon = Rp. $diskon <br>";
echo "Total Bayar = Rp. $pembayaran";


?>
</body>
</html>