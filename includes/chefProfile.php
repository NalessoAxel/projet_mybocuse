<!--TODO: move head, header & footer to a more general page. "Profile" page and include specific profiles to that one page ? -->

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
    <title>Personal page</title>
</head>
<body>
<?php include 'navbar.php'; ?>

<section class="section">
  
    <div class="container is-flex is-flex-direction-row is-align-items-center">
        <figure class="image is-96x96">
      <img class="is-rounded" src="../assets/killprofilpic.jpeg" alt="profil pic chef">
      </figure>
      <p class="ml-2">Hello @username</p>
    </div>
</section>
  <section class="section is-flex is-flex-direction-row is-flex-wrap-wrap is-justify-content-space-between">
    
        <div class="container card-pointage is-flex is-flex-direction-column is-align-items-center">
            <h3 class="title is-3 has-text-black has-text-centered">Pointages</h3>
            
            <input class="input" type="text" placeholder="Text input">
            <input class="input" type="text" placeholder="Text input">
            <input class="input" type="text" placeholder="Text input">
            
        </div>
        <div class="container card-profil  is-flex is-flex-direction-column is-align-items-center"> 
            <h3 class="title is-3 has-text-black">Student Profil</h3>

            <div class="container profil-acces is-flex is-flex-direction-row is-align-items-center ">
            <figure class="image is-64x64">
            <img class="is-rounded" src="../assets/Ellipse1.svg" alt="profil pic chef">
            </figure>
            <p class="title is-4 has-text-black m-0">Student Profil Name</p>
            <a href="" target="_blank"> <i class="far fa-user-circle fa-2x ml-3"></i></a>
            </div>

            <div class="container profil-acces is-flex is-flex-direction-row is-align-items-center">
            <figure class="image is-64x64">
            <img class="is-rounded" src="../assets/Ellipse1.svg" alt="profil pic chef">
            </figure>
            <p class="title is-4 has-text-black m-0">Student Profil Name</p>
            <a href="" target="_blank"> <i class="far fa-user-circle fa-2x ml-3"></i></a>
            </div>

            <div class="container profil-acces is-flex is-flex-direction-row is-align-items-center">
            <figure class="image is-64x64">
            <img class="is-rounded" src="../assets/Ellipse1.svg" alt="profil pic chef">
            </figure>
            <p class="title is-4 has-text-black m-0">Student Profil Name</p>
            <a href="" target="_blank"> <i class="far fa-user-circle fa-2x ml-3"></i></a>
            </div>
                  
        </div>
        <div class="container card-reciepe  is-flex is-flex-direction-column is-align-items-center"> 
            <h3 class="title is-3 has-text-black">Receipe</h3>
            <input class="input" type="text" placeholder="Text input">
            <input class="input" type="text" placeholder="Text input">
            <input class="input" type="text" placeholder="Text input">
        </div>
    </div>
    </section>




<?php include 'footer.php'; ?>
</body>
</html>