<?php
require("converterAScript.php");
$legend = "Euros" . " " . "<i class='fa-solid fa-arrow-right'></i>" . " " . "Dollars";
$legend2 = "Dollars" . " " . "<i class='fa-solid fa-arrow-right'></i>" . " " . "Euros";
?>
<fieldset class="converter__field">
    <legend class="converter__legend"><?= $legend ?></legend>
    <form method="POST" class="converter__form">
        <div class="converter__subcontainer">
            <input type="number" placeholder="Euros" name="eur">
            <i class='fa-solid fa-arrow-right'></i>
            <input type="submit" value="Convert" name="convert">
        </div>
        <button class="converter__btnSwitcher" name="switcher"><i class='fa-solid fa-arrow-right'></i><i class='fa-solid fa-arrow-left'></i></button>
    </form>
    <?php
    if (isset($resultatUSD)) {
        //on utilise la fonction "number_format($variable, 2)" avec deux argument pour aafficher le résultat en décimal
    ?>
        <h3 class="converter__result"><?= number_format($resultatUSD, 2) . " "; ?>USD</h3>
    <?php
    }
    ?>
</fieldset>