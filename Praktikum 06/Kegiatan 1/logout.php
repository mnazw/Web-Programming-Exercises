<?php
session_start();

//Hapus semua session
session_destroy();
//Redirect ke halaman Login
header('Location: form.html');

?>
