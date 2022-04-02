<?php
include "../database/connection.php";
$id=$_POST['id'];
$date=$_POST['date'];
$marque=$_POST['marque'];
$num=$_POST['numero'];
$sql="UPDATE voiture SET date='$date',marque='$marque' WHERE id=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("location:afVoit.php");
}
else echo "error";

?>
