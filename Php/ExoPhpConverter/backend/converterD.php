<?php
require("converterDScript.php");
if (isset($_POST['switcher'])) {
    $legend = "Francs-RDC" . " " . "<i class='fa-solid fa-arrow-right'></i>" . " " . "Euros";
} else {
    $legend = "Euros" . " " . "<i class='fa-solid fa-arrow-right'></i>" . " " . "Francs-RDC";
}
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
    if (isset($resultatFRDC)) {
        //on utilise la fonction "number_format($variable, 2)" avec deux argument pour aafficher le résultat en décimal
    ?>
        <h3 class="converter__result"><?= number_format($resultatFRDC, 2) . " " . $deviceInfo; ?></h3>
    <?php
    }
    ?>
</fieldset>