<!--TODO: move head, header & footer to a more general page. "Profile" page and include specific profiles to that one page ? -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <title>Personal page</title>
</head>
<body>

<header class="profileViewHeader">
    <!--Bocuse logo-->
    <p>MyBocuse</p>
    <!--Profile logo to go ot profile view-->
</header>
    <main>
        <p>Hello @[user]!</p>

        <div class="attendances">
            <p class="attendancesTitle">Attendances</p>
            <p>Please encode your attendance to the bootcamp by clicking the right button.</p>
            <button class="arrival">Arrival</button>
            <button class="departure">Departure</button>
        </div>

        <div class="myRecipes">
            <div class="myRecipesHeader">
                <p>My Recipes</p>
                <button class="addRecipe">+</button> <!--Will link to "add a recipe" window or page-->
            </div>
            <p>You presented [NUMBER] recipes so far:</p>
            <ol>
                <li>Test recipe 1</li>
                <li>Test recipe 2</li>
            </ol>
            <button class="allRecipes">See all Recipes</button>
        </div>

    </main>
</body>

</html>