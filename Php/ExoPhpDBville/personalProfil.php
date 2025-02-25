<?php
session_start();
require("backend/connexionDB.php");
require("backend/class/userClass.php");
require("components/nationality.php");
include("components/age.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    require("include/head.php");
    ?>
</head>

<body>
    <header>
        <?php
        $sub_title = "Profils";
        require("include/header.php");
        ?>
    </header>
    <main>
        <section class="global__content">

            <article class="profil__card--main">
                <hgroup class="profil__title--container">
                    <h3><?= $_SESSION["data"]["USR_firstName"] ?></h3>
                    <h4><?= $_SESSION["data"]["USR_pseudo"] ?></h4>
                </hgroup>
                <div class="profil__subcontainer">
                    <blockquote class="profil__subtitle--container">
                        <p>Nationalité: <?= $nationality ?></p>
                        <p><?= $_SESSION["data"]["USR_city"] ?></p>
                        <cite><?= $_SESSION["data"]["USR_dtofbrth"] ?></cite>
                        <cite><?= $age ?>ans</cite>
                    </blockquote>
                    <figure class="profil__fig">
                        <img src="../assets/image/avatar.png" alt="myAvatar">
                        <figcaption><small id="usr_mail"><?= $_SESSION['data']["USR_mail"] ?></small></figcaption>
                    </figure>
                </div>
            </article>
        </section>
        <?php
        require("include/bottomPapper.php");
        ?>
    </main>
    <footer>
        <?php
        require("include/footer.php");
        ?>
    </footer>
    <script src="assets/js/mobilemenu.js"></script>
</body>

</html>