<?php

require __DIR__ . '/data.php';
require __DIR__ . '/header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
    <title>Our Menu</title>
</head>

<body>
    <div class="specials">
        <h1>opening weekend specials </h1>
    </div>


    <div class="options">

        <div id="option1">
            <b> Kaiseki </b> 懐石<br>
            Originating from Kyoto, our Kyō-Kaiseki cuisine is a particularly elaborate
            style of dining with ties to traditional Japanese tea ceremonies. Emphasis
            is placed on the subtle flavours of fresh, seasonal ingredients resulting
            in a refined, multi-course, culinary experience.<br>
            <br>

            Our menu is based on the traditional Kyōto-style Kaiseki concept,
            which showcases meticulously curated and seasonally chosen dishes.
            Approaching food as art, our chefs are highly influenced by our
            local ingredients, while incorporating signature Aburi (flame-seared)
            techniques throughout the dinner giving you a unique culinary experience. </p>
            <br>


            Price <br>
            <?php
            $age = 20;


            if ($age <= 10) {
                echo "£75";
            } else {
                echo "£120";
            };

            ?>
            <br>
            <br>
            Children (up to 10yrs)<br>
            <?php
            $age = 5;

            if ($age <= 10) {
                echo "£75";
            } else {
                echo "£120";
            };

            ?>


        </div>



        <div id="option2">
            <b> Omakase </b> お任せ<br>
            The art of trust. With our Omakase menu the guests surrender into the hands
            of the chef and receive a meal that is elegant, creative and made from the
            best ingredients available for the season. The one who hands over the choice
            to the chef is open-minded and adventurous. In return, you get an authentic
            Japanese dining experience of premium quality.<br>
            <br>

            Our menu is centered right by the side of our chefs, letting guests
            experience the showcase while our chef prepares the dinner. The food
            will be given to our guests continuously during the evening to create
            the closest view possible to our chefs, giving the most exclusive
            experience of Japanese culinary .</p>

            <br>
            Price <br>
            <?php
            $age = 20;


            if ($age <= 10) {
                echo "£60";
            } else {
                echo "£100";
            };

            ?>
            <br>
            <br>
            Children (up to 10yrs)<br>
            <?php
            $age = 5;


            if ($age <= 10) {
                echo "£60";
            } else {
                echo "£100";
            };

            ?>
        </div>


</body>

</html>
