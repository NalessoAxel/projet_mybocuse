<?php

    session_start();
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $pass = sha1($_POST['pass']);

        include 'dbConnexion.php';

        $sql = "SELECT * FROM people where email= ? ";
        $result = $db->prepare($sql);
        $result->execute(array($_POST['email']));

        if ($result->rowCount() > 0) {
            $data = $result->fetchAll();
            if ($pass === $data[0]["passwords"]) {
                // echo "Login successful";
                $_SESSION['email'] = $email;
            } else {
                // echo "Login failed, wrong credentials";
            }
        }
        else{
            //echo "Unknown credentials";
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
<?php 
include 'navbar.php';
?>

<div class="bgimg">
    
    <form action="" method="post" class="container-login is-flex is-flex-direction-column is-justify-content-center is-align-items-center">
    <img class="mt-4"src="../assets/paul_bocuse_logo_form.svg">
    <h1 class="title is-size-1 has-text-black">Login</h1>
    <h2 class="subtitle is-size-3 has-text-black">Sign up to your account</h2>
        <input class="login" type="text" name="email" placeholder="Your email">
        <input class="login" type="password" name="pass" placeholder="Your password">
        <button class="button is-rounded mt-5" type="submit" value="login" name="submit">Sign up
    </form>
    </div>
    <?php 
include 'footer.php';
?>
</body>
</html>