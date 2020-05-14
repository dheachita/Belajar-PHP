<?php
$nim    = "12345678910";
$nama   = "schrodinger";
$umur   = 908;
$nilai  = 100.4;
$status = TRUE;
echo "nim : ". $nim . "<br>";
echo "name : $nama<br>";
print "umur :". $umur;
print "<br>";
printf("nilai : %.2f <br>",$nilai);
if ($status)
    echo " Status: Aktif";
else 
    echo "status : tidak aktif";