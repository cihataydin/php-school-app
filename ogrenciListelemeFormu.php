
<form action='?' method='post'>
<br /><br /><center>
<label><input type='radio' value='ad' name='kriter' checked="checked" />AD</label>
<label><input type='radio' value='soyad' name='kriter'  />SOYAD</label>
<label><input type='radio' value='numara' name='kriter'   />NUMARA</label>

<label><input type='radio' value='tc' name='kriter' />TC</label>
<BR /><br />
<input type='text' name='metin' style='width:500px; text-align:center'/>
<br /><br /><input style="height:50; width:80" name="bul" type='submit' value='BUL' /></center>

</form>


<?php
if(isset($_POST["bul"]))
{
	$kullaniciadi="root";
	$sifre= "pass";
	$host="mysql";
	$veritabani="schooldb";
	$baglan = new mysqli($host, $kullaniciadi, $sifre, $veritabani);
	if($_POST["metin"]=="")
	{
		$sql="SELECT * FROM ogrenci";
	}
	else
	{
		$sql="SELECT * FROM ogrenci where";
		if($_POST["kriter"]=="ad")
		{
			$sql=$sql." ad like '%".$_POST["metin"]."%'";
		}

		if($_POST["kriter"]=="soyad")
		{
			$sql=$sql." soyad like '%".$_POST["metin"]."%'";
		}

		if($_POST["kriter"]=="numara")
		{
			$sql=$sql." numara like '%".$_POST["metin"]."%'";
		}

		if($_POST["kriter"]=="tc")
		{
			$sql=$sql." tc like '%".$_POST["metin"]."%'";
		}
	}
	$sorgu=mysqli_query($baglan,$sql);

	echo "<table align='center' border='1' width='500'>
	<tr style='background:yellow'>
	<td>ad</td><td>soyad</td><td>numara</td><td>tc</td><td colspan='2'>					</td></tr>";
while( $sonuc=mysqli_fetch_assoc($sorgu))
	{
		echo "<tr>";
    	echo "<td>"; echo $sonuc["ad"];  echo "</td>"; 
     	echo "<td>";echo $sonuc["soyad"];   echo "</td>"; 
     	echo "<td>";echo $sonuc["numara"];  echo "</td>";    
	 	echo "<td>";echo $sonuc["tc"];   echo "</td>"; 
	 	echo "<td>";echo "<a href='ogrenciSil.php?tc=".$sonuc["tc"]."' 		> sil </a>";   echo "</td>"; 
	  	echo "<td>";
	    echo "<a href='ogrenciGuncellemeFormu.php?tc=".$sonuc["tc"]."'>guncelle </a>";   echo "</td>"; 
		echo "</tr>";
	}
	echo "</table>";

}
?>