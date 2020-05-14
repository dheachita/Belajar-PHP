<?php
$dir = "images";
$cek = mkdir($dir);
if ($cek) {
    echo "direktori <b>$dir</b> berhasil dibuat";
} else {
    echo "direktori <b>$dir</b> gagal dibuat";
}
