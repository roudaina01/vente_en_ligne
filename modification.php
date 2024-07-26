<?php 
session_start();
$idC=$_SESSION['user']['idC'];
require_once "connexiondb.php";
$nomprenomC=$_POST['nomprenomC'];
$emailC=$_POST['emailC'];
$adresseC=$_POST['adresseC'];
$villeC=$_POST['villeC'];
$codePostalC=$_POST['codePostalC'];
$telephoneC=$_POST['telephoneC'];


$req="UPDATE utilisateur SET nomprenomC='$nomprenomC',emailC='$emailC',adresseC='$adresseC',
villeC='$villeC',codePostalC='$codePostalC',telephoneC='$telephoneC' WHERE idC='$idC'";
$res=mysqli_query($conn,$req);

?>