<?php
include "../database/connection.php";
$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$dir=$_POST['direction'];
$tem=$_POST['temp'];
$tel=$_POST['telephone'];
$sql="UPDATE client SET nom='$nom',temp='$tem', prenom='$prenom', direction='$dir', telephone='$tel' WHERE id='$id'";
$res=mysqli_query($con,$sql);
if($res){
    header("location:afficher.php");
}
else echo"eroor";?>