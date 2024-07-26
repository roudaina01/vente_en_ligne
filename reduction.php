<?php
session_start();
$dateT=date('y-m-d');
$m=date('m',strtotime($dateT));
$d=date('d',strtotime($dateT));
$emailR=$_POST['emailR'];
$nomR=$_POST['nomR'];
require_once "connexiondb.php";

$response = array(); 

if($m==5 && ($d >= 15 && $d<= 31 )){
    $response['msg'] = "hors période de réduction";


}

else {
    $requette="SELECT * FROM reduction";
$resultat=mysqli_query($conn,$requette);
//$NombreEmail=$resultat->fetch_assoc();
//echo $NombreEmail['nombreEmails'];
if($resultat->num_rows >= 10){
    $response['msg']="Seuls les dix premiers e-mails peuvent s'inscrire pour bénéficier de la réduction. Nous avons clôturé les inscriptions car le nombre été atteint.
    Nous vous attendons lors de la prochaine session.";
}
else {
    $emailR=$_POST['emailR'];
$nomR=$_POST['nomR'];
    $requette1 = "SELECT * FROM `reduction` WHERE emailR='$emailR'";
    $resultat1 = mysqli_query($conn,$requette1);

    if ($resultat1->num_rows >= 1) {
        $response['msg'] = "L'Email déjà inscrit!! vous pouvez pas inscrire qu'une seule fois avec cette email";
    }
    else {
       
        $req="INSERT INTO `reduction`(`idR`, `nomR`, `emailR`) VALUES(?,?,?)";
        $res=$conn->prepare($req);
        $res->bind_param('sss',$idR,$nomR,$emailR);
        $res->execute();
        $response['msg'] = "  Félicitations  Grâce à votre inscription, vous bénéficierez d'une réduction de 30% sur vos commandes ";
        $to=$emailR;
        $msg="
        
        <p>
        Félicitations &#128512; Grâce à votre inscription, vous bénéficierez d'une réduction de 30% &#128180; sur vos commandes

        </p>
        ";
        $subject="CRAMASHOP:PROMO";
      
        $headers ="MIME-Version: 1.0" . "\r\n" . 
        "Content-type: text/html; charset=UTF-8" . "\r\n";
        mail($to,$subject,$msg,$headers);
        $_SESSION['reduction']="Une nouvelle inscription du reduction";


    }
 
   
}
   
}
echo json_encode($response);

?>