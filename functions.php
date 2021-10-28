<?php

declare(strict_types=1);

// function to easily change the menu-bar
function menu($items): void
{
    foreach ($items as $item) {
        $link = $item === 'home' ? 'index' : $item;
        echo "<a href=" . $link . ".php>$item</a>";
    }
}

$items = [
    'menu',
    'about',
    'contact',
    'home'
];



// function that will countdown to opening day
$d1 = strtotime("December 7");
$d2 = ceil(($d1 - time()) / 60 / 60 / 24);


//open from - function
function days(string $from, string $to): string
{
    return " Open from $from - $to.";
}

$openings = days('Tuesday', 'Sunday');
