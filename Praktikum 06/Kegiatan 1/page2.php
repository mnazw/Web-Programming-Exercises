<?php
session_start();

echo "<h1>Page 2</h1>";
//Menampilkan nama lengkap user
echo "<p>Selamat datang ".$_SESSION['namauser']."</p>";

echo "<h2>Menu Utama</h2>";
echo "<p><a href='page1.php'>Page 1</a> | <p><a href='page2.php'>Page 2</a> | <p><a href='page3.php'>Page 3</a> | <p><a href='logout.php'>Logout</a>";
?>
