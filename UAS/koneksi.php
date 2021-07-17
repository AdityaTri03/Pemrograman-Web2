<?php
date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

$host     = 'localhost';
$user     = ''; // diisi dengan user database kalian biasanya
                    // defaultnya bernama root jika kita belum 
                    // merubahnya
$password = '';  //diisi dengan password database kalian biasanya
                 // defaultnya kosong
$db       = 'db_data'; //diisi dengan nama database kalian
  
$con = mysqli_connect($host, $user, $password, $db) or die(mysqli_error());
?>