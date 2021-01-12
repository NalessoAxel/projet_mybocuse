<!--TODO: move head, header & footer to a more general page. "Profile" page and include specific profiles to that one page ? -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
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
    <p class="ml-2">Hello @username</p>
  </div>
</section>
 <section class="section is-flex is-flex-direction-row is-flex-wrap-wrap is-justify-content-space-between">
    
    <div class="container card-pointage-student is-flex is-flex-direction-column is-align-items-center">
        <h3 class="title is-3 has-text-black has-text-centered">Pointages</h3>
        <h3 class="subtitle is-4 has-text-black has-text-centered">Please check the right button</h3>
        <button class="button pointage">ARRIVAL</button>
        <button class="button pointage">DEPARTURE</button>
        
    </div> 

</section>


<?php 
include 'footer.php';
?>
</body>

</html>