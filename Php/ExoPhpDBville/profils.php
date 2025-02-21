<?php
session_start();
require("backend/connexionDB.php");
require("backend/sqlRequests/recupProfils.php");
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
            <?php
            foreach ($req_view_profils as $profilInfo) {
                $date = new DateTime();
                $date_naiss2 = new DateTime($profilInfo["date_of_birth"]);
                $age2 = $date_naiss2->diff($date)->y;
            ?>
                <article class="profil__card--main">
                    <hgroup class="profil__title--container">
                        <h3><?= $profilInfo["user_first_name"] ?></h3>
                        <h4><?= $profilInfo["user_last_name"] ?></h4>
                    </hgroup>
                    <div class="profil__subcontainer">
                        <blockquote class="profil__subtitle--container">
                            <p><?= $profilInfo["user_city"] ?></p>
                            <cite><?= $profilInfo["date_of_birth"] ?></cite>
                            <cite><?= $age2 ?>ans</cite>
                        </blockquote>
                        <figure class="profil__fig">
                            <img src="../assets/image/avatar.png" alt="myAvatar">
                            <figcaption><small>Lorem ipsum dolor sit amet.</small></figcaption>
                        </figure>
                    </div>
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
    <script src="assets/js/mobilemenu.js"></script>
</body>

</html>