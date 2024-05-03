<?php
include("dbconnect/connect.php");
if(isset($_POST['Réclamer'])){
    $c = new connect();
    $c->reclamation($_POST);
}
?>
<html>
 <head>
 <meta charset="utf-8">
 
 <link rel="stylesheet" href="reclamer.css" >
 <link rel="stylesheet" href="home.css" >
 <title>Rotaract Tunisie (Coordination Nationale)</title>
 <script language="javascript">
    function valider_nom(nom) {
      if (nom.value == "") {
        alert("Vous devez saisir votre nom, ce champ est obligatoire !");
        return false;
      }
      return true;
    }
    function validation_champMail (ChampMail)
    {
      if(ChampMail.value=="")
      {
        alert("Vous devez saisir une adresse mail valide, ce champ est obligatoire !");
        return false;
      }

      aux1=ChampMail.value.lastIndexOf("@");
      Login=ChampMail.value.substring(0,aux1);
      aux2=ChampMail.value.lastIndexOf(".");
      Extension=ChampMail.value.substring(aux2+1,ChampMail.length);
      Domaine=ChampMail.value.substring(aux1+1,aux2);

      /* un login doit toujours avoir plus de 2 caract�res */
      if(Login.length<=2)
      {
        alert("Ceci n'est pas une adresse mail valide !");
        return false;
      }

      /* un domaine doit toujours avoir plus de 1 caract�re */
      if(Domaine.length<=1)
      {
        alert("Ceci n'est pas une adresse mail valide !");
        return false;
      }

      /* une extension doit toujours avoir 2 ou 3 caract�res */
      if((Extension.length<2)||(Extension.length>3))
      {
        alert("Ceci n'est pas une adresse mail valide !");
        return false;
      }

      return true;
    }
    function valider_reclamation(reclamation) {
      if (reclamation.value == "") {
        alert("Vous devez donner votre réclamation, ce champ est obligatoire !");
        return false;
      }
      return true;
    }
    function validation(nom,ChampMail,reclamation) {
      return (valider_nom(nom) && validation_champMail(ChampMail) && valider_reclamation(reclamation));
    }
   
</script>
 </head>
 <body>


     <div id="container">
        <header >
            <img id="logo" src="slg.png" >
            <div id="nav">
                <div id="top">
                    <div id="phone">
                        <img src="whatsapp.png" alt="" class="img">
                        <p class="p4">(+216) 52 128 123</p>
                    </div>
                    <a href = "https://www.linkedin.com/company/rotaract-tunis-hope/?trk=public_profile_volunteering-position_profile-section-card_full-click&originalSubdomain=fr"> <img src="linkedin.png" alt="" class="img"></a>
                    <a href ="https://www.instagram.com/rotaract_tunisie/"><img src="instagram.png" alt="" class="img"></a>
                    <a href="https://www.facebook.com/Rotaract.Tunisie"><img src="facebook.png" alt="" class="img"></a>
               </div>
                <nav>
                    <ul>
                        <li class="navbar_menu"><a href="home.html">Accueil</a></li>
                        <li class="navbar_menu"><a href="événement.html">Evénements</a></li>
                        <li class="navbar_menu"><a href="services.html">Services</a></li>
                        <li class="navbar_menu"><a href="reclamer.php">Réclamation</a></li>
                        <li class="navbar_menu"><a href="Rejoignez%20nous.php">Rejoignez-nous</a></li>
                        <li class="navbar_menu"><a href="dons.php">Dons</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <form  name="f1" method="post" onsubmit="return validation(document.getElementById('nomprenom'), document.getElementById('mail'), document.getElementById('reclame'));">
            <h1>Réclamation</h1>
            <label><b>Nom et Prénom</b></label><br>
            <input type="text" placeholder="Entrer votre nom et prénom" name="nomprenom" id="nomprenom"> <br>
            
            <label><b>Email</b></label><br>
            <input type="text" placeholder="Entrer votre email" name="email" id="mail"> <br>
           
            <label><b>Votre réclamation</b></label><br>
            <input type="text" placeholder="N'hésitez pas à nous laisser vos réclamations" id="reclame" name="reclamation" > <br>
           
           <center> <input type="submit" id='submit' value="Réclamer" name="Réclamer">  </center>
        </form>
        <footer>
            <div id="footer_left">
                <div id="p11">
                    <img src="logo.jpg" alt="">
                </div>
            </div>
            <div id="footer_right">
                <div id="p12">
                    <h3>MENU</h3>
                    <ul>
                        <li class="navbar_menu"><a href="home.html">Accueil</a></li>
                        <li class="navbar_menu"><a href="événement.html">Evénements</a></li>
                        <li class="navbar_menu"><a href="services.html">Services</a></li>
                        <li class="navbar_menu"><a href="reclamer.php">Réclamation</a></li>
                        <li class="navbar_menu"><a href="Rejoignez%20nous.php">Rejoignez-nous</a></li>
                        <li class="navbar_menu"><a href="dons.php">Dons</a></li>
                    </ul>
                </div>
                <div id="p13">
                    <h3>Contactez-nous</h3>
                    <div id="phone1">
                        <img src="whatsapp.png" alt="" class="img">
                        <p class="p4">(+216) 52 128 123</p>
                    </div>
                    <div id="email">
                        <img src="email.png" alt="">
                        <a href="mailto: coordination.nationale.tunisie@gmail.com"> <p class="p4"> coordination.nationale.tunisie@gmail.com</p></a>
                    </div>
        
                </div>
            
            
                <div id="p2">
                    <a href="https://www.facebook.com/Rotaract.Tunisie"><img src="facebook2.png" alt=""></a>
                    <a href="https://www.instagram.com/rotaract_tunisie/" ><img src="instagram2.png" alt=""></a>
                    <a href="https://www.linkedin.com/company/rotaract-tunis-hope/?trk=public_profile_volunteering-position_profile-section-card_full-click&originalSubdomain=fr"><img src="linkedin2.png" alt=""></a>
                </div>
            </div>
        </footer>
   </div>
 </body>
</html>