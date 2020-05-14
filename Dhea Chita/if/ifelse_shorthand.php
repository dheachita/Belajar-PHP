<?php
$nilai =7;
echo "Hasil dengan shorthand: ";
echo $nilai > 8 ? 'sangat baik' : 'baik';
echo "<br/>";

echo "hasil tanpa shorthand: ";

if ($nilai > 8){
    echo 'sangat baik';
}else {
    echo 'baik';
}

//contoh shorthand bersarang
echo "<br/> Hasil dengan shorthand bersarang :";

$predikat = $nilai > 8
    ? 'sangat baik'
    : ($nilai >= 7 && $nilai <= 8)
        ? 'baik'
        : ($nilai <= 6 && $nilai > 5)
            ? 'sedang'
            : 'kurang';
echo "Nilai anda $predikat";

// contoh if else bersarang 
echo "<br/> hasil Tanpa shorthand bersarang :";
if ($nilai > 8) {
    $predikat = 'sangat baik';
} else if ($nilai >= 7 && $nilai <=8) {
    $predikat ='baik';
}else if ($nilai <= 6 && $nilai >5){
    $predikat ='sedang';
}else{
    $predikat ='kurang';
}
echo "nilai anda $predikat";