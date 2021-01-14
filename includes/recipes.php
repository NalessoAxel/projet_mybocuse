<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <title>My bocuse add your reciepe</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <section class="section">
  
  <div class="container is-flex is-flex-direction-row is-align-items-center">
      <figure class="image is-96x96">
    <img class="is-rounded" src="../assets/Ellipse1.svg" alt="profil pic chef">
    </figure>
    <p class="ml-2">Hello @username</p>
  </div>
</section>
<section class="section is-flex  is-justify-content-center">
    
    <div class="container-reciepes card-reciepe is-flex is-flex-direction-column is-align-items-center">
        <h3 class="title is-3 has-text-black has-text-centered">Add your reciepe here</h3>
        
        <div class="field">
        <label class="label">Topic of the reciepe</label>
        <div class="control">
        <input class="input-reciepe" type="text" placeholder="Topic">
        </div>
        
   </div>
   <div class="field">
        <label class="label">Description</label>
        <div class="control">
        <input class="input-reciepe" type="text" placeholder="Description of your reciepe">
        </div>
        
   </div>
   <div class="field">
        <label class="label">Add Full reciepe</label>
        <div class="control">
        <textarea class="input-reciepe" type="text" placeholder="Ingredients and preparation" ></textarea>
        </div>        
   </div>
   <div class="field">
        <label class="label">Date</label>
        <div class="control">
        <input class="input-reciepe" type="text" placeholder="14/01/2021">
        </div>
    </div>
        <a href="studentProfile.php"><button class="button-add mt-4">Add reciepe</button></a>
        
    </div> 
</section>
    <?php include 'footer.php'; ?>
</body>
</html>