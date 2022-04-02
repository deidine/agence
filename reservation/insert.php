<?php
include "../auth.php";

include "../database/connection.php";
$num=mysqli_real_escape_string($con,$_POST['numero']);
$nom=mysqli_real_escape_string($con,$_POST['nom']);
$prenom=mysqli_real_escape_string($con,$_POST['prenom']);
$tel=mysqli_real_escape_string($con,$_POST['tel']);
$dir=mysqli_real_escape_string($con,$_POST['direction']);
$tem=mysqli_real_escape_string($con,$_POST['temp']);
$s_m=mysqli_real_escape_string($con,$_POST['s_m']);
//$a=date_create($tem);//here we craete the time enter by user
//$temp=date_format($a,"Y-m-d");//here we sent to the data base the new time that he is in form year month day
$sql="INSERT INTO `clienttarder`(nom,prenom,numero,telephone,direction,temp,depart) VALUES ('$nom','$prenom',$num,'$tel','$dir','$tem', '$s_m')";
 $res= mysqli_query($con,$sql);
 if($res){
     header("location:enregistrer.html");
 }
 else echo "error";

 ?>

