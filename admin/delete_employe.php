<?php

include('../db/connexion.php');

$id=$_GET['id_employe'];

$sql="DELETE FROM `employe` WHERE id='$id'";

$result=mysqli_query($conn,$sql);

header("Location:gestion_employes.php");

?>