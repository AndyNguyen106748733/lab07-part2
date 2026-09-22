<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="Andy Nguyen">
    <meta name="keywords" content="PHP">
    <meta name="description" content="A PHP page to confirm booking details">
    <title>Booking Confirmation</title>
</head>

<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["firstname"])) {
            $firstName = htmlspecialchars($_POST["firstname"]);
            echo "<p> First name for booking: $firstName </p>";
        }

        if (isset($_POST["lastname"])) {
            $lastName = htmlspecialchars($_POST["lastname"]);
            echo "<p> Last name for booking: $lastName </p>";
        }

        if (isset($_POST["age"])) {
            $age = htmlspecialchars($_POST["age"]);
            echo "<p> Age for booking: $age </p>";
        }

        if (isset($_POST["species"])) {
            $species = htmlspecialchars($_POST["species"]);
            echo "<p> Species for booking: $species </p>";
        }

        if (isset($_POST["accom"])) {
            $accom = htmlspecialchars($_POST["accom"]);
            echo "<p> Accommodation for booking: $accom</p>";
        }

        if (isset($_POST["4day"])) {
            $tour = htmlspecialchars($_POST["4day"]);
            echo "<p> Selected 4 day tour</p>";
        }

        if (isset($_POST["10day"])) {
            $tour = htmlspecialchars($_POST["10day"]);
            echo "<p> Selected 10 day tour</p>";
        }

        if (isset($_POST["food"])) {
            $Food = htmlspecialchars($_POST["food"]);
            echo "<p> Selected: $Food</p>";
        }

        if (isset($_POST["bookday"])) {
            $bookDay = htmlspecialchars($_POST["bookday"]);
            echo "<p> Selected booking day: $bookDay</p>";
        }

         if (isset($_POST["partysize"])) {
            $partySize = htmlspecialchars($_POST["partysize"]);
            echo "<p> Party size: $partySize</p>";
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