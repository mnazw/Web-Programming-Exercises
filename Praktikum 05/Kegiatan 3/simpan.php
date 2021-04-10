<?php

$file = "datamhs.dat";
$filemhs = fopen($file, "a") or die("Tidak bisa buka file!");

$nim = $_POST['nim']; 
$nama = $_POST['nama'];
$tgllhr = $_POST['tgllhr'];
$tmptlhr = $_POST['tmptlhr'];

fwrite($filemhs, ($nim."|".$nama."|".$tgllhr."|".$tmptlhr."\n"));
fclose($filemhs);
echo "Berhasil menambahkan data.<br>";
echo "Kembali ke <a href='datamahasiswa.php'>List Data Mahasiswa</a>";
?>
