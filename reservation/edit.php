<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM clienttarder WHERE id=$id";
$res=mysqli_query($con,$sql);
$ligne=mysqli_fetch_assoc($res);
?>
<html>
    <head><title>enrefisrement</title>
    <link href="../css/i.css" rel="stylesheet">
   </head>
    <body><div class="c">
        <form action="modifier.php" method="POST">
        <label>id</label> <br><input type="number" name="id" value="<?php echo $ligne['id'];?>" required><br><br>
        <label>numero</label> <br><input type="number" name="numero" value="<?php echo $ligne['numero'];?>" required><br><br>
        <label>direction</label> <br><input type="text" name="direction" value="<?php echo $ligne['direction'];?>" required><br><br>
<label>nom</label> <br><input type="text" name="nom" value="<?php echo $ligne['nom'];?>" required><br><br>
<label>le temps</label><br><input name="temp" type="text" value="<?php echo $ligne['temp'];?>" required><br><br>
 <label>prenom</label><br><input type="text" name="prenom" value="<?php echo $ligne['prenom'];?>"><br><br>
            <label>telephone</label><br> <input type="number" name="telephone" value="<?php echo $ligne['telephone'];?>" ><br><br>
 
<input type="submit" value="editer">
        </form></div>
        <br>
        <a href="afficher.php"><button><img src="../log/back.gif">RETOUR</button></a><div class="a">

    </body>
</html>
