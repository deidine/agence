<?php 
        include "../auth.php";
        include "../database/connection.php";
       $sql4="SELECT * FROM message";
      $res4=mysqli_query($con,$sql4);
       $row4=mysqli_num_rows($res4);

        ?> 
<html>
    <head>         
       <style>
           <?php include "../css/d.css";?>
       </style>
 <title>maison</title></head>
    <body>
        
   <j class="tete"> <h3>bien veni ici c'est pour reserver et regarder une message ou kouli et tu peu le imprimer 
        أهلا بكم في موقع  <?php include "../database/nom.html";?> هنا يتم تسجيل الرسائل و عرضها و بامكانك أيضا أن تطبع الجدول </h3>
</j><br><br><br><br>
    <a href="../agence.php"><button><img src="../log/back.gif">RETOUR</button></a>
   
<br><br><br><br>
<div class="h"><fieldset><legend style="color:black;">
</legend>
        <table class="center" style="margin:auto;" width=30% height=50% paddiing=12px >
        <tr> <td><i style="color: black;font-size:20px;"> عرض كل الرسائل هنا</i><a href="afficher.php"><button class="jour"></button></a></td>
        <td><i style="color: black;font-size:20px;"> طباعة رسائل اليوم هنا</i><a href="affimp.php"><button class="imprimer"></button></a></td>
   </tr>
     <td colspan=2><i style="color: black;font-size:20px;">البحث عن رسالة هنا</pre><button><a href="chercl.php"><img style="width: 100%; height:100%;" onMouseOver="src='../log/image55.png'" onMouseOut="src='../log/image5.png'" src="../log/image5.png"> </a></td>

    </tr>
         </div> 
        </table></fieldset>
        
        <h1> أهلا بكم في موقع  <?php include "../database/nom.html";?></h1>
        <P> نحن الأفضل في مجال السفر بين الولايات مع نخبة من للسائقين المحتريف </P>
<ol class="l"><?php echo "<li>il y'a $row4 message dans l'agence</li>";?></ol>
        
    <footer>
        tout le drot reserver<br>
        <pre style="font-size:20px;">contacter nous 22102802</pre>

    </footer>
    </body>
</html>
<!--
     <tr> <td><i style="color: black;font-size:20px;"> عرض كل الرسائل هنا</i><button ><a href="afficher.php"><img  style="width: 60%; height:60%;" onMouseOver="src='../log/message1.png'" onMouseOut="src='../log/message.png'" src="../log/message.png"></a></td>
        <td><i style="color: black;font-size:20px;"> طباعة رسائل اليوم هنا</i><button ><a href="affimp.php"><img  style="width: 60%; height:60%;" onMouseOver="src='../log/message1.png'" onMouseOut="src='../log/message.png'" src="../log/message.png"></a></td>
   </tr>
     <td colspan=2><i style="color: black;font-size:20px;">البحث عن رسالة هنا</pre><button onmousedown="img1()"><a href="chercl.php"><img style="width: 100%; height:100%;" onMouseOver="src='../log/image55.png'" onMouseOut="src='../log/image5.png'" src="../log/image5.png"> </a></td>
