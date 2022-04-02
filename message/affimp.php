<?php
include "../auth.php";

include "../database/connection.php";
@$page=$_GET['page'];
if($page==0 || $page==1){
    $next=0;
}
else {
    $next=($page*100)-100;
}
$sql="SELECT * FROM message where CURRENT_DATE()=date order by(id) desc limit $next,100";
$res=mysqli_query($con,$sql);
$sql1="SELECT * FROM message ";
$res1=mysqli_query($con,$sql1);
$num=mysqli_num_rows($res1);
$a=$num/100;
$a=ceil($a);
?>
<html>
    <head>
<link href="../css/a.css" rel="stylesheet">        
</head>
    <body>  
   <div class="nes"> <form action="impaff.php" method="post">
<label>numero chauffeur</label><input type="number" placeholder="entrer le numero du chauffeur" required name="numero">
<label>numero voiture</label><input type="text" placeholder="entrer le numero du bus" required name="numerov">
    <label>numero du page imprimer عددالأسطر للطباعة</label><input type="number"  placeholder="entrer le numero du page" required name="numerop">

<input style="font-size:20px;" type="submit" value="طباعة كل الجدول"> <br></form> 
<form action="impticmes.php" method="post">
 <label>nombre du ticket</label> <input type="number" name="p" required placeholder="entrer le nombre du ticket"><input type="submit" value="imprimer ticket">
</form>  </div>

  <a href="index.php"><button><img src="../log/back.gif">RETOUR</button></a>

<table width=100% border=1>
   <tr> <th>date التاريخ</th>
    <th>numero الرقم</th>

    <th>le nom du rssevoir المرسل اليه</th>
    <th>telephone الهاتف</th>
    <th>l'envoiyeur المرسل</th>
    <th>type du message نوعية الكولي</th>
    <th>le nombre du message عدد الكولي</th>
    <th>la prix السعر</th></tr>
<?php
while($row=mysqli_fetch_assoc($res)){?>
<tr><td><?php echo $row['date'];?></td>

<td><?php echo $row['id'];?></td>

<td><?php echo $row['nom'];?></td>
<td><?php echo $row['telephone'];?></td>
<td><?php echo $row['envoiyeur'];?></td>
<td><?php echo $row['message'];?></td>
<td><?php echo $row['nombremessage'];?></td>
<td><?php echo $row['prix'];?></td>


</tr>
<?php };?></table>

<?php /* $sql="SELECT * FROM message ";
$res=mysqli_query($con,$sql);
$num=mysqli_num_rows($res);
$a=$num/20;
$a=ceil($a);
echo "<br><br>";
for($i=1;$i<=$a;$i++){
?><a href="afficher.php?page=<?php echo $i;?>" style="text-decoration:unset;"><?php echo $i;?> <?php

}*/?>
</body>
</html>
<?php
echo "<br><br>";
echo "<br><br>";
echo "<br><br>";
echo "<img style='background-color:white; ' src='../log/left.png'>";

for($i=1;$i<=$a;$i++){
?><button><a href="affimp.php?page=<?php echo $i;?>" style="text-decoration:unset;"><?php echo $i;?></a></button> <?php
}
echo "<img style='background-color:white;' src='../log/right.png'>";


?>