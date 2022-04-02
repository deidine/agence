<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM chauffeur WHERE id=$id";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
?>
<html>
<head> <style>
        body{

            background-color: chartreuse;
        }
        input[type=text]{
            font-family: fantasy;
            color:rgb(111, 0, 255);
            border-radius: 20px ;
            width: 200px;
            height: 30px;

        }
        
        input[type=number]{
            font-family: fantasy;
            color:rgb(157, 255, 0);
            border-radius:  20px ;
            width: 200px;
            height: 30px;
        }
       
        
        
        input[type=submit], [type=reset]{
            font-family: fantasy;
            color:rgb(255, 166, 0);
            border-radius: 20px ;
            width: 100px;
            height: 30px;
        }
        input[type=submit], [type=reset]:hover{
            font-family: fantasy;
            color:rgb(68, 0, 255);
            border-radius: 20px ;
        }
        input[type=submit], [type=reset]:visited{
            font-family: fantasy;
            color:darkorange;
            border-radius: 20px ;
        }
        .c{
            margin :auto;
text-align: center;
color:darkblue;
background-color: darkkhaki;
height :95%;
width: 30%;
border-radius:30px;
        }
        a{
            text-decoration:unset;
            text-align: center;
            margin-left: 50%;
        }
     
        label{
            font-size: 20px;
        }
        button{
            background-color: whitesmoke;
            border-radius:16px;
            width:80px;
        }
            
    </style><title>emploi du temp</title></head>
<body>
   <a href="afemp.php"> <button><img src="../log/back.gif">RETOUR</button></a>
<div class="c">
    <form action="modemp.php" method="POST">
    <p>id</p><input type="number" name="id" value="<?php echo $row['id'];?>" >

        <p>nom</p><input type="text" name="nom" value="<?php echo $row['nom'];?> " required placeholder="entrerlenom du prof">
       <p> lundi</p><input type="text" value="<?php echo $row['lundi'];?> " name="lundi" required >
       <p> mardi</p><input type="text" name="mardi" value="<?php echo $row['mardi'];?> " required >
       <p> mercredi</p><input type="text" value="<?php echo $row['mercredi'];?> " name="mercredi" required >
       <p> jeudi</p><input type="text" value="<?php echo $row['jedui'];?> " name="jeudi" required >
       <p> vandredi</p><input type="text" value="<?php echo $row['vandredi'];?> " name="vandredi" required ><br>
<p><input type="submit" value="envoiyer" > 
    </p></form></div>
</body>