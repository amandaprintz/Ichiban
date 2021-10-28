<?php

require __DIR__ . '/data.php';
require __DIR__ . '/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="typography.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">




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
            <br>
            <ul>
                <li>
                    <p><?php echo $openings; ?></p>
                    <br>
                    <p>
                        Tuesday 11:00 – 22:45 <br>
                        Wednesday 11:00 – 23:45 <br>
                        Thursday 11:00 - 23:45 <br>
                        Friday 12:00 - 01.00 <br>
                        Saturday 12:00 - 01:00 <br>
                        Sunday 12:00 - 22:00 <br>

                    </p>
                </li>
            </ul>

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
