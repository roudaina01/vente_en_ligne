<?php 
session_start();
require_once "connexiondb.php";
include "nav_panier.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>récuperation mot de passe</title>
    <script src="https://cdn.tailwindcss.com"></script>
     

</head>
<body>
<!--formulaire récup email-->
<div class="container m-[2rem] mt-[12rem] ">
<form method="post" action="" enctype="multipart/form-data" id="emailR">
<div class="row">
        <div class="form-group col-6">
        <input type="email" name ="emailC"  class="form-control" placeholder="@gmail.com" />
            </div>
        </div>
        <br></br>
        <div class="row">
        <div class="form-group col-12">
        <input type="submit" value="Récupérer mot de passe" name ="recupereremail" class="btn btn-outline-secondary"  />
            </div>
        </div>
        
   </form>
<!-----Formulaire recup code------>
   <form method="post" action="" enctype="multipart/form-data" id="codeR" style="display:none">
   <div class="row">
          
            <div class="form-group col-6">
                <label>Code récu</label>
                <input type="number" name="codeE" class="form-control"  required/>
            </div>

        </div>
        <br></br>
        <div class="row">
        <div class="form-group col-12">
        <input type="submit" value="Récupérer mot de passe" name="recuperecode" class="btn btn-outline-danger"  />

            </div>
        </div>
        
   </form>

<!----form Modifier Mot de passe---->

   <form method="post" action="" id="ModifierM" style="display:none">
   <div class="row">
          
   <div class="form-group col-6 -ml-[1rem]">
                <label>Mot de passe</label>
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
            <br><br><br>
            <div class="form-group col-6 -ml-[1rem]">
                <label>confirmer Mot de passe</label>
                <div class="relative">
                <input type="password" name="mdpCC" id="mdp1" class="form-control" required/>
                    <div class="absolute top-1/2 -translate-y-1/2 right-5">
                <i class="fa-solid fa-eye" onclick="
                
                let mdp1=document.getElementById('mdp1');
                if(mdp1.type == 'password'){
                mdp1.type ='text';
                }
                else {
mdp1.type='password';

                }
                
                "></i>
</div>
</div>
            </div>
       
        </div>

        
        <br></br>
        <div class="row">
        <div class="form-group col-12">
        <input type="submit" name="up" value="Modifier" class="btn btn-outline-danger"  />

            </div>
        </div>
        
   </form>
   </div>
   <?php
   /*mt_rand:fonction php utiliser pour donner uen code alé entre 100000 et 999999.*/
   $al=mt_rand(10000,999999);
   if (isset($_POST['recupereremail'])){
       $emailC=$_POST['emailC'];
       /*stocker email saisir dans une session pour utiliser dans la modification du mot de passe*/
       $_SESSION['email']=$emailC;
       $req="SELECT * FROM utilisateur WHERE emailC='$emailC'";
       $res=mysqli_query($conn,$req);
       /** mysqli_num_rows:pour compter nombre des lignes dans résultat du selection ($res)*/
       if(mysqli_num_rows($res) == 0 ){ 
           echo "
           <script>
           alert('email invalid' );
           document.location.href='motdepasseoublie.php';
           </script>
           ";
       }
       else {
           $to=$emailC;
           $subject="code récuperation:";
           $msg=$al;
           $_SESSION['al']=$al;
          mail($to,$subject,$msg); ?>

           
           <script>
           document.getElementById('emailR').style.display="none";
           document.getElementById('codeR').style.display="block";

           </script>
       <?php }
   }
if(isset($_POST['recuperecode'])){
    $codeE=$_POST['codeE'];
    if($codeE == $_SESSION['al']){ ?>
 <script>
 /*document.getElementById:inscruction JavaScript utiliser pour appler un élément html avec son id 
 On utilise JavaScript pour appliqué CSS sur des varaibles avec propriété (style)
 style.display:pour afficher .none :pour masquer l'affichage.block:pour afficher l'element sous la forme d'une bloque */
         document.getElementById('emailR').style.display="none";
           document.getElementById('codeR').style.display="none";
           document.getElementById('ModifierM').style.display="block";

//alert('verifier code');
           
           </script>
    <?php }
    else {
        echo "
        <script>
        alert('code incorrect' );
        </script>
        ";
    }
}

if(isset($_POST['up'])){
    /*récupérer value saisir dans l'input du mot de passe avec methode(post) et avec son name(mdpE)*/
    $mdpC=$_POST['mdpC'];
    /*Crypté mot de passe avec  fonction password_hash**/
    //$mdpECry=password_hash($mdpE,PASSWORD_DEFAULT);
     /*récupérer value saisir dans l'input du confirmer  mot de passe avec methode(post) et avec son name(mdpEC)*/
    $mdpCC=$_POST['mdpCC'];
    $emailEE= $_SESSION['email'];
    /**if :utiliser pour tester si les données saisie dans les deux inputs mot de passe et confirmer ne sont pas correspondant*/
        if($mdpC != $mdpCC){
       
        echo "
        <script>
        alert('ne sont correspondant' );
        </script>
        ";

    }else{
/* code  php pour modifier mot de passse*/
/* UPDATE requette mysqli utiliser pour modifier des données dans la base des données
SET chmap modifier 
WHERE condition du modification*/
$req2="UPDATE utilisateur SET mdpC='$mdpC' WHERE emailC='$emailEE'";
/* mysqli_query:fonction php utiliser pour exécutre une requette dans la base des données*/
$res2=mysqli_query($conn,$req2);

/*document.location.href:inscruction javascript utiliser pour accéder à une autre page */
echo "
<script>
alert('Mot de passe modifiée' );
document.location.href='index.php';
</script>
";
?>
<?php }
}

  ?>
   
</body>
</html>