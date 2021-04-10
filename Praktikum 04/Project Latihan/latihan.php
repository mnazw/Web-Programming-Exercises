<?php
$file = "datamhs.dat";
$filemhs = fopen($file, "r") or die("Tidak bisa buka file!");



//Baca dan convert isi file ke array
$arraymhs = array();
while (!feof($filemhs)){
  array_push($arraymhs, explode("|", fgets($filemhs)));
}

//Judul dan Jumlah Data
echo "<div style=max-width:510.5px>";
echo "<h4><center>DATA MAHASISWA</center></h4><br>";
echo "Jumlah Data: ".count($arraymhs)-1;

//Buat Tabel
echo "<table border='1'>";
echo "<tr>";
echo "<th>No</th>";
echo "<th>NIM</th>";
echo "<th>Nama Mhs</th>";
echo "<th>Tanggal Lahir</th>";
echo "<th>Tempat Lahir</th>";
echo "<th>Usia (Thn)</th>";
echo "</tr>";

//Perulangan untuk memasukkan data ke tabel
$i = 1;
for ($j = 0; $j <= count($arraymhs[$j]); $j++){
  //Perhitungan usia
  $splitlahir = explode("-", $arraymhs[$j][2]);
  $datelahir = $splitlahir[2];
  $monthlahir = $splitlahir[1];
  $yearlahir = $splitlahir[0];
  $jdlahir = GregorianToJD($monthlahir, $datelahir, $yearlahir);
  $jdnow = GregorianToJD(date("m"), date("d"), date("Y"));
  $usia = (int)(($jdnow - $jdlahir)/365);

  //Memasukkan data ke tabel
  echo "<tr>";
  echo "<td><center>$i</center></td>"; //Nomor
  echo ("<td>".$arraymhs[$j][0]."</td>"); //NIM
  echo ("<td>".$arraymhs[$j][1]."</td>"); //Nama Mhs
  echo ("<td>".$arraymhs[$j][2]."</td>"); //Tanggal Lahir
  echo ("<td>".$arraymhs[$j][3]."</td>"); //Tempat Lahir
  echo "<td> $usia Tahun</td>"; //Usia
  echo "</tr>";
  $i++;
}

echo "</table></div>";
fclose($filemhs);
?>
