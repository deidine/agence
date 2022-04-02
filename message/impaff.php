<?php
include "../database/connection.php";
$p=$_POST['numerop'];
$num=$_POST['numero'];
$numv=$_POST['numerov'];
$sql="SELECT * FROM message where current_date()=date ORDER BY (id) DESC limit $p ";
$res=mysqli_query($con,$sql);
$sql1="SELECT * FROM  chauffeur where numero=$num ";
$sql2="SELECT * FROM voiture where numero='$numv'";
$res1=mysqli_query($con,$sql1);
$res2=mysqli_query($con,$sql2);
?>
<html>
    <head><link href="../css/c.css" rel="stylesheet"> </head>
    <body onload="window.print()">
 <?php include "../database/agence.html";?><br><br>
    <fieldset style="width:40%;margin:auto;"><b><h3>MANIFESTE DU BAGAGE  بيانات الشحن</h3></b></fieldset>
   <h3> 
   
    <?php while($row1=mysqli_fetch_assoc($res2)){;?>.--------
   <?php echo $row1['numero']."-------:رقم السيارة";?>  .---------
    
    <?php };?>    <?php while($row1=mysqli_fetch_assoc($res1)){;?>
   <?php echo $row1['nom']."/".$row1['prenom'];?>
    <?php };?>
    ------:الذهاب-----------------------------.:مكان الوصول:-------------------------. إسم السائق </h3>
<table width=100% border=1>
<th>numero الرقم</th>
    <th>le nom du rssevoir المرسل اليه</th>
    <th>telephone الهاتف</th>
    <th>l'envoiyeur المرسل</th>
    <th>type du message نوعية الكولي</th>
    <th>le nombre du message عدد الكولي</th>
    <th>la prix السعر</th>
<?php for($i=1;$i<100;$i++) 
while($row=mysqli_fetch_assoc($res)){?>
<tr><td><?php  echo $i++?></td>

<td><?php echo $row['nom'];?></td>
<td><?php echo $row['telephone'];?></td>
<td><?php echo $row['envoiyeur'];?></td>
<td><?php echo $row['message'];?></td>
<td><?php echo $row['nombremessage'];?></td>
<td><?php echo $row['prix'];?></td>


</tr>
<?php };?>
</table>
</body>
</html>


