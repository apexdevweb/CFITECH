<nav class="header__nav">
    <h1 class="header__title">Profils & City</h1>
    <h2 class="header__subtitle"><?= $sub_title ?></h2>
    <?php
    if (isset($_SESSION["auth"])) {
    ?>
        <cite>Bonjour: <?= $_SESSION["data"]["USR_pseudo"] ?></cite>
    <?php
    }
    ?>

    <ul class="nav__list">
        <li class="nav__list--items"><a href="../index.php"><span class="list__item--span">H</span>ome</a></li>
        <?php
        if (isset($_SESSION["auth"])) {
        ?>
            <li class="nav__list--items"><a href="../profils.php"><span class="list__item--span">P</span>rofils</a></li>
            <li class="nav__list--items"><a href="../backend/security/logout.php"><span class="list__item--span">L</span>ogout</a></li>
        <?php
        } else {
        ?>
            <li class="nav__list--items"><a href="../signup.php"><span class="list__item--span">S</span>ignup</a></li>
            <li class="nav__list--items"><a href="../login.php"><span class="list__item--span">L</span>ogin</a></li>
        <?php
        }
        ?>
    </ul>
</nav>