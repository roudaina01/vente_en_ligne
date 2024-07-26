<?php 
$email=$_POST['email'];
$msg=$_POST['msg'];
$to="roudainatradroudaina@gmail.com";
$subject="Message visiteur : ".$email;
mail($to,$subject,$msg);


?>