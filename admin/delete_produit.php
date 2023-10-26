<?php

include('../db/connexion.php');

$id=$_GET['id_produit'];

$sql="DELETE FROM `produit` WHERE id='$id'";

$result=mysqli_query($conn,$sql);

header("Location:gestion_produits.php");






?>