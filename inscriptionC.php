<?php
session_start();
require_once "connexiondb.php";
$emailC=$_POST['emailC'];
$req2="SELECT * FROM utilisateur WHERE emailC='$emailC'";
$res2=mysqli_query($conn,$req2);
if(mysqli_num_rows($res2) > 0){ ?>

<!DOCTYPE html>
<html lang="en">

<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    swal({
        icon:'warning',
        title:'ERREUR',
        text:'Email déja existe il .....',
    }).then(function(result){
        window.location.href='index.php?openmodalInsc=true';
    })
</script>
</body>
</html>
<?php } else { 
$nomprenomC=$_POST['nomprenomC'];
$telephoneC=$_POST['telephoneC'];
$adresseC=$_POST['adresseC'];

$villeC=$_POST['villeC'];
$codePostalC=$_POST['codePostalC'];
$emailC=$_POST['emailC'];
$mdpC=$_POST['mdpC'];


$req="INSERT INTO `utilisateur`(`idC`, `nomprenomC`, `telephoneC`, `adresseC`, `villeC`, `codePostalC`, `emailC`, `mdpC`) VALUES
(?,?,?,?,?,?,?,?)";
 $res=$conn->prepare($req);
 $res->bind_param('ssssssss',$idC,$nomprenomC,$telephoneC,$adresseC,$villeC,$codePostalC,$emailC,$mdpC);
 $res->execute();
$_SESSION['msgInscription']="Vous avez une nouvelle i";

?>
<!DOCTYPE html>
<html lang="en">

<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    swal({
        icon:'success',
        title:'Bienvenue entre nous',
        text:'Félécitation, votre compte .....',
    }).then(function(result){
        window.location.href='index.php';
    })
</script>
</body>
</html>

</body>
</html>
<?php } ?>
