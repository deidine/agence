<?php

include "../database/connection.php";
$nummero=$_GET['numero'];
@$a=$_POST['a'];

$sql4="SELECT chauf_depence.* FROM chauf_depence JOIN chauffeur ON chauffeur.numero=$nummero and chauffeur.numero=chauf_depence.numero order by chauf_depence.temp desc limit 100";
$res4=mysqli_query($con,$sql4);

$sql5="SELECT chauf_depence.* FROM chauf_depence JOIN chauffeur ON chauffeur.numero=$nummero and chauffeur.numero=chauf_depence.numero order by chauf_depence.temp desc limit $a";
$res5=mysqli_query($con,$sql5);
?><html>
<head>
   <link href="../css/3.css" rel="stylesheet">
</head>
<body> 
<h class="h">  لتجد النتيجة  calculer إذا كنت تريد أن تعرف المبلغ المالي الذي أخذه السائق أنظر إلى اخر وقت أو إلى اخر تاريخ أبدأ عد الأسطر ثم أكتبها في خانة الحساب وأضغط على 
</h><div class="cal"><form action="afFolChauf.php?numero=<?php echo $nummero;?>" method="post">
<label> أكتب عدد الأسطر التي تريد حسابها</label><input type="number" name="a" required><br>
<button type="submit" style="background-color:green;color:white;margin-top:8px;padding:20px 12px;margin-left:60px;" name="calculer" value="calculer" >calculer</button>
</form></div>  
  

<button>
<a href="folder.php?numero=<?php echo "$nummero";?>"><img src="../log/back.gif">RETOUR</a></button>
<?php  if(isset($_POST['calculer'])){ $c=0;
while($row5=mysqli_fetch_assoc($res5) ){
  @  $row4['montant'];
 @       $a=array($row5['montant']); $d=array_sum($a); $c+=$d; 
   } echo "<o class='i'>".$c." ougiya"."</o>";
   
    }?>
  <div style="margin-left:1000px"> حذف كل الجدول <button ><a href="javascript:suprimer(<?php echo $nummero;?>)">حذف</a></button>
   </div>
 <table border=1 class="tab" width=90%>
<tr><th>numero رقم السائق</th>
               
                <th>temps الوقت</th>
  <th>commentaire تعليق</th>
                <th>monatnt المبلغ المالي</th>
</tr>

<?php while($row4=mysqli_fetch_assoc($res4) ){?>

<td><?php echo $row4['numero'];?></td>
<td><?php echo $row4['temp'];?></td>

<td><b class="com"><?php echo $row4['commentaire'];?></b></td>
<td><?php echo $row4['montant'];?></td>

  
</tr>
<?php };?>
</table>
<script> function suprimer(id){
   if( window.confirm('tu veut vraiment suprimer هل تريد حذف السائق')){

   window.location='vider.php?numero='+id ;}


   
}</script>

</body></html>