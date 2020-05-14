<form action="" method ="post">
    NIM kamu :
    <input type="text" name="txtnim"><br>
    <input type="submit" name="submit" value="proses">
</form>

<?php
if (isset($_POST['submit'])) {
    $nim = $_POST['txtnim'];
    $a = substr ($nim, 2, 2);
    switch ($a) {
        case '11':
            $jurusan = "teknik informatika";
            break;
        case '12':
            $jurusan = "sistem informasi";
            break;
        case '13':
            $jurusan = "sistem komputer";
            break;
        default:
            $jurusan = "salah jurusan";
    }
echo "Nim kamu : $nim <br>";
echo "jurusan kamu : $jurusan";
}
?>