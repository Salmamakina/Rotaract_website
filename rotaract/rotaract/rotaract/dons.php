<?php
include("dbconnect/connect.php");
if(isset($_POST['Envoyer'])){
    $c = new connect();
    $c->dons($_POST);
}
?>
<html>
    <head>
     
        <meta charset="utf-8">
 
        <link rel="stylesheet" href="dons.css">
        <link rel="stylesheet" href="home.css">
        <title>Rotaract Tunisie (Coordination Nationale)</title>
        <script language="javascript">
            function valider_prenom(prenom) {
                if (prenom.value == "") {
                    alert("Vous devez saisir votre nom, ce champ est obligatoire !");
                    return false;
                }
                return true;
                }
            function validation_champMail(ChampMail)
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
            function valider_type(typelist) {
                for (i = 0; i < typelist.length; i++) {
                    if (typelist[i].selected && typelist[i].value != "Sélectionner le type") {
                    return true;
                    }
                }
                alert("Vous devez préciser votre type de dons, ce champ est obligatoire !");
                return false;
                }
            function validation(prenom,ChampMail,num,typelist) {
                return (valider_prenom(prenom) && validation_champMail(ChampMail) && valider_tele(num) && valider_type(typelist));
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
        <form name="f" method="post" onsubmit="return validation(document.getElementById('prenom'), document.getElementById('emaill'),document.getElementById('num'),document.getElementById('type'));">
            <h1 >Formulaire des dons</h1>
            <h5 >"Le plus beau dans cette vie, c'est de se fatiguer pour quelqu'un sans qu'il s'en aperçoive." Christian Bobin</h5>
            <label>Nom Complet</label><br><input id="prenom" class="nom" name="prenom" type="text" placeholder="Entrer votre prénom"><input name="nom" class="nom" type="text" placeholder="Entrer votre deuxiéme nom"> <input  name="nomdufamille" class="nom" type="text" placeholder="Entrer votre nom du famille"><br>
            <label>Email</label><br><input name="email" type="email" id="emaill" placeholder="Entrer votre Email" ><br>
            <label>Numéro de télèphone</label><br><input name="numtel" type="text" id="num" placeholder="Entrer votre numéro de télèphone"><br>
            <label>Quel type de dons voulez-vous donner?</label>
            <select required name="type" id="type">
                <option name="type" value="Sélectionner le type">Sélectionner le type</option>
                <option name="type" value="Argent">Argent</option>
                <option name="type" value="Vétements">Vétements</option>
                <option name="type" value="Nourriture">Nourriture</option>
                <option name="type" value="Autre">Autre</option>

            </select>
            <br>
            <label>Quel moyen voulez-vous utiliser?</label><br><input type="checkbox" value="Poste" name="moyen" ><label>Poste</label><br><input type="checkbox" value="D17" name="moyen"><label>D17</label><br><input type="checkbox" value="carte bancaire" name="moyen"><label>Carte bancaire</label><br><input type="checkbox" value="carte postale" name="moyen"><label>Carte postale</label><br>   
            <br>
            <label>Numéro de catre(bancaire/postale)</label><br><input type="text" placeholder="Entrer votre numéro de carte" name="numcarte"><br>
            <label>Quel montant voulez-vous donner?</label><br><input type="text" placeholder="Entrer le montant" name="montant"><br> 
            <label> Remarque</label><br><textarea rows="4" name=" remarque"placeholder="Entrer votre remarque ici.."></textarea>
            <br>
            <input type="submit" value="Envoyer" Name="Envoyer" id="button">

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