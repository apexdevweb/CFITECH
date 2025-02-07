<?php 
    session_start();
    $nav = "jeuduhasard";
    require "header.php";
?>
<h1>Jeu du Hasard</h1>
<?php 
    //verifie si la session numéro sauvegardé n'existe pas, si pas il le crée
    if(!isset($_SESSION['numeroGagnant'])):
        $_SESSION['numeroGagnant'] = rand(0,10);
    endif;
?>

<?php if(isset($_POST['nombre'])): 
        if($_POST['nombre'] < 0 ||  $_POST['nombre'] > 10 ): ?>
            Erreur ! Vous devez introduire un nombre entre 0 et 10 compris !
        <?php else:
            if ($_POST['nombre'] > $_SESSION['numeroGagnant']): ?>
                Votre nombre est trop grand !
            <?php elseif ($_POST['nombre'] < $_SESSION['numeroGagnant']): ?>
                Votre nombre est trop petit !
            <?php else: ?>
                Vous avez trouvé le numéro gagnant : <?php echo $_SESSION['numeroGagnant'];
                unset($_SESSION['numeroGagnant']);
            endif;
        endif;
    endif;
?>

<form action = "jeuDuHasard" method = "POST">
    <input type = "number" name = "nombre" placeholder= "Entre 0 et 10">
    <button type = "submit">Deviner</button>
</form>



<?php 
require "footer.php";
?>