<?php
include "../database/connection.php";
$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['telephone'];
$sql=" UPDATE chauffeur SET nom='$nom',prenom='$prenom',telephone=$tel WHERE id=$id";
$res=mysqli_query($con,$sql);
if($res){

header("location:afCh.php");

}
else echo "error";
?>