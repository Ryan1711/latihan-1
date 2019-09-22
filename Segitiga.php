<div class="halaman">
	<h2>Menghitung Luas Segitiga</h2><p>
 
<p>Masukkan ukuran Alas dan Tinggi segitiga</p>
<form action="" method="post">
	Alas   :<input type="text" name="alas"><br>
	Tinggi :<input type="text" name="tinggi"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
if(isset($_POST['submit'])){
	$alas = $_POST['alas'];
	$tinggi = $_POST['tinggi'];
	
	$luas_segitiga = 1/2 * $alas * $tinggi; // Menghitung luas segitiga
	
	echo "Luas segitiga dengan alas $alas dan tinggi $tinggi <br>";
	echo "Luas Segitiga : $luas_segitiga";
}
?></p>
</div>