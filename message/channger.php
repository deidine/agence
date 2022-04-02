<?php

include "../database/connection.php";
$id=$_POST['id'];
$nom=$_POST['nom'];
$tel=$_POST['telephone'];
$envoiyeur=$_POST['nomenv'];
$message=$_POST['message'];
$nombremessage=$_POST['nombremes'];
$prix=$_POST['prix'];
$dir=$_POST['direction'];
$date=$_POST['date'];
$sql="UPDATE message SET direction='$dir',nom='$nom',telephone='$tel',envoiyeur='$envoiyeur',message='$message',nombremessage=$nombremessage,prix=$prix,date='$date' WHERE id=$id"; 
$res=mysqli_query($con,$sql);
if($res){
    header("location:afficher.php");
}
else echo "eroor";
    ?>



