<?php

include('../db/connexion.php');

$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$quantite=$_POST['quantite'];
$tva=$_POST['tva'];
$photo=$_POST['photo'];


$sql="INSERT INTO `produit`(`libelle`, `prix`, `quantite`, `tva`, `photo`) 

VALUES ('$libelle','$prix','$quantite','$tva','$photo')";

$result=mysqli_query($conn,$sql);

header("Location:gestion_produits.php");


?>