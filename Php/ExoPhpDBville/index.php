<?php
session_start();
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
        $sub_title = "Home";
        require("include/header.php");
        ?>
    </header>
    <main>
        <section class="global__content">
            <p class="global__intro"><span>W</span>elcome to the <strong>Profils</strong> & <strong>City</strong></p>
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