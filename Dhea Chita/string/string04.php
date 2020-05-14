<?php
$str = "<b><u>we will come to you, my honey</u></b>";

echo $str. "<br>";

echo strip_tags ($str). "<br>";

echo strip_tags ($str,"<u>"). "<br>";

echo htmlspecialchars ($str). "<br>";

echo htmlentities($str);
?>