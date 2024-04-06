<?php

$kullaniciadi="root";
$sifre= "";
$host="localhost";
$veritabani="okul";


$sorgu="delete from ogrenci where tc='".$_GET["tc"]."'";
$baglan = new mysqli($host, $kullaniciadi, $sifre, $veritabani);
$baglan->query($sorgu);
echo "<center><font size='15' color='red'>kayit silindi";


?>