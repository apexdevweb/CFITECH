<?php
session_start();
class User
{
    private int $user_id;
    private string $nom;
    private string $pass;
    /*constructor*/
    public function __construct(int $usrId, string $leNom, string $lePass)
    {
        $this->user_id = $usrId;
        $this->nom = $leNom;
        $this->pass = $lePass;
    }
    /*getters*/
    public function getUserId(): int
    {
        return $this->user_id;
    }
    public function getName(): string
    {
        return $this->nom;
    }
    public function getPass(): string
    {
        return $this->pass;
    }
    /*setters*/
    public function setUserId(int $usrId)
    {
        $this->user_id = $usrId;
    }
    public function setName(string $leNom)
    {
        $this->nom = $leNom;
    }
    public function setPass(string $lePass)
    {
        $this->pass = $lePass;
    }
}
//on verifie que la method est bien définie sur POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $user_id = random_int(1, 10);
    $user_name = htmlspecialchars(strip_tags($_POST["user_name"]));
    $user_pass = password_hash($_POST["user_pass"], PASSWORD_ARGON2ID);

    if (isset($_POST["user_log"])) {
        if (!empty($_POST["user_name"]) && !empty($_POST["user_pass"])) {

            $utilisateur = new user($user_id, $user_name, $user_pass);
            //on stock tout dans une $_SESSION[] sous form de tableaux 
            $_SESSION['data'] = [
                "id" => $utilisateur->getUserId(),
                "pseudo" => $utilisateur->getName(),
                "pass" => $utilisateur->getPass()
            ];
            // pour l'identification
            $_SESSION['authtentification'] = true;
            //on redirige l'utilisateur
            header("Location:../index.php");
            exit;
        }
    } else {
        echo "<h3>" . "Veuillez remplir tous les champs" . "</h3>";
    }
}
