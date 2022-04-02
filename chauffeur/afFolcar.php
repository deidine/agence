
<?php
include "../database/connection.php";
$nummero=$_GET['numero'];
@$a=$_POST['a'];

$sql4="SELECT bus_argent.* FROM bus_argent JOIN voiture ON voiture.numero='$nummero' and voiture.numero=bus_argent.numero order by bus_argent.date desc limit 100";
$res4=mysqli_query($con,$sql4);

$sql5="SELECT bus_argent.* FROM bus_argent JOIN voiture ON voiture.numero='$nummero' and voiture.numero=bus_argent.numero order by bus_argent.date  desc limit $a";
$res5=mysqli_query($con,$sql5);
?>


<html>
    <head>
      <style>
        <?php include "../css/2.css";?>
      </style>
</head>
<body><h class="h"> لتجد النتيجة  calculer إذا كنت تريد أن تعرف المبلغ الذي حصله الباص أنظر إلى اخر وقت أو إلى اخر تاريخ أبدأ عد الأسطر ثم أكتبها في خانة الحساب وأضغط على 
</h><div class="cal"><form action="afFolcar.php?numero=<?php echo $nummero;?>" method="post">
<label> أكتب عدد الأسطر التي تريد حسابها</label><input type="number" name="a" required><br>
    <button type="submit" style="background-color:green;color:white;margin-top:8px;padding:12px;margin-left:60px;" name="calculer" value="calculer" onclick="cal();">calculer</button></form></div>
<button> <a href="folderCar.php?numero=<?php echo "$nummero";?>"><img src="../log/back.gif">RETOUR</a></button>

<?php 

$sql0="SELECT bus_argent.* FROM bus_argent JOIN voiture ON voiture.numero='$nummero' and voiture.numero=bus_argent.numero order by bus_argent.date desc limit 100";
$res0=mysqli_query($con,$sql0);
$z=mysqli_fetch_assoc($res0);
?><div style="margin-left:1000px;">
 حذف كل الجدول<button><a href="javascript:suprimer(<?php echo $z['numero_bus'];?>)">حذف</a></button>
</div>
<table border=1 class="tab" width=90%>
<tr><th>numero رقم لوحة الباص</th>
               
                <th>temps التاريخ</th>
  <th>commentaire تعليق</th>
                <th>argent المبلغ</th>
                <th>numero</th>
</tr>
<?php  if(isset($_POST['calculer'])){ $c=0;
while($row5=mysqli_fetch_assoc($res5) ){
  @  $row4['argent'];
 @       $a=array($row5['argent']); $d=array_sum($a); $c+=$d; 
   }  echo "<o class='i'>".$c." ougiya"."</o>";
  }?>
<?php while($row4=mysqli_fetch_array($res4) ){?>

<td><?php echo $row4['numero'];?></td>
<td><?php echo $row4['date'];?></td>

<td><b class="com"><?php echo $row4['commentaire'];?></b></td>
<td><?php echo $row4['argent'];?></td>
</tr>

<?php } ?></table>
<script> function suprimer(id){
   if( window.confirm('tu veut vraiment suprimer هل تريد حذف السائق')){

   window.location='vidervoit.php?numero='+id ;}


   
}</script>

</body></html>



