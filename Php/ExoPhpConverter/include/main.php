<hr class="main__hr1">
<hr class="main__hr2">
<hr class="main__hr3">
<div class="wrapper__main">
    <section class="section__main">
        <?php
        // Récupérer la page demandée
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 'home';
        }
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
                    echo "<h5 class='default__h5'>" . "Ici vous pouvez choisir une devise à convertir" . "</h5>";
                    echo "<p class='defautl__p '>" . "Veuillez sélectionner une conversion." . "</p>";
                    break;
            }
        } else {
            echo "<p class='info__txt'>" . "<span>B</span>ienvenue sur <strong>Easy Converter</strong> qui a été développé en PHP afin de faciliter les conversions en seulement quelques clics, et automatiquement enregistrer vos conversions sur votre profil, <strong>veuillez vous connecter</strong> pour pouvoir en faire usage." . "</p>";
        }
        ?>
    </section>
</div>
<hr class="main__hr3">
<hr class="main__hr2">
<hr class="main__hr1">