<?php
$nilai = 40;
$grade ="~";
$keterangan = "COBA LAGI";
if ($nilai <= 100 && $nilai >= 85){
    $grade = "A";
    $keterangan ="LULUS";
}elseif ($nilai >= 75){
    $grade = "B";
    $keterangan ="LULUS";
}elseif ($nilai >= 60){
    $grade = "C";
    $keterangan = "LULUS";
}elseif ($nilai >= 45){
    $grade = "D";
}elseif ($nilai >= 0) {
    $grade ="E";
}else {
    $grade = "~";
}
    echo "Nilai anda $nilai Grade= $grade, anda $keterangan";