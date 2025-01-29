<h1>€asy converter</h1>
<nav>
    <ul class="primary__nav">
        <li class="primary__nav--El"><a href="index.php">Home</a></li>
        <li class="primary__nav--El"><a href="profil.php">Profil</a></li>
        <li class="primary__nav--El"><a href="help.php">Help</a></li>
        <li class="primary__nav--El" id="open-sub-nav"><a href="#">Conversion<i class="fa-solid fa-chart-line"></i></a>
            <ul class="secondary__nav">
                <li class="secondary__nav--El"><a href="index.php?page=converterA">Euro <i class="fa-solid fa-arrow-right"></i> Dollars</a></li>
                <li class="secondary__nav--El"><a href="index.php?page=converterB">Euro <i class="fa-solid fa-arrow-right"></i> Yen</a></li>
                <li class="secondary__nav--El"><a href="index.php?page=converterC">Euro <i class="fa-solid fa-arrow-right"></i> Pounds</a></li>
                <li class="secondary__nav--El"><a href="index.php?page=converterD">Euro <i class="fa-solid fa-arrow-right"></i> FrancsRDC</a></li>
                <li class="secondary__nav--El"><a href="index.php?page=converterE">Euro <i class="fa-solid fa-arrow-right"></i> Dirham</a></li>
                <li class="secondary__nav--El"><a href="index.php?page=converterF">Euro <i class="fa-solid fa-arrow-right"></i> Dirham</a></li>
            </ul>
        </li>
        <ul class="tertiary__nav">
            <?php
            if (isset($_SESSION['authtentification'])) {
            ?>
                <h4 class="tertiary__nav--h4">Bonjour: <?= $_SESSION['pseudo'] ?></h4>
            <?php
            }
            ?>
            <?php
            if (!isset($_SESSION['authtentification'])) {
            ?>
                <li class="tertiary__nav--El"><a href="login.php">Login</a></li>
            <?php
            }
            ?>
            <hr class="tertiary__nav--hr">
            <?php
            if (isset($_SESSION['authtentification'])) {
            ?>
                <li class="tertiary__nav--El"><a href="../backend/logout.php">Logout</a></li>
            <?php
            }
            ?>
        </ul>
    </ul>

</nav>