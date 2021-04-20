<?php
session_start();

//Memulai permainan, membuat session angka dengan nilai random 0 - 100
if(!isset($_SESSION['angka'])){
  $_SESSION['angka'] = rand(0,100);
  echo "
  <form method='post' action='tebak.php'>
    <p> Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
    Bilangan tebakan Anda <input type='text' name='tebakan'>
    <input type='submit' name='submit' value='Submit'>
  </form>
  ";
}

//Cek benar atau salah setelah submit, dan ada session angka
if (isset($_POST['submit']) && isset($_SESSION['angka'])){
  $tebakan = $_POST['tebakan'];
  //Jika tebakan = angka random tersimpan, permainan selesai
  if($tebakan == $_SESSION['angka']){
    echo "Selamat ya... Anda benar, saya telah memilih bilangan ".$_SESSION['angka']."";
    session_destroy(); //Menghapus session
    echo "<br><a href='tebak.php'>Ulangi Lagi</a>";
  }
  //Jika tebakan < angka random tersimpan
  elseif ($tebakan < $_SESSION['angka']) {
    echo "
    <form method='post' action='tebak.php'>
      <p> Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
      <p>Wahh.. Masih salah ya, bilangan tebakan Anda terlalu rendah.</p>
      Bilangan tebakan Anda <input type='text' name='tebakan'>
      <input type='submit' name='submit' value='Submit'>
    </form>
    ";
  }
  //Jika tebakan > angka random tersimpan
  elseif ($tebakan > $_SESSION['angka']) {
    echo "
    <form method='post' action='tebak.php'>
      <p> Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
      <p>Wahh.. Masih salah ya, bilangan tebakan Anda terlalu tinggi.</p>
      Bilangan tebakan Anda <input type='text' name='tebakan'>
      <input type='submit' name='submit' value='Submit'>
    </form>
    ";
  }
}

?>
