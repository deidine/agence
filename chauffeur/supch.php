<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql="DELETE chauf_depence,chauffeur FROM chauffeur left join  chauf_depence on chauf_depence.numero=chauffeur.numero WHERE chauffeur.id=$id";
$res=mysqli_query($con,$sql) or die("la supression est ecchouer");
if($res){
    header("location:afCh.php");
}

?>