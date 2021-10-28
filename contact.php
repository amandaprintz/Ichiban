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
    <link rel="stylesheet" href="contact.css">




    <div class="contact">

        <div id="contact1">
            <h2> contact </h2>
            <br>
            <ul>
                <li>
                    <p>
                        Knightsbridge<br>
                        31 Beauchamp Place<br>
                        London, SW3 1NU<br>
                        <br>
                        Reservations: 020 7794 6158<br>
                        Catering: 020 7794 7320<br>
                        Bookings@ichiban.com<br>


                    </p>
                </li>
            </ul>
        </div>


        <div id="contact2">
            <h2> opening hours </h2>
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

                <p>
                    Experience Ichiban Style cuisine and hospitality in stunning destinations around
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
