<?php
session_start();
$idC=$_SESSION['user']['idC'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="assets/images/logo2.png" class="rounded-full"/>

<style>
    /* Import Font Dancing Script */
@import url(https://fonts.googleapis.com/css?family=Dancing+Script);

* {
    margin: 0;
}

body {
    background-color: #FFBCDA;
    font-family: Arial;
    overflow: hidden;
}

/* NavbarTop */
.navbar-top {
    background-color: #fff;
    color: #333;
    box-shadow: 0px 4px 8px 0px grey;
    height: 70px;
}

.title {
    font-family: 'Dancing Script', cursive;
    padding-top: 15px;
    position: absolute;
    left: 45%;
}

.navbar-top ul {
    float: right;
    list-style-type: none;
    margin: 0;
    overflow: hidden;
    padding: 18px 50px 0 40px;
}

.navbar-top ul li {
    float: left;
}

.navbar-top ul li a {
    color: #333;
    padding: 14px 16px;
    text-align: center;
    text-decoration: none;
}

.icon-count {
    background-color: #ff0000;
    color: #fff;
    float: right;
    font-size: 11px;
    left: -25px;
    padding: 2px;
    position: relative;
}

/* End */

/* Sidenav */
.sidenav {
    background-color: #fff;
    color: #333;
    border-bottom-right-radius: 25px;
    height: 86%;
    left: 0;
    overflow-x: hidden;
    padding-top: 20px;
    position: absolute;
    top: 70px;
    width: 250px;
}

.profile {
    margin-bottom: 20px;
    margin-top: -12px;
    text-align: center;
}

.profile img {
    border-radius: 50%;
    box-shadow: 0px 0px 5px 1px grey;
}

.name {
    font-size: 20px;
    font-weight: bold;
    padding-top: 20px;
}

.job {
    font-size: 16px;
    font-weight: bold;
    padding-top: 10px;
}

.url, hr {
    text-align: center;
}

.url hr {
    margin-left: 20%;
    width: 60%;
}

.url a {
    color: #818181;
    display: block;
    font-size: 20px;
    margin: 10px 0;
    padding: 6px 8px;
    text-decoration: none;
}

.url a:hover, .url .active {
    background-color: #FFBCDA;
    border-radius: 28px;
    color: #000;
    margin-left: 14%;
    width: 65%;
}

/* End */

/* Main */
.main {
    margin-top: 10%;
    margin-left: 29%;
    font-size: 28px;
    padding: 0 10px;
    width: 58%;
}

.main h2 {
    color: #333;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 24px;
    margin-bottom: 10px;
}

.main .card {
    background-color: #fff;
    border-radius: 18px;
    box-shadow: 1px 1px 8px 0 grey;
    height: auto;
    margin-bottom: 20px;
    padding: 20px 0 20px 50px;
}

.main .card table {
    border: none;
    font-size: 16px;
    height: 270px;
    width: 80%;
}

.edit {
    position: absolute;
    color: #e7e7e8;
    right: 14%;
}

.social-media {
    text-align: center;
    width: 90%;
}

.social-media span {
    margin: 0 10px;
}

.fa-facebook:hover {
    color: #4267b3 !important;
}

.fa-twitter:hover {
    color: #1da1f2 !important;
}

.fa-instagram:hover {
    color: #ce2b94 !important;
}

.fa-invision:hover {
    color: #f83263 !important;
}

.fa-github:hover {
    color: #161414 !important;
}

.fa-whatsapp:hover {
    color: #25d366 !important;
}

.fa-snapchat:hover {
    color: #fffb01 !important;
}

/* End */
</style>
</head>
<body>
    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1>Profile</h1>
        </div>

        <!-- Navbar -->
        
        <!-- End -->
    </div>
    <!-- End -->

    <!-- Sidenav -->
    <div class="sidenav">
        <div class="profile">
            <img src="assets/images/logo2.png" alt="" width="100" height="100">

            <div class="name">
                CHARMASHOP
            </div>
            <div class="job">
                <a>Vétements en ligne</a>
            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="deconnexion.php" class="active" >Déconnexion</a>
                <hr align="center">
            </div>
        
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <div class="card">
            <div class="card-body">
                <a data-bs-toggle="modal" href="#modifier"><i class="fa fa-pen fa-xs edit"></i></a>
                <?php 
                require_once "connexiondb.php";
                $req="SELECT * FROM `utilisateur` WHERE idC='$idC'";
                $res=mysqli_query($conn,$req);
                $userr=$res->fetch_assoc();
                
                ?>
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?php echo $userr['nomprenomC']?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $userr['emailC']?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td><?php echo $userr['adresseC']." ".$userr['villeC']." ".$userr['codePostalC'];?></td>
                        </tr>
                        <tr>
                            <td>Téléphone</td>
                            <td>:</td>
                            <td><?php echo $userr['telephoneC'] ?></td>
                        </tr>
                     
                      
                    </tbody>
                </table>
                <table style="display:none">
        
            </div>
        </div>

      
    </div>
    <!-- End -->
    <div class="modal fade" id="modifier" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" style="font-size:10px" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form method="post" action="" onsubmit="modifier(event)">
<div class="row">
          
          <div class="form-group col-6">
              <label style="font-size:20px;font-weight:bold">Nom</label>
                    <input type="text" value="<?php echo $userr['nomprenomC']?>" name="nomprenomC"  class="form-control"/>
</div>
                               
          <div class="form-group col-6">
              <label style="font-size:20px;font-weight:bold">Email</label>
                    <input type="email" value="<?php echo $userr['emailC']?>" name="emailC"  class="form-control"/>
</div>
                               
          <div class="form-group col-6">
              <label style="font-size:20px;font-weight:bold">Adresse</label>
                    <input type="text" value="<?php echo $userr['adresseC']?>" name="adresseC"  class="form-control"/>
</div>
                        <div class="form-group col-6">
              <label style="font-size:20px;font-weight:bold">Ville</label>
                    <input type="text" value="<?php echo $userr['villeC']?>" name="villeC"  class="form-control"/>
</div>
<div class="form-group col-6">
              <label style="font-size:20px;font-weight:bold">Code postal</label>
                    <input type="text" value="<?php echo $userr['codePostalC']?>" name="codePostalC"  class="form-control"/>
</div>
<div class="form-group col-6">
              <label style="font-size:20px;font-weight:bold">Téléphone</label>
                    <input type="text" value="<?php echo $userr['telephoneC']?>" name="telephoneC"  class="form-control"/>
</div>
</div>
<br>
<div class="row" style="margin-left:30%">
<div class="form-group col-12">
<input type="submit" class="btn btn-secondary"  value="Modifier"  />
<input type="submit" class="btn btn-secondary" value="Annuler"  />

</div> 
</div>
</form> 
                 
                       </div>
   
    </div>
  </div>
</div>
<script>
    function modifier(e){
        e.preventDefault();
        let nomprenomC = document.getElementsByName('nomprenomC')[0].value;
        let emailC = document.getElementsByName('emailC')[0].value;
        let adresseC = document.getElementsByName('adresseC')[0].value;
        let villeC = document.getElementsByName('villeC')[0].value;
        let codePostalC = document.getElementsByName('codePostalC')[0].value;
        let telephoneC = document.getElementsByName('telephoneC')[0].value


    $.ajax({
        type:"POST",
        url:"modification.php",
        data:{
            'nomprenomC':nomprenomC,
            ' emailC': emailC,
            'adresseC':adresseC,
            'villeC':villeC,
            'codePostalC':codePostalC,
            'telephoneC':telephoneC
        },
        success: function(response) {
                alert('Données bien modifiées');
                document.location.href="profil.php";
            },
            error: function(xhr, status, error) {
                alert('Une erreur est survenue lors de la modification : ' + error);
            }
    })
    }
</script>
</body>
</html>
