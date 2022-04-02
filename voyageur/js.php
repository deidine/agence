<?php
include "connection.php"; 

$sql="SELECT * FROM client  ORDER BY (id)DESC  ";
$res=mysqli_query($con,$sql);
$num=mysqli_num_rows($res);

$limit=100;
$numpag=ceil($num/$limit);

for($i=0;$i<=$numpag;$i++){
echo "<a href='js.php?id='.$np>". $i."</a>";}

?>
<html>
    <head> 
    <style>
        <?php include "../css/afficher.css";?>
      
    </style><title>enregistrement</title>
   </head>
    <body>

 <button style="background-color:red;font-size:20px;"> <a href="index.php"><img src="../log/back.gif">عودة</a></button>
   <div class="control"><?php echo  $control;?></div>

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
            <td><?php  echo $ligne['temp']." ".$ligne['date'];?></td>  
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
        window.location='suprimer.php?id='+id;
    }
}

</script>
    </body>
</html>