<?php

require __DIR__ . '/data.php';
require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';
?>

<body>
    <main>

        <p class="countdown"><?php
                                echo "Grand opening in " . $d2 . " days!"; ?></p>


        <?php foreach ($articles as $article) :
            $image = $article['image'];
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




    </main>
    <br>
    <br>
    <br>
    <br>

    <button>
        book a table
    </button>

    <br>
    <br>
    <br>

    <br>
    <br>
    <br>

</body>

</html>

<?php

require __DIR__ . '/footer.php';
?>
