<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal page</title>
</head>
<!--TODO: move header to a more general page. "Profile" page and include specific profiles to that one page ? -->
<header class="profileViewHeader">
    <!--Bocuse logo-->
    <h1>MyBocuse</h1>
    <!--Profile logo to go ot profile view-->
</header>
<body>
    <main>
        <h1>Hello @[user]!</h1>

        <div class="attendances">
            <h1 class="attendancesTitle">Attendances</h1>
            <p>Please encode your attendance to the bootcamp by clicking the right button.</p>
            <button class="arrival">Arrival</button>
            <button class="departure">Departure</button>
        </div>

        <div class="myRecipes">
            <div class="myRecipesHeader">
                <h2>My Recipes</h2>
                <p>+</p> <!--Will link to "add a recipe" window or page-->
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