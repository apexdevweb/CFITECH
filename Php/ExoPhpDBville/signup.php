<?php
require("backend/sqlRequests/insertUser.php");
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
        $sub_title = "Signup";
        require("include/header.php");
        ?>
    </header>
    <main>
        <section class="global__content">
            <fieldset>
                <legend>Inscription</legend>
                <form method="POST">
                    <input type="text" placeholder="Nom" name="firstname" maxlength="50" required>
                    <input type="text" placeholder="Prenom" name="lastname" maxlength="50" required>
                    <input type="email" placeholder="Email" name="usermail" required>
                    <label for="date_naissance">Date de naissance</label>
                    <input type="date" name="date_naissance" required>
                    <select name="city" required>
                        <option selected>Votre villes</option>
                        <option value="Bruxelles">Bruxelles</option>
                        <option value="Paris">Paris</option>
                        <option value="Berlin">Berlin</option>
                        <option value="Bogota">Bogota</option>
                        <option value="Londre">Londre</option>
                        <option value="Tokyo">Tokyo</option>
                        <option value="Moscou">Moscou</option>
                        <option value="Losangeles">Losangeles</option>
                        <option value="Rome">Rome</option>
                        <option value="stockholm">Stockholm</option>
                    </select>
                    <input type="password" placeholder="Mot de passe" name="userpass" required>
                    <input type="password" placeholder="Confirmer mot de passe" name="userverifpass" required>
                    <input type="submit" name="insertValidate" value="Signup">
                </form>
            </fieldset>
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