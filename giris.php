<?php 
require("baglanti.php");
$kullaniciadi=$_POST["username"];
$sifre=$_POST["password"];
$sql_kontrol = mysqli_query($baglanti,"select * from kullanicilar where kullanici_adi='".$kullaniciadi."' and kullanici_sifre='".$sifre."' ") or die(mysql_error());

ob_start();
session_start();

if(mysqli_num_rows($sql_kontrol))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kullaniciadi;
    $_SESSION["pass"] = $sifre;
    header("Location:genel.php");
}
else {
    if($kullaniciadi=="" or $sifre=="") {
        echo "<p>Lütfen kullanıcı adınızı veya şifrenizi boş bırakmayınız!<br><br> <a href=javascript:history.back(-1)>Geri Dön</a></p>";
    }
    else {
        echo "<p>Kullanıcı Adınız veya Şifreniz Yanlış.<br><br><a href=javascript:history.back(-1)>Geri Dön</a></p>";
    }
}
 
ob_end_flush();
 ?>