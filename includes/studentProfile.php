<!--TODO: move head, header & footer to a more general page. "Profile" page and include specific profiles to that one page ? -->
<?php
    session_start();
    if(!isset($_SESSION['id'])){
    header('Location:login-form.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <title>My bocuse student profil</title>
</head>
<body>


<?php 
include 'navbar.php';
?>
 <section class="section">
  
  <div class="container is-flex is-flex-direction-row is-align-items-center">
      <figure class="image is-96x96">
    <img class="is-rounded" src="../assets/Ellipse1.svg" alt="profil pic chef">
    </figure>
    <p class="ml-2">Hello <?php echo $_SESSION['firstname']; ?></p>
  </div>
</section>
 <section class="section is-flex is-flex-direction-row is-flex-wrap-wrap is-justify-content-space-around">
    
    <div class="container card-pointage-student is-flex is-flex-direction-column is-align-items-center">
        <h3 class="title is-3 has-text-black has-text-centered">Pointages</h3>
        <h3 class="subtitle is-4 has-text-black has-text-centered">Please check the right button</h3>
        <button class="button pointage">ARRIVAL</button>
        <button class="button pointage">DEPARTURE</button>
        
    </div> 
    <div class="container card-pointage-student is-flex is-flex-direction-column is-align-items-center">
        <div class="container-title is-flex is-flex-direction-row is-align-items-center">
        <h3 class="title is-3 has-text-black m-0">Reciepe</h3>
          <a href="recipes.php"><i class="fas fa-plus fa-2x ml-4"></i></a>
        </div>
        <button class="button is-medium" id="button"> Reciepe</button>
            <div class="modal" id="page-modal">
            <div class="modal-background"></div>
            <div class="modal-content">
            <div class="card">
                            <div class="card-content">
                              <p class="title">
                                "Here the title of the reciepe"
                              </p>
                              <p class="subtitle">
                              "Name of the student"
                              </p>
                              <p> 
                                
                                "Here the date of the reciepe" 

                              </p>
                              <button class="button is-small">See full reciepe</button>
                            </div>
                      </div>
            </div>
            <button class="modal-close is-large" aria-label="close"></button>
            </div>
            <button class="button is-medium" id="button2">Reciepe</button>
            <div class="modal" id="page-modal2">
            <div class="modal-background"></div>
            <div class="modal-content">
            <div class="card">
                            <div class="card-content">
                              <p class="title">
                                "Here the title of the reciepe"
                              </p>
                              <p class="subtitle">
                              "Name of the student"
                              </p>
                              <p> 
                               
                                "Here the date of the reciepe" 

                              </p>
                              <button class="button is-small">See full reciepe</button>
                            </div>
                      </div>
            </div>
            <button class="modal-close is-large" aria-label="close"></button>
            </div>
            <button class="button is-medium" id="button3">Reciepe</button>
            <div class="modal" id="page-modal3">
            <div class="modal-background"></div>
            <div class="modal-content">
            <div class="card">
                            <div class="card-content">
                              <p class="title">
                                "Here the title of the reciepe"
                              </p>
                              <p class="subtitle">
                                
                                "Name of the student"
                              </p>
                              <p> 
                              "Here the date of the reciepe" 

                              </p>
                              <button class="button is-small">See full reciepe</button>
                            </div>
                      </div>
            </div>
            <button class="modal-close is-large" aria-label="close"></button>
            </div>
        
        </div> 

</section>


<?php 
include 'footer.php';
?>
</body>
<script src="../js/modal.js"></script>

</html>