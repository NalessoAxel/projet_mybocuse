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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>My bocuse</title>
</head>
<body>
<nav class="navbar is-flex is-align-items-center" role="navigation" aria-label="main navigation">
    <div class="navbar-brand is-flex is-justify-content-flex-start is-align-items-center">
      <figure class="image is-128x128">
        <img src="../assets/paul_bocuse.jpeg" alt="mybocuse logo">
      </figure>
    </div>
    <h1 class="title is-justify-content-center">My Bocuse</h1>
    </div>
  </nav>

<div class="bgimg">
    
    <form action="" method="post" class="container is-flex is-flex-direction-column is-justify-content-center is-align-items-center">
    <img class="mt-4"src="../assets/paul_bocuse_logo_form.svg">
    <h1 class="title is-size-1 has-text-black">Login</h1>
    <h2 class="subtitle is-size-3 has-text-black">Sign up to your account</h2>
        <input type="text" name="email" placeholder="Your email">
        <input type="password" name="pass" placeholder="Your password">
        <button class="button is-rounded mt-5" type="submit" value="login" name="submit">Sign up
    </form>
    </div>
    <footer class="footer">
    <div class="container is-flex is-justify-content-space-between is-align-items-center">
      <p class="has-text-white">
        Fair use disclaimer, this website is for educational purpose only.
      </p>
      <figure class="image is-96x96 ">
        <img src="../assets/becode_logo.svg" alt="logo becode">
      </figure>
    </div>

  </footer>
</body>
</html>