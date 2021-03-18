<?php
  $baris = 4;
  $kolom = 5;
  $nomor = 1;
  echo "<table border='1'>";
  for($i = 0; $i < $baris; $i++){
    echo "<tr>";
    for ($j = 0; $j < $kolom; $j++){
      if ($nomor % 2 == 0){
        echo "<td style='color:white; background-color:red'>".$nomor."</td>";
      } else {
        echo "<td style='color:red'>".$nomor."</td>";
      }
      $nomor++;
    }
    echo "</tr>";
  }
  echo "</table>";
?>
