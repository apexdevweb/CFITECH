<?php
$date = new DateTime();
foreach($req_user as $userAge){
    $date_naiss = new DateTime($userAge->date_of_birth);
    $age = $date_naiss->diff($date)->y;
    $age;

}
