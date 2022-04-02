<?php
include "../auth.php";

include "../database/connection.php";
$num=$_POST['numero'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['tel'];
$dir=$_POST['direction'];
$tem=$_POST['temp'];
$date=$_POST['date'];
 $sql=$con->prepare("INSERT INTO `client`(nom,prenom,numero,telephone,direction,temp,date) VALUES (?,?,?,?,?,?,?)");
 $sql->bind_param('ssiisss',$nom,$prenom,$num,$tel,$dir,$tem,$date);
 $sql->execute();
 $sql->close();
 
 
 if($sql){
     header("location:enregistrer.php");
 }
 else echo "error";

 ?>

