<?php

include('../db/connexion.php');

$id=$_POST['id'];
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$quantite=$_POST['quantite'];
$tva=$_POST['tva'];
$photo=$_POST['photo'];

$sql="UPDATE `produit` SET 
`libelle`='$libelle',
`prix`='$prix',
`quantite`='$quantite',
`tva`='$tva',
`photo`='$photo'
WHERE id='$id'";


$result=mysqli_query($conn,$sql);

header("Location:gestion_produits.php");