<?php

declare(strict_types=1);

$articles = [
    [
        'image' => "/images/sashimi.jpeg",
        'info' => '❍',
        'description' => 'a variety of tasting menus'
    ],
    [
        'image' => "/images/gyoza.jpeg",
        'info' => '❍',
        'description' => 'explore gyozas and dim sum'
    ],
    [
        'image' => "/images/chef.jpeg",
        'info' => '❍',
        'description' => 'The best Japanese culinary '
    ],
    [
        'image' => "/images/matcha.jpeg",
        'info' => '❍',
        'description' => 'explore a variety of drinks'
    ],
];


function openingHours(int $open, int $close): string
{

    return "We're open today from  $open - $close.";
}

$hours = openingHours(12, 01);

/*printa sedan  <p><?php echo $hours; ?></p> */
