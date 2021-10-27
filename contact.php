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
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="typography.css">




    <div class="contact">

        <div id="contact1">
            <h2> Kaiseki </h2>
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

        </div>



        <div id="contact2">
            <h2> Kaiseki </h2>
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


        </div>
        <div id="contact3">
            <h2> visit our family </h2><br>
            <ul class="restaurants">

                <p> Experience Ichiban Style cuisine and hospitality in stunning destinations around
                    the globe. Contact us for reservations or inquiries about specific location.
                </p>
                <br>

                <?php foreach ($restaurants as $restaurant) : ?>
                    <li>
                        <p> <?php echo "$restaurant"; ?></p>
                    </li>
                <?php endforeach; ?>

            </ul>

        </div>
