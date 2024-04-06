
<?php
if(isset($_GET["tc"]))
{
$kullaniciadi="root";
$sifre= "pass";
$host="mysql";
$veritabani="schooldb";

$baglan = new mysqli($host, $kullaniciadi, $sifre, $veritabani);
$sql="SELECT * FROM ogrenci where tc='".$_GET["tc"]."'";
$sorgu=mysqli_query($baglan,$sql);

while( $sonuc=mysqli_fetch_assoc($sorgu))
{
	echo "<center>";
	echo "<font size='5' >&Ouml;&#286;RENC&#304; G&Uuml;NCELLEME FORMU </font>";

	echo "</center>";
   
	echo "<form action='?' method='post'>
<table align='center'><tr><td></td>
 <td><input type='text' style='background-color:yellow; text-align:center' readonly name='eskitc' value='".$sonuc["tc"]."' />
  </td>
</tr>
<tr>
  <td>AD</td>
  <td><input style='text-align:right' type='text' name='ad' value='".$sonuc["ad"]."' /></td>
</tr>

<tr>
  <td>SOYAD</td>
  <td><input style='text-align:right' type='text' name='soyad' value='".$sonuc["soyad"]."' /></td>
</tr>

<tr>
  <td>NUMARA</td>
  <td><input style='text-align:right' type='text' name='numara' value='".$sonuc["numara"]."' /></td>
</tr>

<tr>
  <td>TC</td>
  <td><input style='text-align:right' type='text' name='yenitc' value='".$sonuc["tc"]."' /></td>
</tr>

<tr>
  <td colspan='2' align='right'><input type='submit' style='height:50px; width:80px' value='kaydet' name='kaydet' /></td>

</tr>
</table></form>";   
}

}

if(isset($_POST["kaydet"]))
{

$kullaniciadi="root";
$sifre= "";
$host="localhost";
$veritabani="okul";


$sorgu="update ogrenci set numara='".$_POST["numara"]."', ad='".$_POST["ad"]."',soyad='".$_POST["soyad"]."',tc='".$_POST["yenitc"]."' where tc='".$_POST["eskitc"]."'";
$baglan = new mysqli($host, $kullaniciadi, $sifre, $veritabani);
if($baglan->query($sorgu))
{
echo "<center><font size='15' color='red'>kayit guncellendi";
}
else
{
echo "hata: kayit guncelenemedi";
}



}

?>


