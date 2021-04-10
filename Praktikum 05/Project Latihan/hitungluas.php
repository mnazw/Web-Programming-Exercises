<?php

$n = $_GET['n'];
$d = $_GET['d'];
$t = $_GET['t'];
$r = $d/2;
$luas = number_format((float)((2 * pi() * $r)*($r + $t)), 2, '.', '');

echo "Luas tabung $n dengan diameter $d dan tinggi $t adalah $luas satuan luas <br>";
echo "Kembali ke <a href='viewtabung.php'>list Data Ukuran Tabung</a>";

?>
