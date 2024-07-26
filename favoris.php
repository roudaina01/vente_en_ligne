<?php
session_start();
require_once "connexiondb.php";
$id=$_GET['id'];
$nombre=1;

$req="SELECT * FROM `favoris` WHERE id='$id'";
$res=mysqli_query($conn,$req);
$favoris=$res->fetch_assoc();
if($res->num_rows >=1){
    $nombre=$favoris['nombre']+1;
    $req2="UPDATE FAVORIS SET nombre='$nombre' WHERE id='$id'";
    $res2=mysqli_query($conn,$req2);
}
else {
    $req3="INSERT INTO `favoris`(`idF`, `id`, `nombre`) VALUES (?,?,?)";
    $res3=$conn->prepare($req3);
    $res3->bind_param('sss',$idF,$id,$nombre);
    $res3->execute();
    $_SESSION['favoris']="Une nouvelle favoris";
}



?>