<?php
require("backend/userRequest.php");
require("backend/articleRequest.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Exos PHP</title>
</head>

<body>
    <header>
        <h1>Exercices</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="article.php">Articles</a></li>
                <li><a href="addUser.php">Users</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="user__section">
            <div class="user_containerA">
                <p>id_user</p>
                <p>firstname</p>
                <p>lastname</p>
                <p>gender</p>
                <p>date_of_birth</p>
                <p>city</p>
                <p>weight_kg</p>
            </div>
            <?php
            foreach ($req_user as $user) {
            ?>
                <div class="user_containerB">
                    <div class="i"><?= htmlspecialchars($user["id_user"]) ?></div>
                    <div class="a"><?= htmlspecialchars($user["firstname"]) ?></div>
                    <div class="b"><?= htmlspecialchars($user["lastname"]) ?></div>
                    <div class="c"><?= htmlspecialchars($user["gender"]) ?></div>
                    <div class="d"><?= htmlspecialchars($user["date_of_birth"]) ?></div>
                    <div class="e"><?= htmlspecialchars($user["city"]) ?></div>
                    <div class="h"><?= htmlspecialchars($user["weight_kg"]) ?></div>
                </div>
            <?php
            }
            ?>
        </section>
        <section class="article__section">
            <?php
            foreach ($req_artcl as $article) {
            ?>
                <div class="article__container">
                    <h3><?= htmlspecialchars($article["article_name"]) ?></h3>
                    <h4><?= htmlspecialchars($article["description"]) ?></h4>
                    <h5><?= htmlspecialchars($article["id_user_article"]) ?></h5>
                </div>
            <?php
            }
            ?>
        </section>

    </main>
    <footer></footer>
</body>

</html>