<?php 
    session_start();
    $title = "Dashboard";
    $nav = "dashboard";
    require "header.php";
    if(!is_connected()){
        header('Location: login.php');
    }
?>
<h1>Bienvenu <?php echo $_SESSION['pseudo']; ?> dans votre Dashboard</h1>
<p>Voici votre profil...</p>
<?php 
require "footer.php";
?>