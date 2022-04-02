<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql="DELETE voiture,bus_argent FROM voiture left join bus_argent on bus_argent.numero=voiture.numero where voiture.id=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("location:afVoit.php");
}
else echo "eroor";
?>