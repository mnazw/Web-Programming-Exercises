<?php

function hitungDenda($tglHarusKembali, $tglKembali){
  //Mengambil tanggal, bulan, dan Tahun dari $tglHarusKembali
  $splitHarusKembali = explode("-", $tglHarusKembali);
  $dateHarusKembali = $splitHarusKembali[2];
  $monthHarusKembali = $splitHarusKembali[1];
  $yearHarusKembali = $splitHarusKembali[0];
  //Mengambil tanggal, bulan, dan Tahun dari $tglKembali
  $splitKembali = explode("-", $tglKembali);
  $dateKembali = $splitKembali[2];
  $monthKembali = $splitKembali[1];
  $yearKembali = $splitKembali[0];
  //Menghitung Julian Day
  $jdHarusKembali = GregorianToJD($monthHarusKembali, $dateHarusKembali, $yearHarusKembali);
  $jdKembali = GregorianToJD($monthKembali, $dateKembali, $yearKembali);
  //Menghitung Selisih Tanggal
  $selisih = $jdKembali-$jdHarusKembali;
  //Menghitung Denda
  $denda = $selisih * 3000;
  return $denda;
}

//Testing 
echo "Jumlah Denda: Rp".hitungDenda("2021-01-03", "2021-01-05").",-";

?>
