<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>hôpital santé</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="index.html"><img src="images/logo.jpg" alt="#"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                    <li class="active"> <a href="index.html">Mon profile</a> </li>
                                        <li> <a href="aboutus.html">PATIENTS</a> </li>
                                        <li> <a href="/ProjetHopital/rendezvous/RendezVous.php">Rendez-Vous</a> </li>
                                        <li> <a href="ord.php">Preincrire Ordonnance</a> </li>
                                        
                                        <li> <a href="../health/">Log out  </a> </li>
                                        
                                        <li class="mean-last"> <a href="#"><img src="images/top-icon.png" alt="#" /></a> </li>  
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- end header inner --> 
</header>
<!-- end header -->
<div class="Contact-bg ">
  <div class="container ">
    <div class="row ">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="abouttitle ">
         <h2>PRENDRE UN RENDEZ VOUS</h2>
       </div>
       </div>
    </div>
  </div>
</div>

<div class="Contact ">
  <div class="container ">
    
    <div class="row ">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <form method='POST' action="RendezVous.php">
            <div class="row ">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                <input class="form-control " placeholder="Votre prenom " type="Your name " name="prenom">
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
      
                <input class="form-control " placeholder="Votre nom " type="text " name="nom">
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
      
                <input type="date" id="start" min="2021-23-11" max="2022-22-11" class="form-control " placeholder="La date du rendez vous que vous désirez " type="date " name="date">
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
      
                <input class="form-control " placeholder="Le nom du medecin que vous voulez voir " type="text " name="medecin">
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
              <textarea class="textarea " placeholder="La description de votre état de santé " name="description"></textarea>
              </div>
              <div>
              <input type ="submit" class="send-btn " name="valider" value="OK">
</div>
      
        </div>
        </form>
      </div>
      
      
    </div>
  </div>
</div>

<!-- footer -->
<footer>
  <div class="footer ">
    <div class="container ">
      <div class="row ">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
          <div class="JJcoach ">
            <h3>Health <strong class="coa "> </strong></h3>
            </div>
        
          </div>
          
        
      </div>
      <div class="row pdn-top-30 ">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 ">
          <ul class="location_icon ">
              <li> <img src="icon/location.png "> <span>London 145<br>United Kingdom</span></li>
              
              
            </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 ">
          <ul class="location_icon ">
              <li> <img src="icon/tellephone.png "><span>+9187654320<br>+9187654320</span></li>
            </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 ">
          <ul class="location_icon ">
              <li> <img src="icon/email.png "><span>Demo@gmail.com<br>Demo@gmail.com</span></li>
            </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 ">
          <ul class="location_icon ">
              <li> <a href="# "><img src="icon/facebook.png "></a></li>
              <li> <a href="# "><img src="icon/Twitter.png "></a></li>
              <li> <a href="# "><img src="icon/linkedin.png "></a></li>
              <li> <a href="# "><img src="icon/google+.png "></a></li>
            </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
</footer>
<!-- end footer --> 
<!-- Javascript files--> 
<script src="js/jquery.min.js "></script> 
<script src="js/popper.min.js "></script> 
<script src="js/bootstrap.bundle.min.js "></script> 
<script src="js/jquery-3.0.0.min.js "></script> 
<script src="js/plugin.js "></script> 

<!-- sidebar --> 
<script src="js/jquery.mCustomScrollbar.concat.min.js "></script> 
<script src="js/custom.js "></script>

</body>
</html>
<?php
if(isset($_POST["valider"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopital"; $prenom= $_POST["prenom"];
$nom= $_POST["nom"];
$date= $_POST["date"];
$medecin= $_POST["medecin"];
$description= $_POST["description"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO rendezvous (nomPatient,prenomPatient,date,nomDocteur,description)
VALUES ('$nom', '$prenom', '$date','$medecin','$description')";if (mysqli_query($conn, $sql)) {
echo "Votre rendez est pris avec succes!";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}mysqli_close($conn);
}?>

