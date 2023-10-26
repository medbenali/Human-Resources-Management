<?php


//appel authentification.php:::::include
include('db/connexion.php');


//récupuration les doone du formulaire login et password

$login=$_POST['login'];
$pwd=$_POST['pwd'];



$sqlClient="select `login`, `pwd` FROM `client` where login='$login' and pwd='$pwd'";
$sqlEmploye="select `login`, `pwd` FROM `employe` where login='$login' and pwd='$pwd'";
$sqlAdmin="select `login`, `pwd` FROM `admin` where login='$login' and pwd='$pwd'";


$resultClient=mysqli_query($conn,$sqlClient);
$resultEmploye=mysqli_query($conn,$sqlEmploye);
$resultAdmin=mysqli_query($conn,$sqlAdmin);


$rowClient=mysqli_fetch_array($resultClient,MYSQLI_ASSOC);
$rowEmploye=mysqli_fetch_array($resultEmploye,MYSQLI_ASSOC);
$rowAdmin=mysqli_fetch_array($resultAdmin,MYSQLI_ASSOC);


$countClient=mysqli_num_rows($resultClient);
$countEmploye=mysqli_num_rows($resultEmploye);
$countAdmin=mysqli_num_rows($resultAdmin);

session_start();

$_SESSION['codeclient']= array();

if($countClient==1)
{
    $_SESSION['codeclient']=$login;

    header('Location:client/index.php');
}

else if ($countEmploye==1)
{
    header('Location:employe/index.php');
}

else if ($countAdmin==1)
{
    header('Location:admin/index.php');
}

else
{
    header('Location:login.php');
}


?>

