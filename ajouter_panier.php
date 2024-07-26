<?php
session_start();
/*if (!isset($_SESSION['utilisateur'])) {
    header('location: ../connexion.php');
}*/

$id = $_POST['id'];
echo $id;
$qty = $_POST['qty'];
echo $qty;
//$idUtilisateur = $_SESSION['utilisateur']['idC'];
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
} 
if($qty == 0){
    unset($_SESSION['panier'][$id]);
}else{
    $_SESSION['panier'][$id] = $qty;
}

header("location:".$_SERVER['HTTP_REFERER']);

?>