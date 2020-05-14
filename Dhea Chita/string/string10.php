<form action="" method="post">
input text disini :<br>
<textarea name="input" cols="40" rows="4"></textarea><br>
<input type="submit" name"submit" value="proses">
</form>

<?php
if (isset($_POST['submit'])) {
$txt = $_POST['input'];
echo "tanpa n12br() : <br>$txt<br><br>";
echo "dengan n12br() ; <br>". n12br ($txt);
}
?>