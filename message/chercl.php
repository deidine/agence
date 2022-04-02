
<?php
include "../auth.php";

include "../database/connection.php";
$cher="null";

if(isset($_POST['cherb'])){
    $cher=$_POST['nom'];}
$sql="SELECT * FROM message where nom like'%$cher%'";
$res=mysqli_query($con,$sql);

?>
<html>
    <head>  <style>
       <?php include "../css/afficher.css";?>
    </style>     </style><title>enrefisrement</title>
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

<table width=100% border=1>
    <th>numero الرقم</th>
    <th>le nom du rssevoir المرسل اليه</th>
    <th>telephone الهاتف</th>
    <th>l'envoiyeur المرسل</th>
    <th>type du message نوعية الكولي</th>
    <th>le nombre du message عدد الكولي</th>
    <th>la prix السعر</th>
<?php
while($row=mysqli_fetch_assoc($res)){?>
<tr><td><?php echo $row['id'];?></td>

<td><?php echo $row['nom'];?></td>
<td><?php echo $row['telephone'];?></td>
<td><?php echo $row['envoiyeur'];?></td>
<td><?php echo $row['message'];?></td>
<td><?php echo $row['nombremessage'];?></td>
<td><?php echo $row['prix'];?></td>


</tr>
<?php };?></table><footer>
    <a href="index.php"><img src="../log/back.gif">عودة</a></footer>

    </body>
</html>
