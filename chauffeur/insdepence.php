<?php
include "../database/connection.php";
if(isset($_POST['deidine'])){
$mon=$_POST['montant'];
$date=$_POST['date'];
$comt=$_POST['commentaire'];
$num=$_POST['numero'];
$sql2="INSERT INTO chauf_depence(temp,commentaire,montant,numero) VALUES ('$date','$comt',$mon,$num) ";
$res2=mysqli_query($con,$sql2) ;

if($res2){
header("location:folder.php?numero=$num");}

else echo "error";}

?>