<?php
include "../auth.php";
include "../database/connection.php";
$nom=mysqli_real_escape_string($con,$_POST['nom']);
$tel=mysqli_real_escape_string($con,$_POST['telephone']);
$envoiyeur=mysqli_real_escape_string($con,$_POST['nomenv']);
$message=mysqli_real_escape_string($con,$_POST['message']);
$nombremessage=mysqli_real_escape_string($con,$_POST['nombremes']);
$prix=mysqli_real_escape_string($con,$_POST['prix']);
$dir=mysqli_real_escape_string($con,$_POST['direction']);
$date=mysqli_real_escape_string($con,$_POST['date']);
$sql="INSERT INTO message(direction,nom,telephone,envoiyeur,message,nombremessage,prix,date) VALUES('$dir','$nom','$tel','$envoiyeur','$message',$nombremessage,$prix,'$date') ";
$res=mysqli_query($con,$sql);
if($res){
    header("location:enregistrer.php");
}
else echo "eroor";
    ?>



