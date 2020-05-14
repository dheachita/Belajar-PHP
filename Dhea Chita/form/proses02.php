<?php
if (isset($_POST['input'])) {
    $nama = $_POST['name'];
    $email = $_POST['email'];
    echo "your name : <b>$nama</b> <br/><br/br>";
    echo "your E-mail : <b>$email</b>";
}