<?php
$namafile ="data.txt";
$handle = fopen($namafile, "w");
if (!$handle) {
    echo "<b>file tidak dapat dibuka atau belum ada</b>";
} else {
    fwrite ($handle, "fakultas teknologi informasi \n");
    fputs($handle, "universitas whatsapp online \n");
    //file_put_contents ($namafile, "jakarta");
    echo "<b>file berhasil ditulis</b>";
}
fclose($handle);
