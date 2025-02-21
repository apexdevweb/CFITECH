<?php
//je déclare une nouvelle date
$date = new DateTime();
//je récupère la date de naissance
$date_naiss = new DateTime($_SESSION["data"]["USR_dtofbrth"]);
//je calcule la différence entre $date et date_naiss 
$age = $date_naiss->diff($date)->y;
