<?php

declare(strict_types=1);


$d1 = strtotime("December 7");
$d2 = ceil(($d1 - time()) / 60 / 60 / 24);



function openingHours(int $open, int $close): string
{

    return "We're open today from  $open - $close.";
}

$hours = openingHours(12, 01);

/*printa sedan  <p><?php echo $hours; ?></p> */



function dailyOffer(string $open, string $close): string
{

    return "We're open today from  $open - $close.";
}

$offer = openingHours(12, 01);
