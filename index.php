<?php require('sorgu.php');
require('baglanti.php');?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8"/>
<title>LOFT KDS Yönetici Giriş Ekranı</title>
<link rel="stylesheet" href="giris.css">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="main.css">
</head>

<body>

<header>
</header>

<section>
<div class="genelgirisdiv">
<div class="giriskutusu">
	<h2>Yönetici Giriş Ekranına Hoşgeldiniz</h2>
</div>
<form method="post" action="giris.php">
	<div class="inputalani">
		<label>Kullanıcı Adınızı Giriniz</label>
		<input type="text" name="username" value="">
	</div>
	<div class="inputalani">
		<label>Şifrenizi Giriniz</label>
		<input type="password" name="password">
	</div>
	<div class="inputalani">
		<button type="submit" class="girisbuton" name="register_btn">Giriş Yap</button>
	</div>
</form>
</div>	
</section>

<footer>
</footer>


</body>
</html>