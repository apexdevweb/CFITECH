<br>
<hr class="main__hr1">
<hr class="main__hr2">
<hr class="main__hr3">
<div class="wrapper__main">
    <section class="section__main">
        <?php
        // Récupérer la page demandée
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        // Charge le bon contenu
        if (isset($_SESSION['authtentification'])) {
            switch ($page) {
                case 'converterA':
                    include("backend/converterA.php");
                    break;
                case 'converterB':
                    include 'backend/converterB.php';
                    break;
                case 'converterC':
                    include 'backend/converterC.php';
                    break;
                case 'converterD':
                    include 'backend/converterD.php';
                    break;
                case 'converterE':
                    include 'backend/converterE.php';
                    break;
                case 'converterF':
                    include 'backend/converterF.php';
                    break;
                default:
                    echo "<h2>Bienvenue sur Easy converter ici vous pouvez choisir une devise à convertir</h2>";
                    echo "<p>Veuillez sélectionner une conversion.</p>";
                    break;
            }
        }
        ?>
</div>
</section>