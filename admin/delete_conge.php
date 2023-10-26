<?php

require('../db/connexion.php');

$id=$_GET['id_conge'];

$sql="DELETE FROM `conge` WHERE id='$id'";

$result=mysqli_query($conn,$sql);

header("Location:gestion_conges.php");






?>