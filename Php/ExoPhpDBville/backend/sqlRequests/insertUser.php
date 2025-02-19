<?php
// require_once parceque require cause des problèmes require_once inclue la db q'une seule fois,
// je pense que il y à un autre require dans un fichier commun mais je n'ai pas trouver dans lequel cela cause un conflit
// donc j'ai adopter la solution du require_once après m'être renseigner sur google 
require_once("./backend/connexionDB.php");
if (isset($_POST["insertValidate"])) {
    if (
        !empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["usermail"]) && !empty($_POST["date_naissance"])
        && !empty($_POST["city"]) && !empty($_POST["userpass"]) && !empty($_POST["userverifpass"])
    ) {
        //je place la superglobale dans un htmlspecialchars doublé d'un strip_tags ("juste pour êre sur niveau sécurité")
        $user_first_name = htmlspecialchars(strip_tags($_POST["firstname"]));
        $user_last_name = htmlspecialchars(strip_tags($_POST["lastname"]));
        //je filtre le mail avec un filter_var pour vérifier si c'es un mail valide
        $user_email = filter_var($_POST["usermail"], FILTER_VALIDATE_EMAIL);
        $date_birth = htmlspecialchars($_POST["date_naissance"]);
        $user_pass = htmlspecialchars(strip_tags($_POST["userpass"]));
        $user_confirm_pass = htmlspecialchars(strip_tags($_POST["userverifpass"]));

        //je fais une conditions pour vérifier l'email 
        if ($user_email !== false) {
            //je verifie si le premier password entrer correspond avec le deuxième
            if ($user_pass === $user_confirm_pass) {
                $user_crypted_pass = password_hash($_POST["userpass"], PASSWORD_ARGON2ID);
                // je vérifie avec un SELECT dans une requête preparer par rapport à l'email si l'utilisateur est déjà existant dans la base de donnée 
                $req_verif_exist = $bdd->prepare("SELECT user_mail FROM users WHERE user_mail = ?");
                $req_verif_exist->execute([$user_email]);
                // si le resultat est supérieur a 0 alors j'envoi un message d'alerte
                if ($req_verif_exist->rowCount() > 0) {
                    echo "<p>" . "L'utilisateur existe déjà'" . "</p>";
                } else {
                    //si l'utilisateur n'est pas déjà enregistrer alors j'enregistre le nouvel utilisateur avec un INSERT INTO
                    $req_insert_user = $bdd->prepare("INSERT INTO users (user_first_name, user_last_name, user_mail, user_pass, date_of_birth) VALUES (?,?,?,?,?)");
                    $req_insert_user->execute([$user_first_name, $user_last_name, $user_email, $user_crypted_pass, $date_birth]);
                }
            } else {
                echo "<p>" . "Les mots de pass ne correspondent pas" . "</p>";
            }
        } else {
            echo "<p>" . "Veuillez entrer un email valide" . "</p>";
        }
    }
}
