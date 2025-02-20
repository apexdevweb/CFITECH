<?php
session_start();
require("./backend/connexionDB.php");
require("./backend/class/userClass.php");
if (isset($_POST["userLog"])) {
    if (!empty($_POST["usermail"]) && !empty($_POST["userpass"])) {
        try {
            $log_mail = htmlspecialchars(strip_tags($_POST['usermail']));
            $log_pass = htmlspecialchars(strip_tags($_POST['userpass']));

            $req_log_verif = $bdd->prepare("SELECT * FROM users WHERE user_mail = ?");
            $req_log_verif->execute([$log_mail]);

            if ($req_log_verif->rowCount() > 0) {

                $logInfo = $req_log_verif->fetch();
                $logInfoPass = $logInfo["user_pass"];

                if (password_verify($log_pass, $logInfoPass)) {
                    //on instancie l'utilisateur en placant en paramètre  les infos que l'on a récupéré au préalable
                    //dans la base de donnée ex→$logInfo["..."]
                    $user = new Utilisateur(
                        $logInfo["user_first_name"],
                        $logInfo["user_last_name"],
                        $logInfo["user_mail"],
                        new DateTime($logInfo["date_of_birth"]),
                        $logInfo["user_city"]
                    );


                    $_SESSION["auth"] = true;
                    $_SESSION['data'] = [
                        "USR_firstName" => $user->getFirstName(),
                        "USR_pseudo" => $user->getLastName(),
                        "USR_mail" => $user->getEmail(),
                        "USR_city" => $user->getCityName(),
                        "USR_dtofbrth" => $user->getBirthDate()->format('Y-m-d'),
                    ];
                    //↓↓ici on peut le faire aussi d'une autre façons sans utilisé la class utilisateur↓↓
                    // $_SESSION["USR_pseudo"] = $logInfo["user_last_name"];
                    // $_SESSION["USR_frstName"] = $logInfo["user_first_name"];
                    // $_SESSION["USR_mail"] = $logInfo["user_mail"];
                    // $_SESSION["USR_dtofbrth"] = $logInfo["date_of_birth"];
                    // $_SESSION["USR_city"] = $logInfo["user_city"];
                    header("Location: index.php");
                    exit();
                } else {
                    echo "<p>Mot de passe incorrect</p>";
                }
            } else {
                echo "<p>Aucun utilisateur trouvé avec cet e-mail</p>";
            }
        } catch (PDOException $e) {
            die("Connexion ERROR" . $e->getMessage());
        }
    } else {
        echo "<p>Veuillez remplir tous les champs</p>";
    }
}
