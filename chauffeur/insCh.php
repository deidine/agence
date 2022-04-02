<?php
include "../database/connection.php";
include "../auth.php";

$nom=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
$tel=htmlspecialchars($_POST['tel']);
$num=htmlspecialchars($_POST['numero']);
$sal=htmlspecialchars($_POST['salaire']);
$sql="INSERT INTO `chauffeur` (salaire,nom,numero,prenom,telephone) VALUES ($sal,'$nom',$num,'$prenom','$tel')";
$res=mysqli_query($con,$sql);
if($res){
header("location:enchof.html");}
else echo"<h1>le numero du chauffeur doit etre unique رقم السائق يجب أن يكون مخصص للسائق واحد يعني يجب أن لا يتكرر</h1>";
?>