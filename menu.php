<?php

require __DIR__ . '/data.php';
require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <title>Our Menu</title>
</head>

<body>



    <div class="options">

        <p> The best tasting menu in town.


        <div id="option1">
            <?php
            $age = 1;


            if ($age <= 10) {
                echo "  Eat for free during opening weekend! :)";
            } else {
                echo "Eat for only 13";
            };


            ?>
            </p>
        </div>



        <div id="option2">

            <?php
            $age = 13;


            if ($age >= 10) {
                echo " Special price of £12.";
            } else {
                echo "Eat for only 13";
            };

            ?>



        </div>
    </div>
