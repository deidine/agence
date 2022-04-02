<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM voiture WHERE id=$id";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
?>

<html>
    <head><title>les bultain</title>
        
<link href="../css/6.css" rel="stylesheet">        
</head>
    <body>
        
        <a href="afVoit.php"><button><img src="../log/back.gif">RETOUR</button></a><div class="c">
        <form  action="modvoit.php" method="POST">
        <label>id </label><br>
           <input type="number" name="id" value="<?php echo $row['id'];?>" placeholder="entrer le numero du eleve ici" required ><br>

         <label>numero voiture </label><br>
           <input type="text" name="numero" value="<?php echo $row['numero'];?>" placeholder="entrer le numero du eleve ici" required ><br>

           <label>date ajouter voiture </label><br>
           <input type="text" name="date" value="<?php echo $row['date'];?>" placeholder="entrer le numero du eleve ici" required ><br>

            <label>marque</label><br>
            <input type="text" name="marque" value="<?php echo $row['marque'];?>"  placeholder="entrer le marque du bus ici" required><br>
      
            <input type="submit" value="enrgistrer" required> <input type="reset" value="annuler">
        </form> </div><br>
    </body>
</html>