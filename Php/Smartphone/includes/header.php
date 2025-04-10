<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="index.php">Mon Site Bg</a>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($nav === "index"): ?>active<?php endif ?>">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item <?php if ($nav === "signup"): ?>active<?php endif ?>">
                <a class="nav-link" href="signup.php">Signup</a>
            </li>
    </div>
</nav>