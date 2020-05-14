<?php

$dir = "include";
$cek = mkdir($dir);
if ($cek) {
    echo "direktori <b>$dir</b> berhasil dibuat";
} else {
    echo "direktori <b>$dir</b> gagal dibuat";
}

$del = rmdir($dir);
if ($del) {
    echo "<br> direktori <b>$dir</b> berhasil dihapus";
} else {
    echo "<br> direktori <b>$dir</b> gagal dihapus";
}
