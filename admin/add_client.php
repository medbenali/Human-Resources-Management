<?php

include('../db/connexion.php');

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$sexe=$_POST['sexe'];
$adresse=$_POST['adresse'];
$pays=$_POST['pays'];
$ville=$_POST['ville'];
$codePostal=$_POST['codePostal'];
$telephoneFixe=$_POST['telephoneFixe'];
$gsm=$_POST['gsm'];
$dateNaissance=$_POST['dateNaissance'];
$lieuNaissance=$_POST['lieuNaissance'];
$etatCivile=$_POST['etatCivile'];
$compteUtilisateur=$_POST['compteUtilisateur'];
$login=$_POST['login'];
$pwd=$_POST['pwd'];

$sql="INSERT INTO `client`(`nom`, `prenom`, `email`, `sexe`, `adresse`, `pays`, `ville`, `codePostal`, `telephoneFixe`, `gsm`, `dateNaissance`, `lieuNaissance`, `etatCivile`, `compteUtilisateur`, `login`, `pwd`) 

VALUES ('$nom','$prenom','$email','$sexe','$adresse','$pays','$ville','$codePostal','$telephoneFixe','$gsm','$dateNaissance','$lieuNaissance','$etatCivile','$compteUtilisateur','$login','$pwd')";

$result=mysqli_query($conn,$sql);

header("Location:gestion_clients.php");


?>