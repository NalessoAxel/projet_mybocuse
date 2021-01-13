<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Recipes</title>
</head>
<body>
<p>All recipes from myBocuse</p>

<?php
//session_start(); //NOTE: nécessaire ou pas ?
header('Content-type: text/html; charset=UTF-8');
try {
    include 'dbConnexion.php';

    //if (isset($_SESSION['email'])) {

    $request = $db->prepare('SELECT recipe.id, recipe.topic_recip, recipe.fullRecipe, recipe.date_recip, recipe.idStudent, people.firstname, people.lastname FROM recipe INNER JOIN people ON recipe.idStudent = people.id /*WHERE id = ? AND topic_recip = ? AND description = ? AND date_recip = ?*/');
    //if($request){

    $request->execute();

    while ($data = $request->fetch()) {
        echo '<div>';
        echo '<p>' . $data['topic_recip'] . '</p>';
        echo '<p>' . nl2br($data['fullRecipe']) . '-' . $data['date_recip'] . '</p>';
        echo '<p>' . $data['firstname'] . ' ' . $data['lastname'] . '</p>';

        echo '</div>';
    }

    //}
    //}

}
catch(Exception $e){
    die('Error: '.$e->getMessage());
}
?>