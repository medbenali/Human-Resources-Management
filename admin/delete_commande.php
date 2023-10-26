<?php

require('../db/connexion.php');

$id=$_GET['id_commande'];

$sql="DELETE FROM `commande` WHERE id='$id'";

$result=mysqli_query($conn,$sql);

header("Location:gestion_commandes.php");






?>