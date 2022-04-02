<?php
include "../auth.php";

include "../database/connection.php";

$sql="SELECT * FROM clienttarder WHERE CURRENT_DATE()=temp ORDER BY (id)DESC ";
$res=mysqli_query($con,$sql);
$sql5="SELECT * FROM clienttarder";
$res5=mysqli_query($con,$sql5);
$n=mysqli_num_rows($res5);

?>
<html>
    <head> 
        <style>
            <?php include "../css/f.css";?>
        </style>  </head>
    <body >
 <button> <a href="index.php"><img src="../log/back.gif">عودة</a></button>
        <script>
            function suprimer(id){
                if(confirm("tu veut vraiment suprimer ?")){
                    location="suprimer.php?id="+id;
                }
            }
            </script>
<table border=1 width=90%>
<tr><th style="background-color:green;color:white;" colspan=9>  أضغط على أرسال التي في خانة اسم و هاتف الشخص و الوجهة لتسجيل المسافر في القائمة النهائية
cliquer sur envoiyer pour enregistrer un voyageur</th> </tr>      
<tr>
            
            <th> numero chaise رقم المقعد</th>
            <th> nom الإسم</th>
            <th> prenom اللقب</th>
            <th> telephone الهاتف</th>
            <th>direction الوجهة</th>
            <th>date الوقت</th>
            <th>envoyer </th>
            <th colspan=2> action تعديل</th>

        </tr>
        <tr>
    <?php
    while($ligne=mysqli_fetch_assoc($res)) {?>
       <form method="post">
       <td> <input checked type="checkbox" name="chkl0" required value="<?php  echo $ligne['numero'];?>"> <?php  echo $ligne['numero'];?></td>  
     <td><input checked type="checkbox" required name="chkl1" value="<?php  echo $ligne['nom'];?>"><?php  echo $ligne['nom'];?></td>  
            <td><input checked type="checkbox" required name="chkl2" value="<?php  echo $ligne['prenom'];?>"><?php  echo $ligne['prenom'];?></td> 
            <td><input checked type="checkbox" required name="chkl3" value="<?php  echo $ligne['telephone'];?>"><?php  echo $ligne['telephone'];?></td>  
            <td><input checked type="checkbox" required name="chkl4" value="<?php  echo $ligne['direction'];?>"><?php  echo $ligne['direction'];?></td>  
            <td><input checked checked type="checkbox" required name="chkl5" value="<?php  echo $ligne['temp']." ".$ligne['depart'];?>"><?php  echo $ligne['temp']." ".$ligne['depart'];?></td>  
        <td><button type="submit" value="ارسال"  name="envoiyer">ارسال</button></td></form>
            <td><button><a href="javascript:suprimer(<?php  echo $ligne['id'];?>)">حذف</a></button></td>  
    <td><button><a href="edit.php?id=<?php echo $ligne['id'];?>">تغير</a></button></td>
           </tr>
           <?php };?>
</tr>
    </table><footer></footer>


    </body>
</html>
<?php
@$chek1=$_POST['chkl1'];
@$chek2=$_POST['chkl2'];
@$chek3=$_POST['chkl3'];
@$chek4=$_POST['chkl4'];
@$chek5=$_POST['chkl5'];
@$chek0=$_POST['chkl0'];

if(isset($_POST['envoiyer'])){
   $sql="INSERT INTO `client`(nom,prenom,numero,telephone,direction,date) VALUES ('$chek1','$chek2',$chek0,$chek3,'$chek4','$chek5')";
 $res=mysqli_query($con,$sql);
 if($res) echo "<script>alert('لقد سجل في القائمة النهائية بنجاح ---- il est enregistrer dans le menu final ');</script>";
 else echo "<script>alert('لم يسجل في القائمة النهائية حدث خطأ ---- il n est pas enregistrer dans le menu final un faut');</script>";

}

?>
<?php include "footer.html" ;?>

