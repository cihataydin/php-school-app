

<br /><br />
<center><font size='5' >&Ouml;&#286;RENC&#304; EKLEME FORMU </font></center>
<br>
<form action='?' method='post'>
<table align='center' width="400">
<tr>
  <td>AD</td>
  <td><input id="ad" style='text-align:right' type='text' name='ad' /></td><td><p id="HATA_ad"></p></td>
</tr>

<tr>
  <td>SOYAD</td>
  <td><input id="soyad" style='text-align:right' type='text' name='soyad' /></td><td><p id="HATA_soyad"></p></td>
</tr>

<tr>
  <td>NUMARA</td>
  <td><input id="numara" style='text-align:right' type='text' name='numara' /></td><td><p id="HATA_numara"></p></td>
</tr>

<tr>
  <td>TC</td>
  <td><input id="tc" style='text-align:right' type='text' name='tc' /></td><td><p id="HATA_tc"></p></td>
</tr>

<tr>
  <td>tarih</td>
  <td><input id="tarih" style='text-align:right' type='date' name='tarih' value="<?php echo date('Y-m-d'); ?>" /></td><td><p id="HATA_tarih"></p></td>
</tr>


<tr>
  <td colspan='2' align='center'><input type='submit' style="height:50px; width:80px" value='kaydet' name='kaydet' /></td><td></td>

</tr>
</table></form>

<?php
if(isset($_POST["kaydet"]))
{

$hata_durum=false;
if($_POST["ad"]=="")
{
	echo $_POST["tarih"];
	echo "<script>document.getElementById('HATA_ad').innerHTML = 'isim girilmedi';
	document.getElementById('ad').value = '".$_POST["ad"]."';
	document.getElementById('soyad').value = '".$_POST["soyad"]."';
	document.getElementById('numara').value = '".$_POST["numara"]."';
	document.getElementById('tc').value = '".$_POST["tc"]."';
	document.getElementById('tarih').value='".$_POST["tarih"]."';
	</script>";
	$hata_durum=true;
	
}
if($_POST["soyad"]=="")
{
	echo "<script>document.getElementById('HATA_soyad').innerHTML = 'soyad girilmedi';
	document.getElementById('ad').value = '".$_POST["ad"]."';
	document.getElementById('soyad').value = '".$_POST["soyad"]."';
	document.getElementById('numara').value = '".$_POST["numara"]."';
	document.getElementById('tc').value = '".$_POST["tc"]."';
	document.getElementById('tarih').value='".$_POST["tarih"]."';
	</script>";
	
	 $hata_durum=true;
}
if($_POST["numara"]=="")
{
	echo "<script>document.getElementById('HATA_numara').innerHTML = 'numara girilmedi';
	document.getElementById('ad').value = '".$_POST["ad"]."';
	document.getElementById('soyad').value = '".$_POST["soyad"]."';
	document.getElementById('numara').value = '".$_POST["numara"]."';
	document.getElementById('tc').value = '".$_POST["tc"]."';
	document.getElementById('tarih').value='".$_POST["tarih"]."';
	</script>"; $hata_durum=true;
}
if($_POST["tc"]=="")
{
	echo "<script>document.getElementById('HATA_tc').innerHTML = 'tc girilmedi';
	document.getElementById('ad').value = '".$_POST["ad"]."';
	document.getElementById('soyad').value = '".$_POST["soyad"]."';
	document.getElementById('numara').value = '".$_POST["numara"]."';
	document.getElementById('tc').value = '".$_POST["tc"]."';
	document.getElementById('tarih').value='".$_POST["tarih"]."';
	</script>"; $hata_durum=true;
}
if($hata_durum==false)
{
	$kullaniciadi="root";
	$sifre= "pass";
	$host="mysql";
	$veritabani="schooldb";
	$baglan = new mysqli($host, $kullaniciadi, $sifre, $veritabani);

	$tcsql="select * from ogrenci where tc='".$_POST["tc"]."'";
	$tcsorgu=$sorgu=mysqli_query($baglan,$tcsql);
	$sayac=0;
	while( $sonuc=mysqli_fetch_assoc($tcsorgu))
		{
			$sayac++;
		}
	if($sayac!=0)
		{
		echo "<center>ayn&#305; tc ile &ouml;&#287;renci sistemde mevcuttur</center>";
		}
	else
		{
		$sorgu="insert into ogrenci(numara,ad,soyad,tc) values('".$_POST["numara"]."','".$_POST["ad"]."','".$_POST["soyad"]."','".$_POST["tc"]."')";
		if($baglan->query($sorgu))
			{
				echo "<center><font size='15' color='red'>kayit eklendi";
			}
		else
			{
				echo "hata: kayit eklenemedi";
			}
		}
}

}

?>



