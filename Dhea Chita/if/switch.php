<?php
$day =date("D");
$tanggal = date('T\g\l: d-m-Y');
switch ($day) {
    case 'Sun' : $hari= "minggu"; break;
    case 'Mon' : $hari= "senin"; break;
    case 'Tus' : $hari= "selasa"; break;
    case 'Wed' : $hari= "rabu"; break;
    case 'Thu' : $hari= "kamis"; break;
    case 'Fri' : $hari= "jumat"; break;
    case 'Sat' : $hari= "sabtu"; break;
}
echo "Hari ini hari <b>$hari $tanggal</b>";