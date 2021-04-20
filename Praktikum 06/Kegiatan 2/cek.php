<?php

//Cek keberadaan session 'namauser'
//Ket: Session 'namauser' akan tercreate ketika login sukses

if (!isset($_SESSION['namauser'])) {
  echo "<p>Hayoo.. Mau coba nge bypass ya?</p>";
  echo "<p><a href='form.html'>Login</a> dulu ya..";
  exit();
}
?>
