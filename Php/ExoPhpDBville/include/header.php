<nav class="header__nav">
    <h1 class="header__title">Profils & City</h1>
    <h2 class="header__subtitle"><?= $sub_title ?></h2>
    <?php
    if (isset($_SESSION["auth"])) {
    ?>
        <div class="header__user--pannel">
            <ul class="user__pannel--list">
                <li class="user__pannel--item"><cite>Bonjour: <span><?= $_SESSION["data"]["USR_pseudo"] ?></span></cite></li>
                <hr class="user__pannel--separator">
                <li class="user__pannel--item"><i class="fa-regular fa-user"></i> <a href="../personalProfil.php">My profil</a></li>
            </ul>
        </div>
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