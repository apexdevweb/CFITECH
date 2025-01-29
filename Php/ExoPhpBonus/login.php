<?php
require("backend/userRegister.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    $title = "Login";
    require("include/head.php");
    ?>
</head>

<body>
    <main>
        <div class="wrapper__log">
            <a class="retour__btn--login" href="index.php"><i class="fa-solid fa-arrow-left"></i>Retour</a>
        </div>
        <form action="backend/userRegister.php" method="POST" class="form__login">
            <input class="form__login--ipt" type="text" maxlength="50" placeholder="Nom" name="user_name" required>
            <input class="form__login--ipt" type="password" maxlength="80" placeholder="Mot de pass" name="user_pass" required>
            <input class="form__login--ipt" type="submit" value="Login" name="user_log">
        </form>
    </main>
</body>

</html>