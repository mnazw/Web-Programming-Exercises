<?php
setcookie("namauser", " ", time()-3600, "/");
setcookie("emailuser", " ", time()-3600, "/");
//Redirect kembali ke index.php
header("Location: index.php");
?>
