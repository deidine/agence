
<?php
include "../auth.php";

include "../database/connection.php";

$sql="SELECT * FROM client where current_date()=date ORDER BY (id)DESC ";
$res=mysqli_query($con,$sql);


?>
<html>
    <head>  
    <style>
        <?php include "../css/afficher.css";?>
    </style>   </head>
    <body><div class="nes">
        <form action="imaf.php" method="post">
<label>numero chauffeur</label><input type="number" placeholder="entrer le numero du chauffeur" required name="numero">
<label>numero voiture</label><input type="text" placeholder="entrer le numero du bus" required name="numerov">
    <label>numero du page imprimer عددالأسطر للطباعة</label><input type="number"  placeholder="entrer le numero du page" required name="numerop">

<input style="font-size:20px;" type="submit" value="طباعة كل الجدول"> <br></form> 
<form action="impticket.php" method="post">
 <label>nombre du ticket</label> <input type="number" name="p" required placeholder="entrer le nombre du ticket"><input type="submit" value="imprimer ticket">
  </div>
 <button> <a href="index.php"><img src="../log/back.gif">عودة</a></button>
   
        
<table border=1 width=90%>
        <tr>
            <th> numero chaise رقم المقعد</th>
            <th> nom الإسم</th>
            <th> prenom اللقب</th>
            <th> telephone الهاتف</th>
            <th>direction الوجهة</th>
            <th>date الوقت</th>
            <th colspan=2> action تعديل</th>

        </tr>
        <tr>
    <?php while($ligne=mysqli_fetch_assoc($res)) {?>
             <td><?php  echo $ligne['numero'];?></td>  
           <td><?php  echo $ligne['nom'];?></td>  
            <td><?php  echo $ligne['prenom'];?></td> 
            <td><?php  echo $ligne['telephone'];?></td>  
            <td><?php  echo $ligne['direction'];?></td>  
            <td><?php  echo $ligne['temp']."  ".$ligne['date'];?></td>  
            <td><button><a href="javascript:suprimer(<?php  echo $ligne['id'];?>)">حذف</a></button></td>  
<td><button><a href="edit.php?id=<?php echo $ligne['id'];?>">تغير</a></button></td>
           </tr>
           <?php };?>
</tr>
    </table><footer></footer>
</form>
<script>
function suprimer(id){
    if(confirm("tu veut vraiment suprmer?")){
        window.location='supImp.php?id='+id;
    }
}

</script></body>
</html>
<?php include "footer.html" ;?>

