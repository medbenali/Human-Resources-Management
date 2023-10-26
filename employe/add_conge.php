<?php

include('../db/connexion.php');

$titre=$_POST['titre'];
$demande=$_POST['demande'];
$duree=$_POST['duree'];
$datedebut=$_POST['datedebut'];
$datefin=$_POST['datefin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$codeemployer=$_POST['codeemployer'];
$valide='Non Valide';



$sql="INSERT INTO `conge`(`titre`, `demande`, `duree`, `datedebut`, `datefin`, `nom`, `prenom`, `codeemployer`, `valide`) 

VALUES ('$titre','$demande','$duree','$datedebut','$datefin','$nom','$prenom','$codeemployer','$valide')";



$result=mysqli_query($conn,$sql);

header("Location:mylist_conge.php");


?>