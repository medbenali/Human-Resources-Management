<?php

include('../db/connexion.php');

$id=$_GET['id_commande'];

$sql="UPDATE `commande` SET `etat`='Validé' WHERE id='$id'";

$result=mysqli_query($conn,$sql);

header("Location:gestion_commandes.php");