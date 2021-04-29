<?php
include "dbconfig.php"; // Config database
session_start();

$nama = $_COOKIE['namauser'];

//Lives dan score awal
if(!isset($_SESSION['lives']) && !isset($_SESSION['score'])){
  $_SESSION['lives'] = 5;
  $_SESSION['score'] = 0;
}

//Memulai permainan
if(!isset($_SESSION['jawaban'])){
  $_SESSION['a'] = rand(0,20);
  $_SESSION['b'] = rand(0,20);
  $_SESSION['jawaban'] = $_SESSION['a'] + $_SESSION['b'];
  echo "Hello ".$nama.", tetap semangat ya.. You can do the best!";
  echo "<br>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."";
  echo "
  <form method='post' action='app.php'>
    Berapakah ".$_SESSION['a']." + ".$_SESSION['b']." = <input type='text' name='tebakan'>
    <input type='submit' name='submit' value='Submit'>
  </form>
  ";
}

//Cek benar atau salah setelah submit, dan ada session jawaban
if (isset($_POST['submit']) && isset($_SESSION['jawaban'])){
  $tebakan = $_POST['tebakan'];
  //Jika tebakan benar
  if($tebakan == $_SESSION['jawaban']){
    $_SESSION['score'] += 10;
    echo "Hello ".$nama.", selamat jawaban Anda benar..";
    echo "<br>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."";
    unset($_SESSION["jawaban"]); //Unset jawaban
    echo "
    <form action='app.php'>
        <input type='submit' value='Soal selanjutnya'/>
    </form>
    ";
  }
  //Jika tebakan salah
  elseif ($tebakan != $_SESSION['jawaban']) {
    $_SESSION['score'] -= 2;
    $_SESSION['lives'] -= 1;
    //Jika lives habis = Game Over
    if ($_SESSION['lives'] <= 0){
      echo "Hello ".$nama.".. Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik.";
      echo "<br>Score Anda: ".$_SESSION['score']."";

      //Proses input data ke database
      $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);
      if ($conn->connect_error){
        die("Koneksi database hall of fame gagal: " . $conn->connect_error);
      } else {
        //Sql query input data
        $score = $_SESSION['score'];
        $query = "INSERT INTO uts (Nama, Score) VALUES ('$nama', '$score')";
        //Sql query run
        $result = $conn->query($query);
        //cek state query result
        if(!$result){
          echo "Insert data ke database hall of fame gagal!";
        }
      }

      session_destroy();
      echo "
      <form action='index.php'>
          <input type='submit' value='Main Lagi'/>
      </form><br>
      ";
      //Hall of Fame
      echo "<h3>Hall of Fame</h3>";
      $query = "SELECT Nama,Score FROM uts ORDER BY Score DESC";
      $result = $conn->query($query);

      //Cek ada hasil atau tidak
      if ($result->num_rows > 0){
        echo "<table border='1'>";
        echo "<tr><th>No</th><th>Nama</th><th>Score</th></tr>";
        $i = 1;
        //Menampilkan data
        while ($data = $result->fetch_assoc()){
          echo "<tr><td>".$i."</td><td>".$data['Nama']."</td><td>".$data['Score']."</td></tr>";
          $i++;
        }
        echo "</table>";
      } else {
        echo "<p>Data Hall of Fame tidak ditemukan!</p>";
      }
      //Close koneksi
      $conn->close();
    }
    //Jika salah tetapi lives belum habis
    else {
      echo "Hello ".$nama.", sayang jawaban anda salah.. Tetap semangat yaa!!";
      echo "<br>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."";
      unset($_SESSION["jawaban"]); //Unset jawaban
      echo "
      <form action='app.php'>
          <input type='submit' value='Soal selanjutnya'/>
      </form>
      ";
    }
  }
}

?>
