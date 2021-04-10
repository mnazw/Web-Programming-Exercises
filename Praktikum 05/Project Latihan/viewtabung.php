<?php
$file = "datatabung.dat";
$filetabung = fopen($file, "r") or die("Tidak bisa buka file!");

//Baca dan convert isi file ke array
$arraytabung = array();
while (!feof($filetabung)){
  array_push($arraytabung, explode(",", fgets($filetabung)));
}

//Judul dan Jumlah Data
echo "<div style=max-width:328px>";
echo "<h4><center>DATA UKURAN TABUNG</center></h4><br>";
echo "Jumlah Data: ".count($arraytabung)-1;

//Buat Tabel
echo "<table border='1'>";
echo "<tr>";
echo "<th>NAMA TABUNG</th>";
echo "<th>DIAMETER</th>";
echo "<th>TINGGI</th>";
echo "<th>LUAS</th>";
echo "</tr>";

//Perulangan untuk memasukkan data ke tabel
for ($i = 0; $i <= count($arraytabung[$i]); $i++){
  //Memasukkan data ke tabel
  echo "<tr>";
  echo ("<td>".$arraytabung[$i][0]."</td>"); //Nama
  echo ("<td>".$arraytabung[$i][1]."</td>"); //Diameter
  echo ("<td>".$arraytabung[$i][2]."</td>"); //Tinggi
  echo ("<td><a href='hitungluas.php?n=".$arraytabung[$i][0]."&d=".$arraytabung[$i][1]."&t=".$arraytabung[$i][2]."'>view</a></td>"); //Luas
  echo "</tr>";
}

echo "</table></div>";
fclose($filetabung);
?>
