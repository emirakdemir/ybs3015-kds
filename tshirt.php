<?php require('sorgu.php');
 include("baglanti.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
}?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8"/>
<title>LOFT Karar Destek Sistemi</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="main.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
</head>

<body>

<header>
<div class="ustgenel">
	<div class="solust">
		<p>LOFT<span style="font-weight:bold">KDS</span></P>
	</div>
	<div class="sagust">
	<div class="bosalan">
	</div>
	<div class="arama">
		<input type="text" class="searchTerm" placeholder="Ürün, Analiz veya kullanıcı arayın...">
		<div id="searchbar"><button type="submit" class="searchButton">
		</button>
		</div>
		<div class="iconlar">
		<a href="cikis.php"><img class='icon' alt="profil" src="fotolar/logout.png"></a>
		</div>
	</div>
	</div>
</div>
</header>

<section>
	<div class="yanpanel">
	<div class="arakatman">
	<b>Kullanıcı Bilgileri</b>
	</div>
	<div class="kullanici">
		<div class="kullaniciresmi">
			<img alt="kullaniciresmi" src="fotolar/yonetici.png">
		</div>
		<div class="kullanicibilgileri">
			<p>Emircan Akdemir</p>
			<p>Bölge Müdürü</p>
		</div>
	</div>
	<div class="arakatman">
	<b>Ürün Analizleri</b>
	</div>
	<div class="analizler">
		<ul>
		<li><a href="pantolon_jean.php">Pantolon / Jean</a></li><br>
		<li><a href="sweatshirt_kazak.php">Sweatshirt / Kazak</a></li><br>
		<li><a class="aktif" href="tshirt.php">T-Shirt</a></li><br>
		<li><a href="gomlek.php">Gömlek</a></li><br>
		<li><a href="mont_kaban.php">Mont / Kaban</a></li><br>
		</ul>
	</div>
	<div class="arakatman">
	<b>Genel Veri Analizleri</b>
	</div>
	<div class="analizler">
		<ul>
		<li><a href="genel.php">Genel Analizler</a></li><br>
		<li><a href="satis.php">Satış Analizleri</a></li><br>
		<li><a href="egilim.php">Müşteri Eğilimleri</a></li><br>
		<li><a href="iade.php">İade Analizleri</a></li><br>
		<li><a href="stok.php">Stok Analizleri</a></li><br>
		</ul>
	</div>
	</div>
	<div class="grafikler1">
		<div class="grafik1">
		<canvas id="myChart1"></canvas>
		</div>
		<div class="grafikarasi"></div>
		<div class="grafik2">
		<canvas id="myChart2"></canvas>
		</div>
	</div>
	<div class="grafikler2">
		<div class="grafik3">
		<canvas id="myChart3"></canvas>
		</div>
		<div class="grafikarasi"></div>
		<div class="grafik4">
		<canvas id="myChart4"></canvas>
	
		</div>
	
</div>
</section>

<footer>
</footer>

<script type="text/javascript">
 		var ctx = document.getElementById('myChart1').getContext('2d');
var myChart1 = new Chart(ctx, {
    type: 'bar',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [
        {
        	data: [<?php echo $satis_miktari3; ?>],
            backgroundColor: 'rgba(255,0,0,0.7)',
            borderColor: 'rgba(255,0,0,1)',
            borderWidth: 2,
            label:"T-Shirt",
        },
        
        ]
    },
    options: {
    	title: {
            display: true,
            text: 'Satış Miktarı',
        }

    }
});
	</script>
<script type="text/javascript">
 		var ctx = document.getElementById('myChart2').getContext('2d');
var myChart2 = new Chart(ctx, {
    type: 'bar',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
        	data: [<?php echo $iade_miktari3; ?>],
            backgroundColor:'rgba(255,0,0,0.7)',
            borderColor: 'rgba(255,0,0,1)',
            borderWidth: 2,
            label:"T-Shirt",
        },
        
        ]
    },
    options: {
    	title: {
            display: true,
            text: 'İade Miktarı',
        }

    }
});
	</script>
<script type="text/javascript">
 		var ctx = document.getElementById('myChart3').getContext('2d');
var myChart3 = new Chart(ctx, {
    type: 'line',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
        	data: [<?php echo $stok_miktari3; ?>],
            backgroundColor:'rgba(255,0,0,0.7)',
            borderColor: 'rgba(255,0,0,1)',
            borderWidth: 2,
            label:"T-Shirt",
        },
        
        ]
    },
    options: {
    	title: {
            display: true,
            text: 'Stok Miktarı',
        }

    }
});
	</script>
<script type="text/javascript">
 		var ctx = document.getElementById('myChart4').getContext('2d');
var myChart4 = new Chart(ctx, {
    type: 'line',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
        	data: [<?php echo $musteri_egilimleri3; ?>],
            backgroundColor: 'rgba(255,0,0,0.7)',
            borderColor: 'rgba(255,0,0,1)',
            borderWidth: 2,
            label:"T-Shirt",
        },
        
        ]
    },
    options: {
    	title: {
            display: true,
            text: 'Müşteri Eğilimleri',
        }

    }
});
	</script>
</body>
</html>