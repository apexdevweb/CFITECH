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
            if (isset($_SESSION['data']) && is_array($_SESSION['data'])) {
            ?>
                <article class="profil__container">
                    <hgroup class="profil__title">
                        <h3 class="profil__title--h3"><?= htmlspecialchars($_SESSION['data']['pseudo']) ?></h3>
                        <h4 class="profil__title--h4"><?= htmlspecialchars($_SESSION['data']['id']) ?></h4>
                    </hgroup>
                    <blockquote class="profil__list">
                        <h5>Liste des conversions effectuées</h5>
                        <?php
                        // si $_SESSION["globaleconvert"] n'est pas vérifiée, on l'initialise
                        if (!isset($_SESSION["globaleconvert"])) {
                            $_SESSION["globaleconvert"] = [];
                        }

                        // On ajoute la nouvelle conversion uniquement si elle n'existe pas déjà dans la session
                        if (isset($_SESSION["Eur/dolrs-resultat"])) {
                            $newConversion = $_SESSION["Eur/dolrs-resultat"];
                            if (!in_array($newConversion, $_SESSION["globaleconvert"])) {
                                $_SESSION["globaleconvert"][] = $newConversion;
                            }
                        }

                        // On affiche toutes les conversions dans la session
                        if (!empty($_SESSION["globaleconvert"])) {
                            foreach ($_SESSION["globaleconvert"] as $conversion) {
                        ?>
                                <p><i class="fa-solid fa-arrow-right"></i> Euro/Usd: <?= " " . htmlspecialchars($conversion) . " " ?>USD</p>
                        <?php
                            }
                        } else {
                            echo "<p>Aucune conversion effectuée pour l'instant...</p>";
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