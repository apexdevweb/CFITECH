<h1>€asy converter</h1>
<nav>
    <ul class="primary__nav">
        <li class="primary__nav--El"><a href="index.php">Home</a></li>
        <li class="primary__nav--El"><a href="profil.php">Profil</a></li>
        <li class="primary__nav--El"><a href="help.php">Help</a></li>
        <li class="primary__nav--El" id="open-sub-nav"><a href="">Convertion<i class="fa-solid fa-chart-line"></i></a>
            <ul class="secondary__nav">
                <li class="secondary__nav--El">Euro <i class="fa-solid fa-arrow-right"></i> Dollars</li>
                <li class="secondary__nav--El">Euro <i class="fa-solid fa-arrow-right"></i> Yen</li>
                <li class="secondary__nav--El">Euro <i class="fa-solid fa-arrow-right"></i> Pounds</li>
                <li class="secondary__nav--El">Euro <i class="fa-solid fa-arrow-right"></i> FrancsRDC</li>
                <li class="secondary__nav--El">Euro <i class="fa-solid fa-arrow-right"></i> Dirham</li>
                <li class="secondary__nav--El">Euro <i class="fa-solid fa-arrow-right"></i> Dirham</li>
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
            <li class="tertiary__nav--El"><a href="login.php">Login</a></li>
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