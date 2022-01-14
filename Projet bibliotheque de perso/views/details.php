


<article id="focusedArticle">
    <?php foreach ($championDetails as $champion) {
    ?>
        <div class="imgContainer">
            <img class="focusedImage" src="<?php echo $champion["image"] ?>" alt="">
        </div>
        <main class="details">
            <h1>
                <?php echo $champion["nom"] ?>
            </h1>
            <h2>
                <?php echo $champion["region"] ?>
            </h2>
            <p>
            <?php echo $champion["hist"] ?>
            </p>
        <?php
    }
        ?>
</article>