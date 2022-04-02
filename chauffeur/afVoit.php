
<?php
include "../auth.php";

include "../database/connection.php";
$sql2="SELECT * FROM voiture order by (date) desc";
$res2=mysqli_query($con,$sql2);
$p=mysqli_num_rows($res2);
?>
<html>
    <head>  <style>
        <?php include "../css/4.css";?>
        button{
            background-color : white;
            border-radius: 20px ;
         font-size: large;
         }
         a{
    color : blue;
    text-decoration:unset;
 }
 
 a:hover{
    color:red;}
            </style>

</head>
    
    <body><button style="border-radius:12px;background-color:white;color:blue;">
<a href="index.php"><img src="../log/back.gif">عودة</a></button><br><br>  

<table width=90% border=1>
    <tr>
        <th>date </th>
        <th>الرقم التسلسلي للسيارة</th>
        <th>marque</th>

        <th>ملف السيارة</th>
        <th colspan=2>تغير</th>
    </tr>
    
        <?php
         while($row=mysqli_fetch_assoc($res2)){?>
            <tr> 
           
            
            <td><?php echo $row['date'];?></td>
            <td><?php echo $row['numero'];?></td>
            <td><?php echo $row['marque'];?></td>
            <td><button><a href="folderCar.php?numero=<?php echo $row['numero'] ;?>">ملف السيارة</a></button></td>
            <td><button ><a href="javascript:suprimer(<?php echo $row['id'] ;?>)">حذف</a></button></td>

        <td><button><a href="editvoit.php?id=<?php echo $row['id'] ;?>">تغير</a></button></td>
       </tr>
        
    <?php };?>
</table>
<?php include "footer.html" ;?>
<script> 
function suprimer(id){
    if(confirm("tu veut vraiment suprimer هل تريد حذف السيارة")){
        window.location='supvoit.php?id='+id;
    }
}</script>
</body>

    </html>