²<?php
include "../database/connection.php";
$num=$_POST['numero'];
$marque=$_POST['marque'];
$date=$_POST['date'];
$sql="INSERT INTO `voiture` (date,numero,marque) VALUES ('$date','$num','$marque')";
$res=mysqli_query($con,$sql);
if($res){
    header("location:envoit.php");
}
else echo "<h1>numero du voiture doit etre 8 carachteur رقم الشاحنة يجب أن يكون 8 أرقام";

?>


