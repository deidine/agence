<?php 
       
       include "../auth.php";?>
<html>
    <head>      <style>
        <?php include "../css/11.css";?> </style>  
 <title>maison</title></head>
    <body>
        
   <j class="tete"> <h3>bien veni ici c'est pour reserver une voiture ou un chauffeur et tu peut le regarder
        tout les information qui le conserne et dans le dossier du voiture et
       le dossier du chauffeur il existe l'argent est les tranaction 
       أهلا بكم في موقع <?php include "../database/nom.html";?> هنا يتم تسجيل و عرض كل السائقين و الباصات وفي ملف السيارة و السائق يوجد المبالغ النقدية
       
   </h3>
</j>


    <a href="../agence.php"><button style="color:black;margin-top:70px;"><img src="../log/back.gif">RETOUR</button></a>
<h1> أهلا بكم في موقع  <?php include "../database/nom.html";?></h1>
<div class="h"><fieldset><legend style="color:black;">
</legend>
        <table class="center" style="margin:auto;" width=30% height=50% paddiing=12px >
        <tr><td><i style="color: black;font-size:20px;">تسجيل السيارة هنا</i><a href="envoit.php"><button class="en_voit"></button></a></td>
        <td><i style="color: black;font-size:20px;">تسجيل السائق هنا</i><a href="enchof.html"><button class="en_chauf"></button></a></td></tr>
  <tr>   <td> <i style="color: black;font-size:20px;">عرض كل السائقين هنا</i><a href="afCh.php"><button class="af_chauf"></button></a></td>
        <td><i style="color: black;font-size:20px;"> عرض كل السيارات هنا</i><a href="afVoit.php"><button class="af_voit"></button></a></td></tr>
         </div> 
        </table></fieldset>
        
        
        <?php 
       
        include "../database/connection.php";
       $sql4="SELECT * FROM chauffeur";
      $res4=mysqli_query($con,$sql4);
       $row4=mysqli_num_rows($res4);
        ?> <ol class="l"><?php echo "<li>il y'a $row4 chauffeur dans l'agence</li>";?></ol>
        
    <footer>
       <br>
        <pre style="font-size:20px;"> tout le drot reserver 22102802</pre>

    </footer>
    </body>
</html>