<?php

date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
$maintenance = 0; //** 1 = ya ..  0 = tidak
if($maintenance == 1) {
    die("Site under Maintenance.");
}
// database
$config['db'] = array(
	'host' => 'localhost',
	'name' => 'nasr4381_pedia',
	'username' => 'nasr4381_pedia',
	'password' => 'nasr4381_pedia'
);

$conn = mysqli_connect($config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['name']);
if(!$conn) {
	die("Koneksi Gagal : ".mysqli_connect_error());
	}
	
$config['web'] = array(
	'url' => 'https://nasionalpedia.my.id/' // isi domain anda : https://domain.com/
	
);	
// date & time
$date = date("Y-m-d");
$time = date("H:i:s");

// date & time
$tanggal = date("Y-m-d");
$waktu = date("H:i:s");

require("lib/function.php");
require("lib/setting.php");
?>