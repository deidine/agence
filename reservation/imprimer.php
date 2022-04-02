
<?php
include "../database/connection.php";
$p=$_POST['numerop'];
$sql="SELECT * FROM client ORDER BY (id)desc LIMIT $p";
$res=mysqli_query($con,$sql);
include "connection.php";
$num=$_POST['numero'];
$sql1="SELECT * FROM chauffeur where numero=$num ";
$res1=mysqli_query($con,$sql1);
$numv=$_POST['numerov'];
$sql2="SELECT * FROM voiture where numero='$numv' ";
$res2=mysqli_query($con,$sql2);
?>
<html>
    <head>  <style>
    
        fieldset{
            height:50%;
        }
        table{
            height: 50px;
            font-size:20px;
            border:1px solid ;
            border-collapse:collapse;

        }
        th,td{
            border:1px solid;
            
        }
        .p{
            margin-left:70%;
            margin-bottom:0px;
            margin-top:2px;
        }
        .i{
            margin-left:100px;
        }
        .ii{
            margin-left:300px;
        }
        .iii{
            margin-left:400px;
        }
      
      
        i{font-size:20px;}
       .r{
            margin-left:50%;    
        }
        .a{
            font-size:20px;
            margin:auto;
        }
        .tab{
            border:unset;
        }
.imp{
    height:1%;
    font-size:15px;
    padding:10px;
    font-weight:142px;
}
    </style></head><body onload="window.print()">
        <table  class="imp"width=100% border=0>
        <tr >
            <td><h1>teyssir transport</h1>
                <h4>noikchott Akjojt- Atar- Nouidhibou Zoueirat</h4>
                22 10 28 02/22 34 79 92/41 30 23 33
            </td><td><img src="../log/teyssir.png"></td>
            <td><h1>وكالة التيسير</h1>
               <h4>أنواكشوط -أطار -أنواذيبوا -أزويرات-أكجوجت </h4>
                22 10 28 02/22 34 79 92/41 30 23 33
            </td></td>
    </tr></table>
    <i> gare Routie ou point de collecte</i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <?php echo "-------------------------------------------";?><i  class="i"> المحطة الطرقية أو نقطة التجمع</i><br>
    <i>nom du rsponsable du gare </i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo "----------------------------------------------";?><i class="i"> إسم مسؤول المحطة  </i><br>
   
    <?php while($row2=mysqli_fetch_assoc($res2)){;?>
    <i> type du veicule</i>&nbsp&nbsp&nbsp<?php echo $row2['marque'];?><i  class="iii"> نوع السيارة </i><br>
    <i>numerodu voiture</i>&nbsp&nbsp&nbsp<?php echo $row2['numero'];?><i  class="iii"> رقم السيارة</i><br>

    
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