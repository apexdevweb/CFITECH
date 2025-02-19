<section class="global__content">
    <?php
    // Récupérer la page demandée
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'index';
    }
    switch ($page) {
        case 'index':

            break;
        case 'profil':

            break;
        case 'signup':
            include("components/signupForm.php");
            break;
        case 'login':
            include("components/loginForm.php");
            break;
        default:
            break;
    }
    ?>
</section>