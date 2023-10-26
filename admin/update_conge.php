<?php

include('../db/connexion.php');

$id=$_GET['id_conge'];

$sql="UPDATE `conge` SET `valide`='Validé' WHERE id='$id'";

$result=mysqli_query($conn,$sql);

header("Location:gestion_conges.php");