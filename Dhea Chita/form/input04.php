<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php
    // mengidentifikasikan variabel dengan value kosong
    $nameErr = $emailErr = "";
    $name = $email = "";

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $email = ($_POST["email"]);
            //check id e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
    }
    ?>

    <h2>PHP Form Dengan Validation</h2>
    <p><span class ="error"> * required field.</span></p>
    <form method = "post" action="" name="input">
        Name : <input type="text" name="name">
        <span class="error">*<?php echo $nameErr; ?></span>
        <br><br>
        E-mail : <input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>

        <input type="submit" name="input" value="input">
    </form>
</body>

</html>

<?php
if (isset($_POST['input'])) {
if (empty($_POST["name"])) {
        $name = "silakan masukan nama anda ";
    } else {
        $name = ($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $name = "Only letter and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $email  = "Silakan masukan email anda";
    } else {
        $email = ($_POST["email"]);
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email = "Invalid email format";
        }
    }
    echo "your name : <b>$name </b> <br><br/>";
    echo "your Email : <b>$email</b>";
}