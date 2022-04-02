<?php
 
	include("../database/connection.php");
 
	$query=mysqli_query($con,"select count(id) from `client`");
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
 
$res=mysqli_query($con,"select * from `client` ORDER BY (id)DESC $limit");


?>
<html>
    <head> 
    <style>
        <?php include "../css/afficher.css";?>
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
    </style><title>enregistrement</title>
   </head>
    <body><div class="nes">
	

        <form action="imprimer.php" method="post">
<label>numero chauffeur</label><input type="number" placeholder="entrer le numero du chauffeur" required name="numero">
<label>numero voiture</label><input type="text" placeholder="entrer le numero du bus" required name="numerov">
    <label>numero du page imprimer عددالأسطر للطباعة</label><input type="number"  placeholder="entrer le numero du page" required name="numerop">

<input style="font-size:20px;" type="submit" value="طباعة كل الجدول"> <br></form> 
    </div>
 <button> <a href="index.php"><img src="../log/back.gif">عودة</a></button>
   
        <div id="control"><?php echo $controler; ?></div>
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
<?php include "footer.html" ;?>

