<?php
    session_start();
    $title = "Contact";
    $nav = "contact";
    require "header.php";
?>
<h1>Debug</h1>
<p><?php var_dump($_SESSION);?></p>
<h1>Nous contacter</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat sed dolores consequuntur nam delectus animi, suscipit earum veritatis. Ea accusantium quaerat atque praesentium nesciunt, delectus sed. Provident ut et placeat.</p>

<?php
    require "footer.php";
?>