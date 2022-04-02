<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM chauffeur where id=$id";
$res=mysqli_query($con,$sql) or die("la selectiones chouer");
$ligne=mysqli_fetch_assoc($res);
?>
<html>
    <head><title>enregistrer le proffesseur</title>
    <style>

        </style>
<link href="../css/5.css" rel="stylesheet">    
</head>
    <body><button><a href="afCh.php"><img src="../log/back.gif">RETOUR</a></button>
        <form action="modch.php" method="POST">
            <div class="c">
        id<br><input type="number" name="id" value="<?php echo $ligne['id'];?>" required><br>

nom<br><input type="text" name="nom" value="<?php echo $ligne['nom'];?>" required><br>
prenom<br><input type="text" name="prenom" value="<?php echo $ligne['prenom'];?>" required><br>
telephone<br><input type="number" name="telephone" value="<?php echo $ligne['telephone'];?>"required><br>
<input type="submit" value="enregistrer" ><input type="reset" value="annuler">
        </form></div>
    </body>
</html>