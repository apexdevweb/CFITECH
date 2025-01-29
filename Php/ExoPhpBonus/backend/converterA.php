<?php
$legend = "Euros" . " " . "<i class='fa-solid fa-arrow-right'></i>" . " " . "Dollars";
$legend2 = "Dollars" . " " . "<i class='fa-solid fa-arrow-right'></i>" . " " . "Euros";
?>
<fieldset class="converter__field">
    <legend class="converter__legend"><?= $legend ?></legend>
    <form method="POST" class="converter__form">
        <div class="converter__subcontainer">
            <input type="number" placeholder="Euros">
            <i class='fa-solid fa-arrow-right'></i>
            <input type="number" placeholder="Dollars">
            <input type="submit" value="Convert">
        </div>
        <button class="converter__btnSwitcher"><i class='fa-solid fa-arrow-right'></i><i class='fa-solid fa-arrow-left'></i></button>
    </form>
</fieldset>