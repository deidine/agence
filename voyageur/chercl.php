
<?php
include "../auth.php";

include "../database/connection.php";
$cher="null";

if(isset($_POST['cherb'])){
    $cher=$_POST['nom'];}
$sql="SELECT * FROM client where nom like'%$cher%'";
$res=mysqli_query($con,$sql);

?>
<html>
    <head>  <style>
       <?php include "../css/afficher.css";?>
    </style>    </style><title>enrefisrement</title>
   </head>
    <body>
    <form method="POST">
        <input type="text" name="nom" size=30px placeholder="Rechercher..." > <input type="submit" value="بحث  " name="cherb">
    </form>    
    <script>
            function ok(){
                confirm("tu veut le suprimer" );
            }
            
        </script>
<table border=1 width=90%>
        <tr>
        <th>id</th>
            <th>الرقم</th>
            <th>الإسم</th>
            <th>اللقب</th>
            <th>الهاتف</th>
            <th>الوجهة</th>
            <th>الوقت</th>
            <th colspan=2>تعديل</th>

        </tr>
        <tr>
           <?php while($ligne=mysqli_fetch_assoc($res)) {?>
            <td><?php  echo $ligne['id'];?></td>  
            <td><?php  echo $ligne['numero'];?></td>  
           <td><?php  echo $ligne['nom'];?></td>  
            <td><?php  echo $ligne['prenom'];?></td> 
            <td><?php  echo $ligne['telephone'];?></td>  
            <td><?php  echo $ligne['direction'];?></td>  
            <td><?php  echo $ligne['temp'];?></td>  
            <td><button onMouseUp="ok();"><a href="suprimer.php?id=<?php  echo $ligne['id'];?>">حذف</a></button></td>  
<td><button><a href="edit.php?id=<?php echo $ligne['id'];?>">تغير</a></button></td>
           </tr>
           <?php };?>
</tr>
    </table><footer>
    <a href="index.php"><img src="../log/back.gif">عودة</a></footer>

    </body>
</html>
<?php include "footer.html" ;?>
