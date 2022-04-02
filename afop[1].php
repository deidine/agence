<?php

session_start();
if(isset($_SESSION['username'])){}else header("location:../index.php");
include "database/connection.php";
$sql6="SELECT * FROM opinion ";
$res6=mysqli_query($con,$sql6);
$num=mysqli_num_rows($res6);
mysqli_close($con);

?>
<html>
    <head>
        <style>
         
ul{
    margin-right:72%;
    font-style:italic;
color:brown;
background-color:whitesmoke;
border-radius:12px;
    font-size:25px;
    width: 96%;
}   
body{
    background-image:url(log/agence.png);
background-repeat:no-repeat;
background-size:100% 100%;

}
            </style>
    </head>
    <body>
    <a href="agence.php"><img src="log/back.gif">RETOUR</a>

<div ><ul>
    <?php    

while($row6=mysqli_fetch_assoc($res6)){
    ?>
<li ><pre>
    <?php echo $row6['email'];?><-><?php echo $row6['nom'];?> :<?php echo $row6['opinion'];
?></pre></li>
   <?php } ;?>
</ul></div>
</body>
</html>