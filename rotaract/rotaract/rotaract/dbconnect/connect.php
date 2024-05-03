<?php

class Connect
{

    //Connexion
    private $db;
    function __construct()
    {
        $user = "root";
        $pwd = "";
        $this->db = new PDO('mysql:host=localhost;dbname=rotaract', $user, $pwd);
        if (!$this->db) {
            die("Database connection error!!!");
        }
    }


    //add user
    function adduser($data){
        $nom = $data['nom'];
        $sexe = $data['sexe'];
        $daten = $data['date_naissance'];
        $adress = $data['champ1'];
        $codep = $data['Code_Postal'];
        $email = $data['email'];
        $telephone = $data['telephone'];
        $query = "INSERT INTO inscrit VALUES ('','$nom','$sexe','$daten','$adress','$codep','$email','$telephone')";
        $state = $this->db->exec($query);
        if($state)
        {
            echo "Inscrit bien ajouté";
        }
    }
    function dons($data){
        $prenom = $data['prenom'];
        $nom= $data['nom'];
        $nomdufamille= $data['nomdufamille'];
        $email= $data['email'];
        $numtel= $data['numtel'];
        $type= $data['type'];
        $moyens = isset($_POST['moyen']) ? (array)$_POST['moyen'] : [];
        $moyen = implode(", ", $moyens);
        $numcarte= $data['numcarte'];
        $montant= $data['montant'];
        $remarque= $data['remarque'];
        $query="INSERT INTO dons VALUES ('','$prenom','$nom','$nomdufamille','$email','$numtel','$type','$moyen','$numcarte','$montant','$remarque')";
        $state = $this-> db ->exec($query);
        if($state)
        {
            echo "Dons bien transférés";
        }
    }
    function reclamation($data){
        $nomprenom=$data['nomprenom'];
        $email=$data['email'];
        $reclamation=$data['reclamation'];
        $query="INSERT INTO reclamation VALUES ('','$nomprenom','$email','$reclamation')";
        $state = $this-> db ->exec($query);
        if($state)
        {
            echo "Réclamation bien transférée";
        }

    }



}
?>