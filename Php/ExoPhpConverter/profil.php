<?php
require("backend/userRegister.php");
require("backend/converterAScript.php");
require("backend/converterBScript.php");
require("backend/converterCScript.php");
require("backend/converterDScript.php");
require("backend/converterEScript.php");
require("backend/converterFScript.php");
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
                        if (isset($_SESSION["convertResultat"]) && isset($_SESSION["infoDevice"])) {
                            //on place la super globale "SESSION" dans des variables, 
                            //une pour le résultat --> $newConversion et une pour voir le type de devise converti --> $newInfo
                            $newConversion = $_SESSION["convertResultat"];
                            $newInfo = $_SESSION["infoDevice"];

                            if (!in_array($newConversion, $_SESSION["globaleconvert"]) && !in_array($newInfo, $_SESSION["globaleconvert"])) {
                                $_SESSION["globaleconvert"][] = $newConversion . " " . $newInfo;
                            }
                        }

                        // On affiche toutes les conversions dans la session
                        if (!empty($_SESSION["globaleconvert"])) {
                            foreach ($_SESSION["globaleconvert"] as $conversion) {
                        ?>
                                <p><i class="fa-solid fa-arrow-right"></i><?= " " . htmlspecialchars($conversion) . " " ?><i class="fa-solid fa-chart-line"></i></p>
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
        <hr class="main__hr3">
        <hr class="main__hr2">
        <hr class="main__hr1">
    </main>
    <footer>
        <?php
        require("include/footer.php");
        ?>
    </footer>
</body>

</html>