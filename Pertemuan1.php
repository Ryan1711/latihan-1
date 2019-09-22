<!DOCTYPE html>
<html>
<head>
	<title>Membuat Halaman Web Dinamis Dengan PHP | www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">PROGRAMMING CLASS BACKEND</h1>
		<h3 class="deskripsi">Pertemuan 1</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="Pertemuan1.php?page=Segitiga">Segitiga</a></li>
			<li><a href="Pertemuan1.php?page=Lingkaran">Lingkaran</a></li>
			<li><a href="Pertemuan1.php?page=Jajargenjang">Jajargenjang</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'Segitiga':
				include "halaman/Segitiga.php";
				break;
			case 'Lingkaran':
				include "halaman/Lingkaran.php";
				break;
			case 'Jajargenjang':
				include "halaman/jajargenjang.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/Segitiga.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>