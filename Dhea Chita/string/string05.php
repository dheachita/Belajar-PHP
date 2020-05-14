<?php
$number = 5678.91;

$english_format_number = number_format($number);
echo "<br>". $english_format_number; 

$nomber_format_francais = number_format($number,2,',',' ');
echo "<br>". $nomber_format_francais;

$format_indonesia = number_format($number, 2, ',','.');
echo "<br>". $format_indonesia; 

$number = 5678.9123;
$english_format_number = number_format($number, 2, '.','');
echo "<br>". $english_format_number;
?>