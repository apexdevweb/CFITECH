<?php
require_once("backend/insertusers.php");
require_once("backend/affichageSmartphone.php");
$nav = "signup";
$title = "Signup";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    include("includes/head.php");
    ?>
</head>

<body>
    <?php
    include("includes/header.php");
    ?>
    <main>
        <h1><?= $title ?></h1>
        <div class="form__signup--container">
            <form method="POST">
                <input type="text" name="usr_pseudo" placeholder="Votre Nom">
                <br><br>
                <input type="number" name="usr_age">
                <br><br>
                <select name="smartPhone">
                    <?php
                    foreach ($view_smart_req as $register_smart) {
                    ?>
                      <option value=""><?=$register_smart['nom']?></option>
                    <?php
                    }
                    ?>     
                </select>
                <br><br>
                <button class="btn btn-primary" name="register" type="submit">Signup</button>
            </form>
        </div>
    </main>
    <footer>
        <?php
        include("includes/footer.php");
        ?>
    </footer>
</body>

</html>