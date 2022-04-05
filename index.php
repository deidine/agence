</header>
<?php 
include "database/connection.php";
$sql1="SELECT * FROM client where CURRENT_DATE()=date";$sql3="SELECT * FROM message where CURRENT_DATE()=date";
        $res1=mysqli_query($con,$sql1);$res3=mysqli_query($con,$sql3);
        $row1=mysqli_num_rows($res1);$row3=mysqli_num_rows($res3);
                $sql8="SELECT * FROM clienttarder where CURRENT_DATE()=temp";
            $res8=mysqli_query($con,$sql8);
            $row8=mysqli_num_rows($res8);
        
     ?>     
        
<html lang="en">
<head>
   <style>
      <?php include"mov.css";?>
   </style>

   <title>bien venu</title>
</head>
<body>

 <div class="mov">  <img id="cc"  src="log/bus1.png" style="width:50px;height: auto;">
 <img src="log/walk.gif" id="ccc"  style="width:40px;height: auto;">
 </div><br><m id="a">أهلا بكم في موقع  <?php include "database/nom.html";?></m>
<button><a href="login.php">دخول</a></button><br><br>
    <div class="enregistrer">
        <table border=5 style="padding:20px;">
        <tr><td><i > voyageur ici تسجيل المسافرين هنا</i><a href="voyageur/enregistrer.php"><img  onMouseOver="src='log/vog11.png'" onMouseOut="src='log/vog1.png'" style="width: 100%; height:100%;" src="log/vog1.png"></a></td>
  <td><i>les messages  ci  تسجيل الرسائل هنا</i><a href="message/enregistrer.php"><img  style="width: 100%; height:100%;" onMouseOver="src='log/message1.png'" onMouseOut="src='log/message.png'" src="log/message.png"></a></td>
 </tr>       <td colspan=2><i > les reservation ici  تسجيل المسافرين المأجلين هنا</i><a href="reservation/enregistrer.html"><img  style="width: 100%; height:100%;" onMouseOver="src='log/ticet1.jpg'" onMouseOut="src='log/ticet.jpg'" src="log/ticet.jpg"></a></td>
    </tr>
        </table></div><br><br>
    <div  class="tab"><b style="font-size:20px;">   جدول اليوم table aujourdui</b>
<table  border=1 width=100% >
<tr><th>nombre du reservation aujourd'huit عدد الحاجزين اليوم<th>nombre du voyageur عدد المسافرين اليوم</th><th>nombre du message عدد الرسائل اليوم</th>
        </tr>
        <tr><td><?php echo $row8;?></td><td><?php echo $row1;?></td><td><?php echo $row3;?></td></tr>
</table> </div>
</body>
</html>