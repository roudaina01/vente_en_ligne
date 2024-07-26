<?php 

session_start();
require_once "connexiondb.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARMASHOP</title>
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
<body >
<?php 
  if (isset($_GET['success'])) {
    $totalt=$_GET['totalt'];
  

    ?>
    <div style="display:flex;justify-content:center;margin-top:50px">
    <h1>Félécitation ! </h1>
    <div class="alert alert-success"  role="alert">
        Votre commande avec le montant <strong>$ <?php echo $totalt;?></strong> ,000  est bien confirmée.
    </div>
    <hr>
  </div>
    <?php


}
else {

$emailC=$_POST['emailC'];
$mdpC=$_POST['mdpC'];

$req="SELECT * FROM `utilisateur` WHERE emailC='$emailC' AND $mdpC='$mdpC' ";
//mysqli_query:pour exécuter requette à l'intérieur du base des données 
$res=mysqli_query($conn,$req);
if($res->num_rows <= 0 ){
    echo "donner incorrect";
    $_SESSION['erreur1']="Erreur!! Email ou mot de passe incorrect";
  // header("location:index.php");
}

else {

    $utilisateur=$res->fetch_assoc();
$_SESSION['utilisateur']=$utilisateur;
$idUtilisateur=$_SESSION['utilisateur']['idC'];
$numl=$_SESSION['utilisateur']['telephoneC']; 
//echo $idUtilisateur;
//echo $numl;
    $panier = $_SESSION['panier'] ?? [];

    if (!empty($panier)) {
        if (!empty($panier)) {
            $idProduits = array_keys($panier);
            $idProduits = implode(',', $idProduits);

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
}    

$sqlStateLigneCommande = $conn->prepare('INSERT INTO `ligne_commande` (id_produit, id_commande, prix, quantite, total, photoprott, nomprott, statut) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
$sqlStateLigneCommande->bind_param('ssssssss', $idProduit, $idCommande, $prix, $qty, $totalt, $photoprott, $nomprott, $statut);

        $totalt = 0;
        $prixProduits = [];
        foreach ($produits as $produit) {
            $idProduit = $produit['idproduit'];
            $qty = $panier[$idProduit];
            $prix = $produit['prixproduit'];
            $req="SELECT * FROM `utilisateur` WHERE idC='$idUtilisateur'";
            $res=mysqli_query($conn,$req);
            $user=$res->fetch_assoc();
           $photoprott=$produit['imageproduit'];
           $nomprott=$produit['nomproduit'];
          $statut="En attente";
          $tva=7;
          $totalt=$qty * $prix+$tva;

           //$total += $qty * $prix;
            $prixProduits[$idProduit] = [
                'id' => $idProduit,
                'prix' => $prix,
                'totalt' => $totalt,
                'qty' => $qty,
                'photoprott'=>$photoprott,
                'nomprott'=>$nomprott,
                'statut'=>$statut
            ];
        }

        $sqlStateCommande = $conn->prepare('INSERT INTO `commande`(`icCom`, `idC`, `total`, `date_creation`, `quantite`, `idproduit`, `numl`, `statut`) VALUES(?,?,?,?,?,?,?,?)');
        $date=date('Y-m-d h:i:sa');
        $sqlStateCommande->bind_param('ssssssss', $icCom, $idUtilisateur, $totalt, $date, $qty, $idProduit, $numl, $statut);
$sqlStateCommande->execute();
$idCommande = $conn->insert_id;

        $args = [];
        foreach ($prixProduits as $produit) {
            $id = $produit['id'];
           
           /* $to="roudainatradroudaina@gmail.com";
            $subject="Vous une commande à livrer : ";
            $message="Numéro du commande = ".$idCommande;
            mail($to,$subject,$message);*/
        }
       // $sql = substr($sql, 0, -1);
      //  $sqlState =$conn->prepare($sql);
        foreach ($prixProduits as $produit) {
            $idProduit = $produit['id'];
            $qty = $produit['qty'];
            $prix = $produit['prix'];
            $photoprott = $produit['photoprott'];
            $nomprott = $produit['nomprott'];
            $statut = $produit['statut'];
        
            // Exécutez la requête préparée pour insérer les données de la ligne de commande
            $inserted =$sqlStateLigneCommande->execute();
            $_SESSION['commande']="Une nouvelle commande ";
        }
            if ($inserted) {
                $_SESSION['panier']= [];
              //  header('location: seconnecter?success=true&totalt=' . $totalt);
            // Préparer la requête avec un paramètre pour l'id_commande
$sql = "SELECT ligne_commande.*, produit.nomproduit, produit.imageproduit, produit.imageHeberger FROM ligne_commande
INNER JOIN produit ON ligne_commande.id_produit = produit.idproduit
WHERE id_commande = ?";
$stmt = $conn->prepare($sql);

// Vérifier si la préparation a échoué
if (!$stmt) {
die("Erreur de préparation de la requête: " . $conn->error);
}

// Liaison du paramètre et exécution de la requête
 /* valeur de l'id_commande */;
$stmt->bind_param("i", $idCommande); // "i" pour un entier
$stmt->execute();

// Récupération des résultats
$result = $stmt->get_result();

            
            // Récupérez le résultat de la requête
            
            // Initialisez un tableau pour stocker les lignes de commande
            $lignesCommandes = [];
            
            // Parcourez les résultats et récupérez les lignes de commande
            while ($row = $result->fetch_assoc()) {
                $lignesCommandes[] = $row;
            }
            ?>
            
            <hr>
            <?php
$table = "<table class='' style='border:1px solid rgba(0,0,0,.2)'>
            <thead style=''>
                <tr style='border:1px solid rgba(0,0,0,.2)'>
                    <th style=' background-color:rgba(0,0,0,0.3);border:1px solid rgba(0,0,0,.2)'>Produit</th>
                    <th style='background-color:rgba(0,0,0,0.3);border:1px solid rgba(0,0,0,.2)'>Image</th>
                    <th style='background-color:rgba(0,0,0,0.3);border:1px solid rgba(0,0,0,.2)'>Quantité</th>
                    <th style='background-color:rgba(0,0,0,0.3);border:1px solid rgba(0,0,0,.2)'>Prix unitaire</th>
                    <th style='background-color:rgba(0,0,0,0.3);border:1px solid rgba(0,0,0,.2)'>Statut</th>
                </tr>
            </thead>
            <tbody>";

foreach ($lignesCommandes as $lignesCommande) {
    $_SESSION['totalPrix']=$lignesCommande['total'];
    $table .= "<tr style=''>
                    <td style='width:100px;text-align:center;border:1px solid rgba(0,0,0,.2)'>" . $lignesCommande['nomproduit'] . "</td>
                    <td style='text-align:center;border:1px solid rgba(0,0,0,.2)'><img src='" . $lignesCommande['imageHeberger'] . "' width='80px' /></td>
                    <td style='text-align:center;border:1px solid rgba(0,0,0,.2)'>" . $lignesCommande['quantite'] . "</td>
                    <td width='100px;' style='text-align:center;border:1px solid rgba(0,0,0,.2)'>" . $lignesCommande['prix'] . ",000 TND</td>
                    <td width='100px;' style='text-align:center;border:1px solid rgba(0,0,0,.2)'>" . $lignesCommande['statut'] . "</td>
                </tr>";
                $_SESSION['id_commande']=$lignesCommande['id_commande'];
}

$table .= "<tfoot style=''>
                <tr style=''>
                    <td colspan='5' align='right' style='border:1px solid rgba(0,0,0,.2)'><strong>TVA: $7 000</strong></td>
                </tr>
                <tr style=''>

                        
                    <td colspan='5' align='right' style='border:1px solid rgba(0,0,0,.2)'><strong>Total Prix: $ " . $lignesCommande['total'] . " 000</strong></td>
                </tr>
              
            </tfoot>
        </tbody>
    </table>";

$id_commande=$_SESSION['id_commande'];
$req3="SELECT * FROM `commande` WHERE icCom='$id_commande'";
$res3=mysqli_query($conn,$req3);
$commande=$res3->fetch_assoc();
$idC=$commande['idC'];
$date_creation=$commande['date_creation'];
$statut=$commande['statut'];
$req4="SELECT * FROM utilisateur WHERE idC='$idC'";
$res4=mysqli_query($conn,$req4);
$utilisateur=$res4->fetch_assoc();
    $tablee = "<table style='border:1px solid rgba(0,0,0,.2)'>
       
            <tr>
            <th style=' background-color:rgba(0,0,0,0.3);border:1px solid rgba(0,0,0,.2)'>Détails du la commande</th>
            <th style=' background-color:rgba(0,0,0,0.3);border:1px solid rgba(0,0,0,.2)'>Détails d'utilisateur </th>

            </tr>
          
            <tbody>";

foreach ($lignesCommandes as $lignesCommande) {
    $tablee .= "<tr style='border:1px solid rgba(0,0,0,.2)'>
                    <td style='border:1px solid rgba(0,0,0,.2)'>
                    <strong>Id de la commande :</strong>" .$idC.
                     "<br><strong>Date d'ajout :</strong>".$date_creation.
                     "<br><strong>Mode de paiment :</strong>Paiment à la livraison";
                     require_once "connexiondb.php";
                     $dateT=date('y-m-d');
                     $m=date('m',strtotime($dateT));
                     $d=date('d',strtotime($dateT));  
if($m==5 && ($d >= 15 && $d<= 31 )){
    $response['msg'] = "hors période de réduction";

    $emailC=$utilisateur['emailC'];
    $requette="SELECT * FROM `reduction` WHERE emailR='$emailC'";
$resultat=mysqli_query($conn,$requette);

if($resultat->num_rows == 1){
$prixTotal = $_SESSION['totalPrix'];
$prixTotall= $prixTotal-$prixTotal*0.3;
$tablee .= "<br><strong>Aprés une réduction de 30% prix tolal: $ </strong>" .  $prixTotall;
}


}
          
     $tablee .= "</td>

                     <td style='border:1px solid rgba(0,0,0,.2)'>
                     <strong>Email :</strong>" . $utilisateur['emailC'] .
                     "<br><strong>Téléphone :</strong>" . $utilisateur['telephoneC'] .
                     "<br><strong>Adresse compléte :</strong>" . $utilisateur['adresseC'] . " ".$utilisateur['codePostalC']." ".$utilisateur['villeC'].
                      "<br><strong>Statut d la commande :</strong>.$statut</td>
                </tr>";
}
        "</tbody>
    </table>";


         
                $subject="CARMASHOP";
                $link="http://localhost:8080/BTS_Projet_Session_O2/Mot/motedepaseoublie2.php&quot";
                $linkStylise="<a href='$link'><button style='background-color:#99A3A4;border:none;padding:10px;color:white;box-shadow:0px 20px 5px 3px rgba(0,0,0,.6)'>Réinitialiser Mot de passe</button></a>";
                $msg="$table
                $tablee";
                $headers=  "MIME-Version: 1.0" . "\r\n" .
                "Content-type: text/html; charset=UTF-8" . "\r\n";
                $to=$_SESSION['utilisateur']['emailC'];
              mail($to,$subject,$msg,$headers);
              ?>
                <h1>Félécitation ! </h1>
        <div class="alert alert-success" role="alert">
            Votre commande <strong>est bien confirmée.</strong> 
        </div>
            
            <?php } 
            
            
            else {
                ?>
                <div class="alert alert-danger" role="alert">
                <strong> Erreur (contactez l'administrateur).</strong> 
                </div>
                <?php
            }
        } else {
            echo "Erreur lors de la préparation de la requête : " . $conn->error;
        }
        
        
    }




}
  








?>
</body>
</html>
