<?php
$req_view_profils = $bdd->prepare("SELECT * FROM users");
$req_view_profils->execute();
