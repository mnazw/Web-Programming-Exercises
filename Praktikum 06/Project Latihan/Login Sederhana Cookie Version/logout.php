<?php

//Hapus cookie
setcookie("namauser", " ", time()-3600, "/");
//Redirect ke halaman Login
header('Location: form.html');

?>
