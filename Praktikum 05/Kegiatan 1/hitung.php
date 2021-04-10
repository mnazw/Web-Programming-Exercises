<?php
//Baca kedua bilangan
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];

//Baca Operator
$op = $_POST['operasi'];

//Proses perhitungan
if ($op == "+") {
  $hasil = $bil1 + $bil2;
} else if ($op == "-") {
  $hasil = $bil1 - $bil2;
} else if ($op == "x") {
  $hasil = $bil1 * $bil2;
} else if ($op == "/") {
  $hasil = $bil1 / $bil2;
} else if ($op == "^") {
  $hasil = $bil1 ** $bil2;
}

//Menampilkan hasil perhitungan
echo "<h2>".$bil1."".$op."".$bil2." = ".$hasil."</h2>";

?>
