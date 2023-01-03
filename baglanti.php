<?php
$baglanti=mysqli_connect("localhost","root","","2019469009");
if($baglanti){
	echo "";
	mysqli_query($baglanti,"SET NAMES UTF8");
}
else {
	die("Bağlantı sağlanamadı");
}
?>