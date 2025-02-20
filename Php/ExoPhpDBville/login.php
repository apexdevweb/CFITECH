<?php
require("backend/sqlRequests/loginUser.php");
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
        $sub_title = "Login";
        require("include/header.php");
        ?>
    </header>
    <main>
        <section class="global__content">
            <fieldset>
                <legend>Connexion</legend>
                <form method="POST">
                    <input type="email" placeholder="Email" name="usermail" required>
                    <input type="password" placeholder="Mot de passe" name="userpass" required>
                    <input type="submit" value="Login" name="userLog">
                </form>
            </fieldset>
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