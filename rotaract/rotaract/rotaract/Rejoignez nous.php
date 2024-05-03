<?php
include("dbconnect/connect.php");
if(isset($_POST['env'])){
    $c = new connect();
    $c->adduser($_POST);
}
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rotaract Tunisie (Coordination Nationale)</title>
  <link rel="stylesheet" href="rejoignez_nous.css">
  <link rel="stylesheet" href="home.css">
  
  <script language="javascript">
    function valider_nom(nom) {
      if (nom.value == "") {
        alert("Vous devez saisir votre nom, ce champ est obligatoire !");
        return false;
      }
      return true;
    }

    function valider_sexe(sexelist) {
      for (i = 0; i < sexelist.length; i++) {
        if (sexelist[i].selected && sexelist[i].value != "Choisissez une option") {
          return true;
        }
      }
      alert("Vous devez préciser votre sexe, ce champ est obligatoire !");
      return false;
    }
    function valider_birthdate(date) {
      var dateRegex = /^\d{2}-\d{2}-\d{4}$/; // Regular expression for the date format dd-mm-yyyy

      if (date.value == "") {
        alert("Vous devez saisir votre date de naissance sous forme jj-mm-aaaa, ce champ est obligatoire !");
        return false;
      }

      if (!date.value.match(dateRegex)) {
        alert("Le format de la date de naissance doit être jj-mm-aa !");
        return false;
      }

      return true;
    }


    function valider_address(adress){
      if (adress.value == "") {
        alert("Vous devez saisir votre addresse, ce champ est obligatoire !");
        return false;
      }
      return true;
    }
    function valider_codepostal(code){
      if (code.value == "") {
        alert("Vous devez saisir votre code postale, ce champ est obligatoire !");
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
    function valider_tele(num){
      if (num.value == "") {
        alert("Vous devez saisir votre numéro de telephone, ce champ est obligatoire !");
        return false;
      }
      return true;
    }

    function validation(nom, sexelist ,date,adress,code,mail,num) {
      return (valider_nom(nom) && valider_sexe(sexelist) && valider_birthdate(date) && valider_address(adress) && valider_codepostal(code) && validation_champMail(mail) && valider_tele(num));
    }
  
  </script>
</head>
<body>
<div id="container">
  <header>
    <img id="logo" src="slg.png">
    <div id="nav">
      <div id="top">
        <div id="phone">
          <img src="whatsapp.png" alt="" class="img">
          <p class="p4">(+216) 52 128 123</p>
        </div>
        <a href="https://www.linkedin.com/company/rotaract-tunis-hope/?trk=public_profile_volunteering-position_profile-section-card_full-click&originalSubdomain=fr"><img src="linkedin.png" alt="" class="img"></a>
        <a href="https://www.instagram.com/rotaract_tunisie/"><img src="instagram.png" alt="" class="img"></a>
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
      <form name="f2" method="post" onsubmit="return validation(document.getElementById('nomm'), document.getElementById('sexe'), document.getElementById('dn'),document.getElementById('ad'),document.getElementById('cd'),document.getElementById('emaill'),document.getElementById('telephone'));">
        <h1>Formulaire d'inscription</h1>
        <h5 style=' margin-left: 330px;'>Remplissez soigneusement le formulaire d'inscription</h5>
        <label>Nom et Prénom</label><br>
        <input name="nom" id="nomm" type="text" placeholder="Entrer votre prénom et votre nom"><br>
        <label>Sexe :</label> <br>
        <select id="sexe" name="sexe">
          <option name="sexe" value="Choisissez une option">Choisissez une option</option>
          <option name="sexe" value="male">Homme</option>
          <option name="sexe" value="femelle">Femme</option>
        </select> <br>
        <label>Date de naissance :</label> <br>
        <input type="text" id="dn" name="date_naissance"  placeholder="jj-mm-aaaa" ><br>
        <label >Adresse:</label><br>
        <input type="text" id="ad" name="champ1" placeholder="Votre adresse ici"><br>
        <label>Code Postal :</label> <br>
        <input type="text" id="cd" name="Code_Postal" placeholder="Votre code postal ici"><br>
        <label >Email :</label><br>
        <input type="email" id="emaill" name="email" placeholder="Votre email ici" ><br>
        <label>Numéro de téléphone :</label><br>
        <input type="text" id="telephone" name="telephone" placeholder="Votre numéro du télèphone ici"><br>
        <input type="submit" name="env" id="envoyer" value="Envoyer" >

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
          <li class="navbar_menu"><a href="Rejoignez%20nous.php">Rejoigner nous</a></li>
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
