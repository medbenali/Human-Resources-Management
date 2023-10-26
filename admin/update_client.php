<?php

include('../db/connexion.php');

$id=$_POST['id'];
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

$sql="UPDATE `client` SET 
`nom`='$nom',
`prenom`='$prenom',
`email`='$email',
`sexe`='$sexe',
`adresse`='$adresse',
`pays`='$pays',
`ville`='$ville',
`codePostal`='$codePostal',
`telephoneFixe`='$telephoneFixe',
`gsm`='$gsm',
`dateNaissance`='$dateNaissance',
`lieuNaissance`='$lieuNaissance',
`etatCivile`='$etatCivile',
`compteUtilisateur`='$compteUtilisateur',
`login`='$login',
`pwd`='$pwd'
WHERE id='$id'";




$result=mysqli_query($conn,$sql);

header("Location:gestion_clients.php");