<?php
include "../database/connection.php";
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$lu=$_POST['lundi'];
$lut=$_POST['lut'];
$ma=$_POST['mardi'];
$mat=$_POST['mat'];
$me=$_POST['mercredi'];
$met=$_POST['met'];
$je=$_POST['jeudi'];
$jet=$_POST['jet'];
$ve=$_POST['vandredi'];
$vet=$_POST['vet'];
$num=$_POST['numero'];
$sql="UPDATE `chauffeur` SET prenom='$prenom',lnt='$lut',mat='$mat',met='$met',jet='$jet',vat='$vet' , `lundi`='$lu', `mardi`='$ma', `mercredi`='$me', `jedui`='$je', `vandredi`='$ve' WHERE numero=$num and nom='$nom'";
$res=mysqli_query($con,$sql);
if($res){
    header("location:enemp.html");
}
else echo "error";
?>