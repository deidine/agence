
<html>
    <head>         
      <style>
          <?php include "../css/g.css";?>
      </style> 
 <title>maison</title></head>
    <body>
   <j class="tete"> <h3>bien veni ici c'est pour reserver un voyageur son aller
        أهلا بكم في موقع  <?php include "../database/nom.html";?> هنا يتم تسجيل أو حجز للمسافرين الذين يريدون الذهاب في وقت اخر</h3>
</j>
<br><br><br><br>    <a href="../agence.php"><button><img src="../log/back.gif">RETOUR</button></a>

<div class="h"><fieldset><legend style="color:black;">
</legend>
<a  href="affclret.php"><button  class="left"><i class="left_a">عرض كل المسافرين المؤجلين  هنا </i></button></a>
        <table class="center" style="margin:auto;" width=40% height=50% paddiing=12px >
        
<tr><td><i style="color: black;font-weigth:200px;font-size:20px;"> عرض المسافرين المؤجلين الى اليوم  هنا</i><a href="afficher.php"><button class="afficher_image"></button></a><br></td>
<td><i style="color: black;font-size:20px;">البحث عن مسافر هنا</pre><a href="chercl.php"><button class="chercher"></button> </a></td></tr>
        </tr>
          </div> 
        </table></fieldset>

<?php 
        
        include "../auth.php";

        include "../database/connection.php";
            $sql1="SELECT * FROM clienttarder where CURRENT_DATE()=temp";
            $res1=mysqli_query($con,$sql1);
            $row4=mysqli_num_rows($res1);
            
     ?>     
     <ol class="l"><?php echo "<li>il y'a $row4 reservation dans l'agence</li>";?></ol>
 
    <footer>
        tout le drot reserver<br>
        <pre style="font-size:20px;">contacter nous 22102802</pre>

    </footer>
    </body>
</html>






