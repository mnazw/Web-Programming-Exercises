<?php
session_start();

//Daftar users
$users = array(
  array("username1","Rosihan Ari Yuana","123456"),
  array("username2","Dwi Amalia Fitriani","654321"),
  array("username3","Faza Fauzan Khosyiyarrohman","112233"),
  );

//Jika form login sudah submitted
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  //Proses pengecekan ada tidaknya username dan password dalam daftar user
  foreach ($users as $profile_user) {
    if (($profile_user[0] == $username) && ($profile_user[2] == $password)) {
      //Jika ada yang match maka membuat session untuk simpan nama user
      $_SESSION['namauser'] = $profile_user[1];

      //Redirect halaman ke page1.php
      header("Location: page1.php");
    }
  }

  //Jika tidak ada username dan password yang match
  echo "<h3>Login Gagal</h3>";
  echo "<p>Silakan <a href='form.html'>login kembali</a></p>";
}
?>
