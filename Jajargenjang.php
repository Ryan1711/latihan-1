<div class="halaman">
	<h2>Menghitung Luas Jajargenjang</h2>
	<p>Masukkan ukuran Alas dan Tinggi Jajargenjang</p>
<form action="" method="post">
	Alas   :<input type="text" name="alas"><br>
	Tinggi :<input type="text" name="tinggi"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
if(isset($_POST['submit'])){
	$alas = $_POST['alas'];
	$tinggi = $_POST['tinggi'];
	
	$luas_segitiga = $alas * $tinggi;
	
	echo "Luas jajargenjang dengan alas $alas dan tinggi $tinggi <br>";
	echo "Luas Jajargenjang : $luas_segitiga";
}
?>
</div>