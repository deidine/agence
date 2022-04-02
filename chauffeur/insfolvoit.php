<?php
include "../database/connection.php";
//cette file est pour inserer dans la folder du voiture
if(isset($_POST['deidine'])){
$arg=$_POST['argent'];
$date=$_POST['date'];
$comt=$_POST['commentaire'];
$numbus=$_POST['id'];
$num=$_POST['numero'];
$sql2="INSERT INTO bus_argent(date,commentaire,argent,numero,numero_bus) VALUES ('$date','$comt',$arg,'$num',$numbus) ";
$res2=mysqli_query($con,$sql2) ;

if($res2){
header("location:folderCar.php?numero=$num");
    ;}

else echo "error";}?>