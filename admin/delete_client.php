<?php

include('../db/connexion.php');

$id=$_GET['id'];

$sql="DELETE FROM `client` WHERE id='$id'";

$result=mysqli_query($conn,$sql);

header("Location:gestion_clients.php");


?>