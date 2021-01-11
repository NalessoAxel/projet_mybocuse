<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal page</title>
</head>
<body>
    <!--TODO: move header to a more general page. "Profile" page and include specific profiles to that one page ? -->
    <header class="profileViewHeader">
        <!--Bocuse logo-->
        <h1>MyBocuse</h1>
        <!--Profile logo to go ot profile view-->
    </header>

<main>
    <h1>Hello chef @[user]!</h1>

    <div class="attendances">
        <h1 class="attendancesTitle">Attendances</h1>
        <p>You can consult student attendances here.</p>
        <div class="studentAttendanceDiv">
            <p class="studentName">[STUDENT NAME]</p>
            <div class="studentAttendance">
                <div class="arrivalDiv">
                    <p class="arrivalTitle">Arrival</p>
                    <p class="arrivalTime">[CHECK IN TIME]</p>
                </div>
                <div class="DepartureDiv">
                    <p class="departureTitle">Arrival</p>
                    <p class="depatureTime">[CHECK OUT TIME]</p>
                </div>
            </div>
        </div>
    </div>

    <div class="studentProfiles">
        <h1>Access to student profiles</h1>

        <div class="studentProfileCard">
            <!--student image-->
            <p>[STUDENT NAME]</p>
            <!--Profile button to go to profile-->
        </div>
    </div>


    <div class="myRecipes">
        <h1 class="myRecipesTitle">My Recipes</h1>
        <p>There are [NUMBER] recipes so far:</p>
        <div class="recipesTitle">[Recipe Title 1]</div>
        <div class="recipesTitle">[Recipe Title 2]</div>
        <div class="recipesTitle">[Recipe Title 3]</div>
        <button class="allRecipes">See all Recipes</button>
    </div>

</main>
</body>
<footer>BeCode project</footer>
</html>