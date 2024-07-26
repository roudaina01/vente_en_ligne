<?php
//session_set_cookie_params(0);
session_start();

include "nav_panier.php";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
<script>
    document.addEventListener('DOMContentLoaded',()=> {
        let url=new URLSearchParams(window.location.search);
        console.log(url);
        let param=url.get('openmodalInsc');
        let paramcnx=url.get('openmodalCnx');
        console.log(param);
        if(param==='true'){
           let modalInstance = new bootstrap.Modal(document.getElementById('inscription'));
        modalInstance.show();
      url.delete('openmodalInsc');

        }
        else if(paramcnx){
            let myModal = new bootstrap.Modal(document.getElementById('passer'));
            myModal.show();
            url.delete('openmodalInsc');

        }
    })
</script>
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
   
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <div style="display:flex;flex-direction:row">

                                <h3 style="color:white">    
                           Nous sommes CARMASHOP </h3>
                           <img src="assets/images/logo2.png" style="width:5%;height:5%;border-radius:50%" class="w-2 rounded-full">

</div>
                            </div>
                            <img src="assets/images/femme5.jpg" alt="" class="h-[52rem]">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Femme</h4>
                                            <span>Meuiller offres femmes</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Femmes</h4>
                                                <p>Découvrez notre collection de vêtements pour femme, 
                                                    alliant élégance intemporelle et tendances actuelles. 
                                                    Trouvez votre style unique parmi nos pièces soigneusement sélectionnées, 
                                                    conçues pour sublimer votre silhouette et votre personnalité.</p>
                                                <div class="main-border-button">
                                                    <a href="#women">Voir plus</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/femme6.jpg" class="h-[25rem]">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Homme</h4>
                                            <span>Meuiller offres hommes</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Hommes</h4>
                                                <p>Découvrez notre gamme de vêtements masculins, conçue pour les hommes qui exigent le meilleur en matière de confort,
                                                     de style et de durabilité. 
                                                     Trouvez votre tenue idéale pour toutes les occasions dans notre sélection minutieusement élaborée.</p>
                                                <div class="main-border-button">
                                                    <a href="#men">Voir plus</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/homme5.avif" class="h-[25rem]">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Enfant</h4>
                                            <span>Meuiller offres enfants</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Enfants</h4>
                                                <p>
                                                Découvrez notre gamme de vêtements pour enfants, 
                                                alliant praticité et style.Notre sélection propose des pièces colorées, durables et confortables pour que vos enfants puissent jouer,
                                                 grandir et s'exprimer en toute liberté.
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="#kids">Voir plus</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/enfant4.jpg" class="h-[25rem]">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Sac</h4>
                                            <span>Meuiller offres femmes </span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Sac</h4>
                                                <p> Découvrez notre gamme de sacs pour femme,
                                                 conçus pour allier style et praticité au quotidien.
                                                  Des sacs fourre-tout spacieux aux pochettes élégantes, chaque pièce est fabriquée avec des matériaux de qualité et une attention aux détails,
                                                 pour que vous puissiez afficher votre style avec confiance, où que vous alliez.</p>
                                                <div class="main-border-button">
                                                    <a href="#explore">Voirs Plus</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/produits/bagg.jpg" class="h-[25rem]">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h3>Dernières nouveautés hommes</h3>
                        <span>Les détails des détails sont ce qui différencie CARMASHOP des autres thèmes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=1";
                                            $res=mysqli_query($conn,$req);
                                            $produit1=$res->fetch_assoc();
                                            
                                            ?>
                                            <li><a disabled><i class="fa fa-star" onclick="
                                            let id=1;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>
                                            <li><a href="single-product.php?idPproduit=1"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit1['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                    <h4><?php echo  $produit1['nomproduit']?></h4>
                                    <span>$<?php echo  $produit1['prixproduit']?>,000</span>
                                    <ul class="stars">
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <?php 
                                              require_once "connexiondb.php";
                                              $req="SELECT * FROM `produit` WHERE idproduit=3";
                                              $res=mysqli_query($conn,$req);
                                              $produit3=$res->fetch_assoc();
                                              
                                              ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=3;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>                                      
                                            <li><a href="single-product.php?idPproduit=3"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit3['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit3['nomproduit']?></h4>
                                <span>$<?php echo  $produit3['prixproduit']?>,000</span>
                                    <ul class="stars">
                                   
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=2";
                                            $res=mysqli_query($conn,$req);
                                            $produit2=$res->fetch_assoc();
                                            
                                            ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=2;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>                                            
                                            <li><a href="single-product.php?idPproduit=2"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit2['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit2['nomproduit']?></h4>
                                <span>$<?php echo  $produit2['prixproduit']?>,000</span>
                                    <ul class="stars">
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=4";
                                            $res=mysqli_query($conn,$req);
                                            $produit4=$res->fetch_assoc();
                                            
                                            ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=4;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>                                           
                                             <li><a href="single-product.php?idPproduit=4"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit4['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit4['nomproduit']?></h4>
                                <span>$<?php echo  $produit4['prixproduit']?>,000</span>
                                    <ul class="stars">
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h3>Dernières nouveautés femmes</h3>
                        <span>Les détails des détails sont ce qui différencie CARMASHOP des autres thèmes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=5";
                                            $res=mysqli_query($conn,$req);
                                            $produit5=$res->fetch_assoc();
                                            
                                            ?> 
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=5;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>                                            
                                            <li><a href="single-product.php?idPproduit=5"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit5['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit5['nomproduit']?></h4>
                                <span>$<?php echo  $produit5['prixproduit']?>,000</span>
                                    <ul class="stars">
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=6";
                                            $res=mysqli_query($conn,$req);
                                            $produit6=$res->fetch_assoc();
                                            
                                            ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=6;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>                                           
                                             <li><a href="single-product.php?idPproduit=6"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit6['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit6['nomproduit']?></h4>
                                    <span>$<?php echo  $produit6['prixproduit']?>,000</span>
                                    <ul class="stars">
                                    
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=7";
                                            $res=mysqli_query($conn,$req);
                                            $produit7=$res->fetch_assoc();
                                            
                                            ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=7;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>                                            
                                            <li><a href="single-product.php?idPproduit=7"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit7['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit7['nomproduit']?></h4>
                                    <span>$<?php echo  $produit7['prixproduit']?>,000</span>                                    <ul class="stars">
                                  
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=8";
                                            $res=mysqli_query($conn,$req);
                                            $produit8=$res->fetch_assoc();
                                            
                                            ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=8;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>                                            
                                            <li><a href="single-product.php?idPproduit=8"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit8['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit8['nomproduit']?></h4>
                                    <span>$<?php echo  $produit8['prixproduit']?>,000</span>
                                    <ul class="stars">
                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                    <h3>Dernières nouveautés enfants</h3>
                    <span>Les détails des détails sont ce qui différencie CARMASHOP des autres thèmes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=9";
                                            $res=mysqli_query($conn,$req);
                                            $produit9=$res->fetch_assoc();
                                            
                                            ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=9;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>                                            
                                            <li><a href="single-product.php?idPproduit=9"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit9['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit9['nomproduit']?></h4>
                                    <span>$<?php echo  $produit9['prixproduit']?>,000</span>
                                    <ul class="stars">
                                     
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=12";
                                            $res=mysqli_query($conn,$req);
                                            $produit12=$res->fetch_assoc();
                                            
                                            ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=12;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>                                            
                                            <li><a href="single-product.php?idPproduit=12"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit12['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit12['nomproduit']?></h4>
                                    <span>$<?php echo  $produit12['prixproduit']?>,000</span>
                                    <ul class="stars">
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=10";
                                            $res=mysqli_query($conn,$req);
                                            $produit10=$res->fetch_assoc();
                                            
                                            ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=10;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>                                           
                                             <li><a href="single-product.php?idPproduit=10"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit10['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit10['nomproduit']?></h4>
                                    <span>$<?php echo  $produit10['prixproduit']?>,000</span>                                    <ul class="stars">
                                  
                                    <ul class="stars">
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=11";
                                            $res=mysqli_query($conn,$req);
                                            $produit11=$res->fetch_assoc();
                                            
                                            ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=11;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>                                            
                                            <li><a href="single-product.php?idPproduit=11"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit11['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit11['nomproduit']?></h4>
                                    <span>$<?php echo  $produit11['prixproduit']?>,000</span>                                    <ul class="stars">
                                  
                                    <ul class="stars">
                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->
    <!-- ***** sacs Area Starts ***** -->
    <div id="sacsss" style="display:none">
    <section class="section" id="kids"  >
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                    <h3>Dernières nouveautés sacs</h3>
                    <span>Les détails des détails sont ce qui différencie CARMASHOP des autres thèmes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=13";
                                            $res=mysqli_query($conn,$req);
                                            $produit13=$res->fetch_assoc();
                                            
                                            ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=13;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>                                             
                                            <li><a href="single-product.php?idPproduit=13"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit13['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit13['nomproduit']?></h4>
                                    <span>$<?php echo  $produit13['prixproduit']?>,000</span>                                    <ul class="stars">
                                  
                                    <ul class="stars">
                                     
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=15";
                                            $res=mysqli_query($conn,$req);
                                            $produit15=$res->fetch_assoc();
                                            
                                            ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=15;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li> 

                                            <li><a href="single-product.php?idPproduit=15"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit15['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit15['nomproduit']?></h4>
                                    <span>$<?php echo  $produit15['prixproduit']?>,000</span>                                    <ul class="stars">
                                  
                                    <ul class="stars">
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=14";
                                            $res=mysqli_query($conn,$req);
                                            $produit14=$res->fetch_assoc();
                                            
                                            ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=14;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li> 
                                            <li><a href="single-product.php?idPproduit=14"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit14['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit14['nomproduit']?></h4>
                                    <span>$<?php echo  $produit14['prixproduit']?>,000</span>
                                    <ul class="stars">
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                        <?php 
                                            require_once "connexiondb.php";
                                            $req="SELECT * FROM `produit` WHERE idproduit=16";
                                            $res=mysqli_query($conn,$req);
                                            $produit16=$res->fetch_assoc();
                                            
                                            ?>
                                        <li><a disabled><i class="fa fa-star" onclick="
                                            let id=16;
                                            $.ajax({
                                                type:'GET',
                                                url:'favoris.php',
                                                data:{
                                                'id':id
                                                },
                                                success:function(response){
                                               alert('ajouter comme favoris');
                                                }
                                            })
                                            "></i></a></li>                                             
                                            <li><a href="single-product.php?idPproduit=16"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/produits/<?php echo  $produit16['imageproduit']?>" alt="">
                                </div>
                                <div class="down-content">
                                <h4><?php echo  $produit16['nomproduit']?></h4>
                                    <span>$<?php echo  $produit16['prixproduit']?>,000</span>  
                                    <ul class="stars">
                                    
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <!-- ***** sacs Area Ends ***** -->
    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Découvrez nos produits</h2>
                        <span>Explorez la mode à son meilleur avec CARMASHOP – Votre destination incontournable pour des vêtements tendance et stylés. </span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Découvrez une collection soigneusement sélectionnée de tenues modernes, des essentiels intemporels aux dernières tendances. Notre boutique en ligne offre une expérience de shopping exceptionnelle, avec des vêtements de qualité, des designs uniques et des prix irrésistibles. </p>
                        </div>
                        <p>Vous recherchiez des pièces décontractées pour le quotidien, des tenues élégantes pour une soirée spéciale, ou des accessoires pour parfaire votre look, CARMASHOP vous propose un univers de style à portée de clic. </p>
                       
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Sacs</h4>
                                    <span>Dernière collection</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="assets/produits/bag.jpg" class="h-[16rem]" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="assets/produits/bag2.jpg"  class="h-[16rem]" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Different Types</h4>
                                    <a onclick="sacs()"><span>Plus des chois</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
  
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>Le 10 permiés personnes inscrit il vont avoir 30% du reduction sur une commande </h2>
                        <span>Cette réduction sera applicable du 15 mai au 31 mai </span>
                    </div>
                    <form method="post" action="" >
                        <div class="row">
                          <div class="col-lg-5">
                          
                            <fieldset>
                              <input name="nomR" type="text" id="nomR" placeholder="Votre nom" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="emailR" type="email" id="emailR" pattern="[^ @]*@[^ @]*" placeholder="Votre adresse email" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                            <fieldset>
                              <button type="button" onclick="reduction()" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Store Location:<br><span>Congo Kinshasa</span></li>
                                <li>Phone:<br><span>+243 897 652 907</span></li>
                                <li>Office Location:<br><span>Congo Kinshasa</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM <br>7/7 jours</span></li>
                                <li>Email:<br><span>carmelntumba11@gmail.com</span></li>
                                <li>Social Media:<br><span><a href="https://www.facebook.com/profile.php?id=100091455562416" target="_blank">Facebook</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
    
    <?php
    include "footer.html";
    ?>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
    <!-- Modal Afficher panier-->
<?php 
 if (isset($_POST['vider'])) {
    $_SESSION['panier']= []; ?>
   
<script> 

document.location.href='index.php';

</script>
    <?php 
 }
    $panier = $_SESSION['panier']?? [];

    if(!empty($panier)){?>
<div class="modal fade" id="panier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content" style="width:700px;margin-left:-150px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php   
        $productCount = 0;
       // if (isset($_SESSION['utilisateur'])) {
           // $idUtilisateur = $_SESSION['utilisateur']['idC'];
            $productCount = count($_SESSION['panier']?? []);
        //}
       echo $productCount." Article(s)"?></h5>
       <h4 id="tt"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <?php 
     require_once "connexiondb.php";
     $panier = $_SESSION['panier']?? [];
       if (!empty($panier)) {
        $idProduits = array_keys($panier);
        $idProduits = implode(',', $idProduits);
//echo $idProduits;
$req1 = "SELECT * FROM produit WHERE idproduit IN ($idProduits)";
$res1 = $conn->query($req1);

if ($res1) {
    // Conversion des résultats en tableau associatif
    $produits = [];
    while ($row = $res1->fetch_assoc()) {
        $produits[] = $row;
    }
} else {
    // Gérer les erreurs d'exécution de la requête
    echo "Erreur lors de l'exécution de la requête : " . $conn->error;
}
 
     ?>
      <table class="">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Libelle</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Prix</th>
                    </tr>
                    </thead>
                    <?php
                    $total = 0;
                    foreach ($produits as $produit) {
                        $idProduit = $produit['idproduit'];
                        $totalProduit = $produit['prixproduit'] * $panier[$idProduit];
                        $total += $totalProduit;
                        ?>
                        <tr>
                            <td><?php echo $produit['idproduit'] ?></td>
                            <td><img width="80px" src="assets/produits/<?php echo $produit['imageproduit'] ?>" alt=""></td>
                            <td><?php echo $produit['nomproduit'] ?></td>
                            <td> 
                            <?php $qty = $_SESSION['panier'][$idProduit] ?? 0;?>    
                            <form method="post"  class="counter d-flex" action="ajouter_panier.php">
            <input type="hidden" name="id" value="<?php echo $idProduit ?>">
            <input class="form-control"  style="width:60px" value="<?php echo $qty ?>" type="number" name="qty" id="qty" max="5">

            <button class="btn btn-secondary btn-sm" type="submit" name="ajouter">
               
            <?=     $button = '<i class="fa fa-light fa-edit"></i>';
 ?>
            </button>
            <?php
            if ($qty != 0) {
                ?>
                <button formaction="supprimer_panier.php" class="btn btn-sm btn-secondary mx-1 " type="submit"
                        name="supprimer">
                    <i class="fa-solid fa-trash"></i>
                </button>
                <?php
            }
            ?>
        </form></td>
                            <td  width="150px"> <?php echo "$".$totalProduit.", 000" ?> </td>
                        </tr>

                        <?php
                    }
                    ?>
                    <tfoot>
                    <tr>
                    <td  colspan="4" align="right"><strong>Prix du livraison:</strong></td>
                        <td  ><?php echo "$7, 000 "; ?></td>
                    </tr>
                 
                    <tr>
                    <td colspan="4" align="right"><strong>Total Prix:</strong></td>
                    <td><?php
                    $totalPrix=$total + 7;
                    echo "$".$totalPrix.",000";
                    ?></td>
                    </tr>
                   
                    <tr>
                        <td colspan="8" align="right">
                            <form method="post">
        <button  class="btn btn-secondary"><a href="#passer" data-bs-toggle="modal" style="color:white">Confirmer panier</a></button>
                                <input onclick="return confirm('Voulez vous vraiment vider le panier ?')" type="submit"
                                       class="btn btn-danger" name="vider" value="Vider le panier">
                            </form>
                        </td>
                    </tr>
                    </tfoot>
                </table>

                <?php  } ?>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!-- Modal Connexion -->
<div class="modal fade" id="passer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  
    </div>
      <div class="modal-body" style="display:flex;flex-direction:column">
      <div style="width:350px">
      Commander en tant que nouveau client.
Commander plus rapidement.
      </div>
     

      <form method="post" action="seconnecter.php" enctype="multipart/form-data" style="">
   <div class="row">
          
            <div class="form-group col-12">
                <label>Email *</label>
                <input type="email" name="emailC" class="form-control"  required/>
            </div>
            <div class="form-group col-12">
                <label>Mot de passe *</label>
                <div class="relative">
                <input type="password" name="mdpC" id="mdp" class="form-control" required/>
                    <div class="absolute top-1/2 -translate-y-1/2 right-5">
                <i class="fa-solid fa-eye" onclick="
                
                let mdp=document.getElementById('mdp');
                if(mdp.type == 'password'){
                mdp.type ='text';
                }
                else {
mdp.type='password';

                }
                
                
                "></i>
</div>
</div>
            </div>
       
        </div>
        <br></br>
        <div class="row">
        <div class="form-group col-12">
        <input type="submit" value="Se connecter" class="btn btn-outline-danger"  />

            </div>
        </div>
        
   </form>
      </div>
      <div class="modal-footer">
        <a href="motdepasseoublie.php">Mot de passe oublié</a>
      </div>
    </div>
  </div>
</div>
<!-----------Modale Inscription------------->
<div class="modal fade" id="inscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="inscription.php" enctype="multipart/form-data">
   <div class="row">           
            <div class="form-group col-6">
                <label>Nom prénom</label>
                <input type="text" name="nomprenomC" id="nomE" class="form-control" required/>
            </div>
          
            <div class="form-group col-6">
                <label>Numéro Téléphone</label>
                <input type="text" name="telephoneC" id="phone" class="form-control" required/>
            </div>
            <div class="form-group col-6">
                <label>Adresse</label>
                <input type="text" name="adresseC" id="nomE" class="form-control" required/>
            </div>
            <div class="form-group col-6">
                <label>Ville</label>
                <input type="text" name="villeC" id="posteE" class="form-control" required/>
            </div>
            <div class="form-group col-6">
                <label>Code postal</label>
                <input type="text" name="codePostalC" id="posteE" class="form-control" required/>
            </div>
            <div class="form-group col-6">
                <label>Email</label>
                <input type="email" name="emailC" id="emailE" class="form-control" required/>
            </div>
            <div class="form-group col-6">
                <label>Mot de passe</label>
                <div class="relative">
                <input type="password" name="mdpC" id="mdpE" class="form-control" required/>
                    <div class="absolute top-1/2 -translate-y-1/2 right-5">
                <i class="fa-solid fa-eye" onclick="
                
                let mdpE=document.getElementById('mdpE');
                if(mdpE.type == 'password'){
                mdpE.type ='text';
                }
                else {
mdpE.type='password';

                }
                
                
                "></i>
</div>
</div>
            </div>
            <div class="form-group col-6">
                <label>Confirmer Mot de passe</label>
                <div class="relative">
                <input type="password" name="mmdpCc" id="mdpEC" class="form-control" required/>
                    <div class="absolute top-1/2 -translate-y-1/2 right-5">
                <i class="fa-solid fa-eye" onclick="
                
                let mdpEC=document.getElementById('mdpEC');
                if(mdpEC.type == 'password'){
                mdpEC.type ='text';
                }
                else {
mdpEC.type='password';

                }
                
                
                "></i>
</div>
</div>
            </div>
       
        </div>
        <br></br>
        <div class="row">
        <div class="form-group col-12">
        <input type="submit" value="S'inscrire" id="inscrire" class="btn btn-outline-danger"  />

            </div>
        </div>
        
   </form>
      </div>
      <div class="modal-footer">
      <button type="" class="btn btn-outline-secondary" href="#passer" data-bs-toggle="modal" >Déja inscrit</button>
      </div>
    </div>
  </div>
</div>
<?php

if(isset( $_SESSION['erreur1'])){
    $erreur1=$_SESSION['erreur1'];
    unset($_SESSION['erreur1']);
    echo "
    <script>
    alert('$erreur1');
    </script>
    ";
}
?>
<script>
    function sacs(){
        
        /*document.getElementsByTagName('section')[3].style.display='block';
 let section= document.getElementsByTagName('section');
document.location.href='#'+document.getElementsByTagName('section')[3].id;
document.querySelectorAll('#kids')[1].style.display="block";  
document.location.href="#"+document.querySelectorAll('#kids')[1].id;
*/
document.getElementById('sacsss').style.display='block';
setTimeout(() => {
    document.location.href='#sacsss'; 
}, 1000);

}

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

    function reduction(){
    let emailR=document.querySelector('#emailR').value;
    let nomR=document.querySelector('#nomR').value;
       // e.preventDefault();
   // console.log(nomR+emailR);
    $.ajax({
        type:"POST",
        url:"reduction.php",
        data:{
            'emailR':emailR,
            'nomR':nomR,
        },
        dataType: 'json', 
        success:function(response){
            alert(response.msg); 
            document.location.href='index.php';
        }

    })
    }
 
</script>
<!-- Modal Connexion -->
<div class="modal fade" id="connexion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="display:flex;flex-direction:column">
      <div style="width:350px">
    Consulter votre compte,modifier vos informations
      </div>
     

      <form method="post" action="" enctype="multipart/form-data" style="">
   <div class="row">
          
            <div class="form-group col-12">
                <label>Email *</label>
                <input type="email" name="emailC" class="form-control"  required/>
            </div>
            <div class="form-group col-12">
                <label>Mot de passe *</label>
                <div class="relative">
                <input type="password" name="mdpC" id="mdp" class="form-control" required/>
                    <div class="absolute top-1/2 -translate-y-1/2 right-5">
                <i class="fa-solid fa-eye" onclick="
                
                let mdp=document.getElementById('mdp');
                if(mdp.type == 'password'){
                mdp.type ='text';
                }
                else {
mdp.type='password';

                }
                
                
                "></i>
</div>
</div>
            </div>
       
        </div>
        <br></br>
        <div class="row">
        <div class="form-group col-12">
        <input type="submit" value="Se connecter" name="profil" class="btn btn-outline-danger"  />

            </div>
        </div>
        
   </form>
      </div>
      <div class="modal-footer">
        <a href="motdepasseoublie.php">Mot de passe oublié</a>
        <button type="button" class="btn btn-outline-secondary" href="#inscription" data-bs-toggle="modal" >S'inscrire</button>
      </div>
    </div>
  </div>
</div>
  </body>
  <?php 
  require_once "connexiondb.php";

  if(isset($_POST['profil'])){
    $emailC=$_POST['emailC'];
    $mdpC=$_POST['mdpC'];
    $reqC="SELECT * FROM `utilisateur` WHERE emailC='$emailC' AND mdpC='$mdpC'";
    $resC=mysqli_query($conn,$reqC);

    if($resC->num_rows == 0){ ?>
<script>
    alert("email ou mot de passse incorrect");
</script>
    <?php }
    else  { 
        $user=$resC->fetch_assoc();
        $_SESSION['user']=$user;
   ?>
      <script>
document.location.href='profil.php';
    </script>
    <?php }
  }
  ?>
  <!-----------Modale Inscription------------->
<div class="modal fade" id="inscriptionC" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="inscriptionC.php" enctype="multipart/form-data">
   <div class="row">           
            <div class="form-group col-6">
                <label>Nom prénom</label>
                <input type="text" name="nomprenomC" id="nomE" class="form-control" required/>
            </div>
          
            <div class="form-group col-6">
                <label>Numéro Téléphone</label>
                <input type="text" name="telephoneC" id="phone" class="form-control" required/>
            </div>
            <div class="form-group col-6">
                <label>Adresse</label>
                <input type="text" name="adresseC" id="nomE" class="form-control" required/>
            </div>
            <div class="form-group col-6">
                <label>Ville</label>
                <input type="text" name="villeC" id="posteE" class="form-control" required/>
            </div>
            <div class="form-group col-6">
                <label>Code postal</label>
                <input type="text" name="codePostalC" id="posteE" class="form-control" required/>
            </div>
            <div class="form-group col-6">
                <label>Email</label>
                <input type="email" name="emailC" id="emailE" class="form-control" required/>
            </div>
            <div class="form-group col-6">
                <label>Mot de passe</label>
                <div class="relative">
                <input type="password" name="mdpC" id="mdpE" class="form-control" required/>
                    <div class="absolute top-1/2 -translate-y-1/2 right-5">
                <i class="fa-solid fa-eye" onclick="
                
                let mdpE=document.getElementById('mdpE');
                if(mdpE.type == 'password'){
                mdpE.type ='text';
                }
                else {
mdpE.type='password';

                }
                
                
                "></i>
</div>
</div>
            </div>
            <div class="form-group col-6">
                <label>Confirmer Mot de passe</label>
                <div class="relative">
                <input type="password" name="mmdpCc" id="mdpEC" class="form-control" required/>
                    <div class="absolute top-1/2 -translate-y-1/2 right-5">
                <i class="fa-solid fa-eye" onclick="
                
                let mdpEC=document.getElementById('mdpEC');
                if(mdpEC.type == 'password'){
                mdpEC.type ='text';
                }
                else {
mdpEC.type='password';

                }
                
                
                "></i>
</div>
</div>
            </div>
       
        </div>
        <br></br>
        <div class="row">
        <div class="form-group col-12">
        <input type="submit" value="S'inscrire" id="inscrire" class="btn btn-outline-danger"  />

            </div>
        </div>
        
   </form>
      </div>
      <div class="modal-footer">
      <button type="" class="btn btn-outline-secondary" href="#passer" data-bs-toggle="modal" >Déja inscrit</button>
      </div>
    </div>
  </div>
</div>
</html>