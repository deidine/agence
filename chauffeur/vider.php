<?php
include "../database/connection.php";
$id=$_GET['numero'];
$sql="delete from `agence`.`chauf_depence`  where numero=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("location:afFolChauf.php?numero=$id");
}
else echo "eror";

?>