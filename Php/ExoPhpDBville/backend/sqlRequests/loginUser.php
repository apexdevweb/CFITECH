<?php
require_once("./backend/connexionDB.php");
require("./components/userClass.php");

if (isset($_POST["userLog"])) {
    if (!empty($_POST["usermail"]) && !empty($_POST["userpass"])) {

        $log_mail = htmlspecialchars(strip_tags($_POST['usermail']));
        $log_pass = htmlspecialchars(strip_tags($_POST['userpass']));

        $req_log_verif = $bdd->prepare("SELECT * FROM users WHERE user_mail = ?");
        $req_log_verif->execute([$log_mail]);

        if ($req_log_verif->rowCount() > 0) {

            $logInfo = $req_log_verif->fetch();
            $logInfoPass = $logInfos["user_pass"];

            if (password_verify($log_pass, $logInfoPass)) {

                $_SESSION['auth'] = true;
                $_SESSION['user'] = [
                    "userfname" => $user->getFirstName(),
                    "userlname" => $user->getLastName(),
                    "usermail" => $user->getEmail(),
                    "userbirthday" => $user->getBirthDate()->format("Y-m-d"),
                ];

                header("Location: index.php");
                exit();
            } else {
                echo "<p>" . "Mot de passe incorrecte" . "</p>";
            }
        }
    }
}
