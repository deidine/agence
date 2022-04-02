<?php
include "../database/connection.php";
$id=$_GET['numero'];
$sql="delete from `agence`.`bus_argent`  where numero_bus=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("location:afVoit.php");
}
else echo "eror";

?>