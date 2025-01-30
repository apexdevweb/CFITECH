<?php
require("backend/userRegister.php");
require("backend/converterAScript.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    $title = "Profil";
    require("include/head.php");
    ?>
</head>

<body>
    <header>
        <?php
        require("include/header.php");
        ?>
    </header>
    <main>
        <hr class="main__hr1">
        <hr class="main__hr2">
        <hr class="main__hr3">
        <section class="wrapper__profil">
            <?php
            // var_dump($_SESSION['data']);
            if (isset($_SESSION['data']) && is_array($_SESSION['data'])) {
            ?>
                <article class="profil__container">
                    <hgroup class="profil__title">
                        <h3 class="profil__title--h3"><?= $_SESSION['data']['pseudo'] ?></h3>
                        <h4 class="profil__title--h4"><?= $_SESSION['data']['id'] ?></h4>
                    </hgroup>
                    <blockquote class="profil__list">
                        <h5>Liste des conversions effectuer</h5>
                        <?php
                        if (isset($_SESSION["Eur/dolrs-resultat"])) {
                        ?>
                            <p><i class="fa-solid fa-arrow-right"></i>Euro/Usd:<?= " " . $_SESSION["Eur/dolrs-resultat"] . " " ?>USD</p>
                        <?php

                        } else {
                            echo "<p>" . "Aucune conversion effectuer pour l'instant..." . "</p>";
                        }
                        ?>
                    </blockquote>
                </article>
            <?php
            }
            ?>
        </section>
    </main>
    <footer>
        <?php
        require("include/footer.php");
        ?>
    </footer>
</body>

</html>