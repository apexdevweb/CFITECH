<?php
require("Artiste.php");
require("Album.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP JSON 3</title>
</head>
<body>
    <?php
     $album_A = new Album("Booba",13,new DateTime("2015-04-12"));
     $album_B = new Album("Cypress Hill",28,new DateTime("2000-04-25"));
     $album_C = new Album("Ramstein",11,new DateTime("2005-10-28"));

     $artiste_A = new Artiste("Booba","RapFr", 7000000,$album_A);
     $artiste_B = new Artiste("Cypress Hill","RapUS", 9000000,$album_B);
     $artiste_C = new Artiste("Ramstein","Rock", 5000000,$album_C);


     header('Content-Type: application/json');
     echo json_encode($artiste_A, JSON_PRETTY_PRINT);
    ?>
</body>
</html>