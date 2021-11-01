<?php
require __DIR__ . '/data.php';
require __DIR__ . '/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <title> ICHIBAN</title>
</head>

<body>
    <main>

        <p class="countdown"><?php
                                echo "Grand opening in " . $d2 . " days!"; ?></p>


        <?php foreach ($articles as $article) :
            $image = $article['image'];
            $imageAlt = $article['image-alt'];
            $info = $article['info'];
            $description = $article['description'];
        ?>


            <div class="container">
                <div class="grid-item">
                    <p class="image"><img src="<?php echo $image; ?>" width="200px">
                    <p class="info"><?php echo $article['info'] ?></p>
                    <p class="description"><?php echo $article['description'] ?></p>
                    </a>
                </div>
            </div>



        <?php endforeach; ?>

        <br>
        <button>
            book a table
        </button>

    </main>


    <?php

    require __DIR__ . '/footer.php';
    ?>


</body>

</html>
