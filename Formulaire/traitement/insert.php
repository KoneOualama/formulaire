<?php
    require 'connection.php';

    //Verification s'il existe un poste dans le formulaire
    if(isset($_POST)){

        // recuperation des champs du formulaire
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $niveau = $_POST['niveau'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $verif = $_POST['verification'];
        

        //preparation de la requete au serveur
        $insert = $conn->prepare("INSERT INTO `essai`(`nom`, `prenom`, `niveau`, `email`, `pwd`, `verification`) 
        VALUES (?,?,?,?,?,?)");
        // execution de la requete avec les données
        $insert->execute(array(
            $nom,$prenom,$niveau,$email,$pwd,$verif
        ));

        //redirection
        header("location:../form.php
        
        
        
        
        ");

    }

?>