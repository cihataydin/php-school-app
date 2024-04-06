<script>
var answer = confirm("silmek istiyormusunuz?")
if(answer)
{	
 document.write( " <?php

$kullaniciadi="root";
$sifre= "pass";
$host="mysql";
$veritabani="schooldb";


$sorgu="delete from ogrenci where tc='".$_GET["tc"]."'";
$baglan = new mysqli($host, $kullaniciadi, $sifre, $veritabani);
$baglan->query($sorgu);
echo "<center><font size='15' color='red'>kayit silindi";


?>");

}
else
{
	document.write("iptal");
}
</script>



