
<?php 
session_start();
include "nav_panier.php";


$idPproduit=$_GET['idPproduit'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop - Product Detail Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-carmashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
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
    
    
    <!-- ***** Header Area Start ***** -->
   
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="p"  id="top">
        <div class="container" >
            <div class="row">
     
                    <div class="inner-content" >
                    <video autoplay muted loop id="background-video" style="margin:0 auto;" >
            <source src="assets/vedios/subhome-xmedia-15_0.mp4" type="video/mp4" >
        </video>
                    </div>
              
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
<?php 

require_once "connexiondb.php";
$req="SELECT * FROM `produit` WHERE idProduit='$idPproduit'";
$res=mysqli_query($conn,$req);
$produit=$res->fetch_assoc();
?>

    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="" style=" border-radius: 4px;
    color: #c4c4c4;
    box-shadow: 1px 1px 5px rgba(0,0,0,0.1),
     -1px -1px 5px 5px rgba(0,0,0,0.1);
    transition: all 0.1s; width:40%;margin-left:200px">
                    <img src="assets/produits/<?php echo $produit['imageproduit'] ;?>" alt="">
                    <!--img src="assets/images/single-product-02.jpg" alt=""-->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content" style="margin-left:-150px">
                    <h4><?php echo $produit['nomproduit']?></h4>
                    <span class="price">$<?php echo $produit['prixproduit']." 000";?></span>
                 
                    <span>
                        <?php echo $produit['descproduit'];?>
                    </span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i><p>Nous travaillons avec des programmes de surveillance pour garantir le respect de nos normes sociales, environnementales, de santé et de sécurité pour nos produits.</p>
                    </div>
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>Choissez quantité</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <!--form method="post" id="form1">
                                <input type="button" value="-" class="minus" >
                                <input type="number" step="1" min="1" max="" id="qt" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" >
                                <input type="button" value="+" class="plus">
                                </form-->
                                <?php 
                                
                                include "counter.php";
                                ?>

 </div>
                        </div>
                    </div>
                    <div class="total">

                        <h4 id="tt" style="color:black">
                     </h4>
                        <!---div class="main-border-button" id="total"><a href="#">Add To Cart</a></div-->
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
   
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
    <script src="assets/js/quantity.js"></script>
    
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
<?php }
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
        <button type="button" class="btn btn-outline-secondary" href="#inscription" data-bs-toggle="modal" >S'inscrire</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Inscription-->
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
                <input type="text" name="nomprenomC" id="nomE" class="form-control" />
            </div>
          
            <div class="form-group col-6">
                <label>Numéro Téléphone</label>
                <input type="text" name="telephoneC" id="phone" class="form-control" />
            </div>
            <div class="form-group col-6">
                <label>Adresse</label>
                <input type="text" name="adresseC" id="nomE" class="form-control" />
            </div>
            <div class="form-group col-6">
                <label>Ville</label>
                <input type="text" name="villeC" id="posteE" class="form-control" />
            </div>
            <div class="form-group col-6">
                <label>Code postal</label>
                <input type="text" name="codePostalC" id="posteE" class="form-control" />
            </div>
            <div class="form-group col-6">
                <label>Email</label>
                <input type="email" name="emailC" id="emailE" class="form-control"/>
            </div>
            <div class="form-group col-6">
                <label>Mot de passe</label>
                <div class="relative">
                <input type="password" name="mdpC" id="mdpE" class="form-control" />
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
                <input type="password" name="mmdpCc" id="mdpEC" class="form-control" />
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
        <button type="button" class="btn btn-outline-secondary">Déja inscrit</button>
      </div>
    </div>
  </div>
</div>

  </body>

</html>
