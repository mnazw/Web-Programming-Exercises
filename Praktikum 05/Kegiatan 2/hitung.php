<?php
//Baca kedua bilangan
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];

//Proses perhitungan
if (isset($_POST['penjumlahan'])) {
  $hasil = $bil1 + $bil2;
  $op = $_POST['penjumlahan'];
} else if (isset($_POST['pengurangan'])) {
  $hasil = $bil1 - $bil2;
  $op = $_POST['pengurangan'];
} else if (isset($_POST['perkalian'])) {
  $hasil = $bil1 * $bil2;
  $op = $_POST['perkalian'];
} else if (isset($_POST['pembagian'])) {
  $hasil = $bil1 / $bil2;
  $op = $_POST['pembagian'];
} else if (isset($_POST['pangkat'])) {
  $hasil = $bil1 ** $bil2;
  $op = $_POST['pangkat'];
}

//Menampilkan hasil perhitungan
echo "<h2>".$bil1."".$op."".$bil2." = ".$hasil."</h2>";

?>
