<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="Andy Nguyen">
    <meta name="keywords" content="PHP">
    <meta name="description" content="A PHP page to confirm booking details">
    <title>Booking Confirmatio</title>
</head>

<body>
    <h1>Rohirrim Tour Booking Confirmationa</h1>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["firstname"]) and isset($_POST["lastname"])) {
            $firstName = htmlspecialchars($_POST["firstname"]);
            $lastName = htmlspecialchars($_POST["lastname"]);
            echo "<p> Welcome $firstName $lastName !</p>";
        }

         if (isset($_POST["accom"])) {
           $dayFour = false;
           $dayTen = false;
             if (isset($_POST["4day"])) {
                $tour = htmlspecialchars($_POST["4day"]);
                $dayFour = true;
            }

            if (isset($_POST["10day"])) {
                $tour = htmlspecialchars($_POST["10day"]);
                $dayTen = true;
            }

            if ($dayFour and $dayTen) {
                echo "You are now booked on the Four-day tour and the Ten-day tour!";
            } elseif ($dayFour) {
                echo "You are now booked on the Four-day!!";
            } elseif ($dayTen) {
                echo "You are now booked on the Ten-day tour!";
            }
        }


         if (isset($_POST["species"])) {
            $species = htmlspecialchars($_POST["species"]);
            echo "<p> Species: $species </p>";
        }

        if (isset($_POST["age"])) {
            $age = htmlspecialchars($_POST["age"]);
            echo "<p> Age: $age </p>";
        }


        if (isset($_POST["food"])) {
            $Food = htmlspecialchars($_POST["food"]);
            echo "<p> Meal Preference: $Food</p>";
        }

         if (isset($_POST["partysize"])) {
            $partySize = htmlspecialchars($_POST["partysize"]);
            echo "<p> Number of travellers: $partySize</p>";
        }

    } else {
        echo "<p>Invalid booking submission</p>";
    }
   
    ?>




<footer>
<div>
	<h1 class="fineprint">Conditions Apply</h1>
	<p class="fineprint">  Rohirrim Dude Ranch management takes no responsiblity for any injury, beheadings, spells (sleeping or otherwise) , spider-bites suffered by guests, or for anything whatsoever.	</p> 
</div>
	<p id="contact" >Any enquiries please email the <a href="mailto:something@something.com">manager</a></p>
</footer>

</body>
</html>