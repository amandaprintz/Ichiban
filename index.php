<?php

require __DIR__ . '/data.php';
require __DIR__ . '/header.php';

?>

<main>

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
</main>


<?php endforeach; ?>

<button>
    Book a table
</button>





</body>

</html>

<?php

require __DIR__ . '/footer.php';
?>
