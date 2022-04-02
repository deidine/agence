
<?php
include "../database/connection.php";
$p=$_POST['numerop'];
$sql="SELECT * FROM client where current_date()=date ORDER BY (id)DESC limit $p";
$res=mysqli_query($con,$sql);
$num=$_POST['numero'];
$sql1="SELECT * FROM chauffeur where numero=$num ";
$res1=mysqli_query($con,$sql1);
$numv=$_POST['numerov'];
$sql2="SELECT * FROM voiture where numero='$numv' ";
$res2=mysqli_query($con,$sql2);
?>
<html>
    <head>  <link href="../css/n.css" rel="stylesheet"></head><body onload="window.print()">
        <?php include "../database/agence.html";?>
    <i> gare Routie ou point de collecte</i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <?php echo "-------------------------------------------";?><i  class="i"> المحطة الطرقية أو نقطة التجمع</i><br>
    <i>nom du rsponsable du gare </i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo "----------------------------------------------";?><i class="i"> إسم مسؤول المحطة  </i><br>
   
    <?php while($row2=mysqli_fetch_assoc($res2)){;?>
        <i> type du veicule</i>&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row2['marque'];?><i  class="iii"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp نوع السيارة </i><br>
    <i>numerodu voiture</i>&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row2['numero'];?><i  class="iii"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp رقم السيارة</i><br>

    
    <?php };?>
    <?php while($row1=mysqli_fetch_assoc($res1)){;?>
      <i>nom du chauffeur</i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row1['nom']."/".$row1['prenom'];?><i class="ii">إسم السائق</i><br>
    <i>numero tellephone du chauffeur</i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row1['telephone'];?><i class="ii">رقم هاتف السائق</i>
    
    <?php };?>
    <br><br>
 date du depare :<?php echo "-----------------";?>   وقت الإنطلاق<?php include "espace.html";?> destination: <?php echo "-----------------";?> الإتجاه<br>
        <table border=1 cellspacing=10 width=90%>
        <tr>
        <th>order التنظيم</th>

        <th>direction الإتجاه</th>
            <th>chaise numero  رقم المقعد</th>
            <th>telephone الهاتف</th>
            <th>liste de passageur إسم المسافر</th>
        </tr>
        <tr>
            
           <?php for($i=1;$i<100;$i++) 
           while($ligne=mysqli_fetch_assoc($res)) {?>
                 <td><?php echo $i++;?></td>
            <td><?php  echo $ligne['direction'];?></td>  
            <td><?php  echo $ligne['numero'];?></td>  
            <td><?php  echo $ligne['telephone'];?></td>  
<td><?php  echo $ligne['nom']."/   ".$ligne['prenom'];?></td>  
           </tr>
           <?php };?>
</tr>
    </table>

           </div>   </fieldset>
</body>

    </html>