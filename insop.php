<?php
include "database/connection.php";
$op=$_POST['text'];  
$nom=$_POST['nom'];
$email=$_POST['date'];

$sql5="INSERT INTO `opinion`(opinion,nom,email) VALUES ('$op','$nom','$email')";
$res5=mysqli_query($con,$sql5) or die("error dans 'insertion");
if($res5){
    header("location:agence.php");
}
?>
