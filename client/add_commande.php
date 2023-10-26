
<?php



        
    $id=$_GET['id_commande'];

    $num=401;

    // id de client connecte

    $codeclient=303;


    $etat='En Cours';
    $idpventee=1;
    $datecmd=date_create()->format('Y-m-d');
    $cinclient='12345678';
    $idpointvente=1;


  

include('../db/connexion.php');

$sql = "SELECT * FROM `produit` WHERE id='$id'";

$result=$conn->query($sql);

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))

{ 

  
    $montantht=$row['prix'];

    $montva=$row['tva'];

    $tva=$montva/100;


    $monttc=$montantht + ($montantht*$tva);

    $sqlInsertCommande="INSERT INTO `commande`(`num`, `codeclient`, `montantht`, `montva`, `monttc`, `etat`, `idpventee`, `datecmd`, `cinclient`, `idpointvente`) 
    
    VALUES ('$num','$codeclient','$montantht','$montva','$monttc','$etat','$idpventee','$datecmd','$cinclient','$idpointvente')";


    $resultInsert=mysqli_query($conn,$sqlInsertCommande);



    echo $resultInsert;

    header("Location:my_commande.php");

}



?>
    







