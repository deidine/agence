<?php
 
	include("../database/connection.php");
 
	$query=mysqli_query($con,"select count(id) from `clienttarder`");
	$row = mysqli_fetch_row($query);
 
	$lignes = $row[0];
 
	$ligne_limit = 100;
 
	$derieur = ceil($lignes/$ligne_limit);
 
	if($derieur < 1){
		$derieur = 1;
	}
 
	$numpage = 1;
 
	if(isset($_GET['pn'])){
		$numpage = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}
 
	if ($numpage < 1) { 
		$numpage = 1; 
	} 
	else if ($numpage > $derieur) { 
		$numpage = $derieur; 
	}
 
 
	$controler = '';
 
	if($derieur != 1){
 
	if ($numpage > 1) {
        $previous = $numpage - 1;
		$controler .= '<button><a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-default">السابق</a></button> &nbsp; &nbsp; ';
 
		for($i = $numpage-4; $i < $numpage; $i++){
			if($i > 0){
		        $controler .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
			}
	    }
    }
 
	$controler .= ''.$numpage.' &nbsp; ';
 
	for($i = $numpage+1; $i <= $derieur; $i++){
		$controler .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
		if($i >= $numpage+4){
			break;
		}
	}
 
    if ($numpage != $derieur) {
        $next = $numpage + 1;
        $controler .= ' &nbsp; &nbsp;<button> <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-default">التالي</a></button> ';
    }
	}

?>
<?php

include "../auth.php";


$limit = 'LIMIT ' .($numpage - 1) * $ligne_limit .',' .$ligne_limit;
 
$res=mysqli_query($con,"select * from `clienttarder` ORDER BY (id)DESC $limit");

?>
<html>
    <head>  
    <style>
            <?php include "../css/e.css";?>
            #control{
            margin-left: 620px;;
        }
      #control>button{
background-color:white;
font-size:20px;
color      :blue;
}
#control>a{
    color:blue;
}
        </style> 
   </head>
    <body>                    <div id="control"><?php echo $controler; ?></div>
<div class="nes">
       
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

