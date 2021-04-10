<?php
$namafile = "myfile.txt";
$myfile = fopen($namafile, "w") or die("Tidak bisa buka file!");
fwrite($myfile, "DOS = Disk Operating System\n");
fclose($myfile);
?>
