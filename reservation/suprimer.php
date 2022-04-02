<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql="DELETE FROM clienttarder WHERE id=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("location:afficher.php");
}
else echo "n'est pas suprimer"
?>