<article id="focusedChampion">
    <?php foreach ($championDetails as $champion) {
    ?>
        <div class="imgContainer">
            <img class="focusedImage" src="<?php echo $champion["image"] ?>" alt="">
        </div>
        <main class="details">
            <div class="ligne">
                <div class="colonne">
                   <p>Nom</p>
                   <h1>
                    <?php echo htmlentities($champion["nom"]) ?>
                </h1> 
                </div>
                <div class="colonne">
                    <p>Région</p>
                    <h2>
                    <?php echo htmlentities($champion["region"]) ?>
                </h2>
                </div>
                
            </div>

            <p>
                <?php echo htmlentities($champion["hist"]) ?>
            </p>
        <?php
    }
        ?>
</article>