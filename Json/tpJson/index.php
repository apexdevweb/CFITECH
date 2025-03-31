<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 Json</title>
</head>

<body>
    <?php
    // $star = json_encode("main.json");
    // $star = file_get_contents("main.json");
    $star = [
        [
            "firstname" => "Tom",
            "lastname" => "Cruise",
            "lastmovie" => "Mission: Impossible - the finale reckoning",
            "isAmerican" => true,
        ],
        [
            "firstname" => "Omar",
            "lastname" => "Sy",
            "lastmovie" => "The killer",
            "isAmerican" => false,
        ],
        [
            "firstname" => "Denzel",
            "lastname" => "Washington",
            "lastmovie" => "The rift",
            "isAmerican" => true,
        ],
        [
            "firstname" => "Emilie",
            "lastname" => "Blunt",
            "lastmovie" => "Discolsure",
            "isAmerican" => true, 
        ]
    ]
    ?>
    <?php  
    foreach ($star as $str) {
    echo json_encode($str["firstname"]). "<br>";
    echo json_encode($str["lastname"]). "<br>";
    echo json_encode($str["lastmovie"]). "<br>";
    echo json_encode($str["isAmerican"]). "<br>";
    }
    ?>
</body>

</html>