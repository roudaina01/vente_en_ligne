<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarmaShop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="author" content="">
    <link rel="icon" href="assets/images/logo2.png" class="rounded-full"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="nav.html"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
     <!-- ***** Header Area Start ***** -->
     <header class="header-area header-sticky" >
        <div class="container" >
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav" >
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo2.png" class="w-[5rem] rounded-full">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Accueil</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Produits</a>
                                <ul>
                                <li class="scroll-to-section"><a href="#men">Hommes</a></li>
                                <li class="scroll-to-section"><a href="#women">Femmes</a></li>
                                <li class="scroll-to-section"><a href="#kids">Enfants</a></li>
                                <li class="scroll-to-section"><a href="#explore">Sac</a></li>
    
                            </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#explore">A propos</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Compte</a>
                                <ul>
                                <li class="scroll-to-section"><a href="#inscriptionC" data-bs-toggle="modal">Créer une compte</a></li>
                                <li class="scroll-to-section"><a href="#connexion" data-bs-toggle="modal">Consulter compte</a></li>
                                  
    
                            </ul>
                            </li>
                            <li>  
                                <a class="btn float-end" href="#panier" data-bs-toggle="modal">
                                    <i class="fas fa-shopping-cart text-2xl"></i> 
                                    <?php if(!empty($_SESSION['panier'])){?>

        <span class="badge text-success border border-success rounded-circle" >
        <?php
        $productCount = 0;
       // if (isset($_SESSION['utilisateur'])) {
           // $idUtilisateur = $_SESSION['utilisateur']['idC'];
            $productCount = count($_SESSION['panier']?? []);
        //}
       echo $productCount;
        ?>
        </span>
        <?php } 
        
      //  register_shutdown_function('viderPanierSession');


        ?>

</a>  </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <?php


// Vérifier si la dernière activité est enregistrée
if(isset($_SESSION['last_activity'])) {
    // Vérifier si le temps écoulé depuis la dernière activité est supérieur à 5 minutes
    $inactive_time = time() - $_SESSION['last_activity'];
    if($inactive_time > 1800) { // 300 secondes = 5 minutes
        // Détruire la session si le temps d'inactivité dépasse 5 minutes
        session_unset();     // Détruire toutes les données de session
        session_destroy();   // Détruire la session elle-même
    }
}

// Enregistrer le temps de la dernière activité de l'utilisateur
$_SESSION['last_activity'] = time();
?>

</body>
</html>