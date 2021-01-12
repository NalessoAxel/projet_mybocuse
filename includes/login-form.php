<?php

    session_start();
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');

        $sql = "SELECT * FROM user where email='$email' ";
        $result = $db->prepare($sql);
        $result->execute();

        if ($result->rowCount() > 0) {
            $data = $result->fetchAll();
            if (password_verify($pass, $data[0]["password"])) {
                echo "Conexion effectué";
                $_SESSION['email'] = $email;
            }
        }
        else{
            // $pass = password_hash($pass, PASSWORD_DEFAULT);
            // $sql = "INSERT INTO user (email, password) VALUES ('$email', '$pass')";
            // $req = $db->prepare($sql);
            // $req->execute(); 
            echo "Mot de passe incorrect";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="email">
        <input type="password" name="pass">
        <input type="submit" value="login" name="submit">
    </form>
</body>
</html>