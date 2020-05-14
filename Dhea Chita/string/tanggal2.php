<?php
$arrDay = array("minggu","senin","selasa","rabu","kamis","jumat","sabtu");
$day = date("w");
echo "hari ini hari :  <b>". $arrDay[$day]."</b>";
?>