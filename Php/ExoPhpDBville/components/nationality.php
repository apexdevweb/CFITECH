<?php
if ($_SESSION["data"]["USR_city"] === "Bruxelles") {
    $nationality = "Belge";
} elseif ($_SESSION["data"]["USR_city"] === "Paris") {
    $nationality = "Française";
} elseif ($_SESSION["data"]["USR_city"] === "Berlin") {
    $nationality = "Allemande";
} elseif ($_SESSION["data"]["USR_city"] === "Bogota") {
    $nationality = "Colombienne";
} elseif ($_SESSION["data"]["USR_city"] === "Londre") {
    $nationality = "Anglaise";
} elseif ($_SESSION["data"]["USR_city"] === "Tokyo") {
    $nationality = "Japonaise";
} elseif ($_SESSION["data"]["USR_city"] === "Moscou") {
    $nationality = "Russe";
} elseif ($_SESSION["data"]["USR_city"] === "Losangeles") {
    $nationality = "Americaine";
} elseif ($_SESSION["data"]["USR_city"] === "Rome") {
    $nationality = "Italienne";
} elseif ($_SESSION["data"]["USR_city"] === "Stockholm") {
    $nationality = "Suédoise";
}
