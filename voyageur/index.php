
<html>
    <head>         
       
 <link href="../css/o.css" rel="stylesheet"><title>maison</title></head>
    <body>
        
   <j class="tete"> <h3>bien veni ici c'est pour enregistrer des voyageurs qui vont aller aujourdui 
       أهلا بكم في موقع  <?php include "../database/nom.html";?> هنا يتم تسجيل أو حجز للمسافرين الذين يريدون الذهاب  اليوم</h3>
</j><br><br><br><br>
    <a href="../agence.php"><button><img src="../log/back.gif">RETOUR</button></a>


<div class="h"><fieldset><legend style="color:black;">
</legend>
        <table class="center" style="margin:auto;" width=30% height=50% paddiing=12px >
   <tr><td><i style="color: black;font-size:20px;">طباعة المسافرين اليوم هنا</i><button onmousedown="img1()"><a href="affImp.php"><img  style="width: 100%; height:100%;" onMouseOver="src='../log/vog11.png'" onMouseOut="src='../log/vog1.png'" src="../log/vog1.png"></a><br></td>
    

    <td><i style="color: black;font-size:20px;">عرض كل المسافرين هنا</i><button onmousedown="img1()"><a href="afficher.php"><img  style="width: 100%; height:100%;" onMouseOver="src='../log/vog11.png'" onMouseOut="src='../log/vog1.png'" src="../log/vog1.png"></a><br></td>
<tr><td colspan=2><i style="color: black;font-size:20px;"> البحث عن مسافر هنا</pre><button onmousedown="img1()"><a href="chercl.php"><img style="width: 100%; height:100%;" onMouseOver="src='../log/image55.png'" onMouseOut="src='../log/image5.png'" src="../log/image5.png"> </a></td></tr>

          </div> 
        </table></fieldset>

        <h1> أهلا بكم في موقع التيسير</h1>
        <P> نحن الأفضل في مجال السفر بين الولايات مع نخبة من للسائقين المحتريف </P>
 
        <?php 
include "../auth.php";
include "../database/connection.php";
       $sql4="SELECT * FROM client";
      $res4=mysqli_query($con,$sql4);
       $row4=mysqli_num_rows($res4);
        ?> <ol class="l"><?php echo "<li>il y'a $row4 voyageur dans l'agence</li>";?></ol>
        
    <footer>
        tout le drot reserver<br>
        <pre style="font-size:20px;">contacter nous 22102802</pre>

    </footer>
    </body>
</html>






