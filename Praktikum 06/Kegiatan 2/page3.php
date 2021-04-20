<?php
session_start();
include('cek.php');

echo "<h1>Page 3</h1>";
//Menampilkan nama lengkap user
echo "<p>Selamat datang ".$_SESSION['namauser']."</p>";

echo "<h2>Menu Utama</h2>";
echo "<p><a href='page1.php'>Page 1</a> | <p><a href='page2.php'>Page 2</a> | <p><a href='page3.php'>Page 3</a> | <p><a href='logout.php'>Logout</a>";
?>
