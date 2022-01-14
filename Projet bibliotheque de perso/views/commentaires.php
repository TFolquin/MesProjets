<!-- TODO : Faire une vue qu'on implémentera dans la vue details.php qui ne servira qu'à afficher les commentaires -->
<section class="commentSection">
        <?php foreach ($comments as $comment) {
        ?>
            <div class="comment">
                <h1>
                    <?php echo $comment["prenom"];
                    echo $comment["nom"]; ?>
                </h1>
                <h2>
                <?php echo $comment["com_date"]; ?>
                </h2>
                <p>
                <?php echo $comment["com_contenu"]; ?>
                </p>
            </div>
        <?php
        }
        ?>
    </section>
    