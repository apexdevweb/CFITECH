<?php
try {
    $req_view_profils = $bdd->prepare("SELECT * FROM users");
    $req_view_profils->execute();
} catch (PDOException $e) {
    die("select users ERROR" . $e->getMessage());
}
