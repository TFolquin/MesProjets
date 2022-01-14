<section>
    <form id="recherche" action="">
        <input type="text" name="page" value="search" hidden>
        <label for="">Recherche d'un champion:
            <input type="text" name="s">
        </label>
        <button type="submit">Rechercher</button>
    </form>

</section>

<main>



    <?php

    foreach ($champions as $champion) {
    ?>

        <a <?php echo 'href="?page=details&id=' . $champion["id"] . '"' ?>>
            <div class="offre">

                <img class="image" src="<?php echo $champion["image"] ?>" alt="">
                <article class="infos">
                    <h1>
                        <?php echo $champion["nom"] ?>
                    </h1>
                    <h2>
                        <?php echo $champion["region"] ?>
                    </h2>
                    <p>
                        <?php echo $champion["hist"] ?>
                    </p>
                </article>
            </div>


        </a>



    <?php
    }

    ?>