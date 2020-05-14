<?php
function luas_persegi_panjang($panjang,$lebar){
    return $panjang * $lebar;
}
//pemanggilan fungsi

$p=5;
$l=10;
echo "luas persegi panjang dengan panjang $p dan luas $l = ".
luas_persegi_panjang($p,$l);