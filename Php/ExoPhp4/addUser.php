<?php
require("backend/addUserRequest.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" placeholder="firstname" name="frstName">
        <input type="text" placeholder="lastname" name="lstName">
        <label for="genre">Homme</label>
        <input type="radio" value="M" name="genre">
        <label for="genre">Femme</label>
        <input type="radio" value="F" name="genre">
        <select name="ville">
            <option value="Bruxelles">Bruxelles</option>
            <option value="Marseille">Marseille</option>
            <option value="Barcelone">Barcelone</option>
            <option value="Berlin">Berlin</option>
        </select>
        <input type="number" placeholder="poids" name="poids">
        <input type="date" name="dateNaissance">
        <input type="submit" value="register" name="validate">
    </form>
</body>

</html>