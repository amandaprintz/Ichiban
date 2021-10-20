<?php

declare(strict_types=1);


$d1 = strtotime("December 7");
$d2 = ceil(($d1 - time()) / 60 / 60 / 24);
