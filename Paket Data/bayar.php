<?php

$nomor= $_GET['ikartu'];
$paket= $_GET['ipaket'];
$harga= $_GET['opaket'];

echo "Kode : $paket-$nomor-$harga";
echo "</br></br>";
echo "Silahkan Bayar di Supermarket Terdekat di kota Anda";

?>