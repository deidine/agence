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

$sql="SELECT * FROM chauffeur";
$res=mysqli_query($con,$sql);

?>
<html>
    <head> <style>
       body{
            background-size:100% 100%;
            background-repeat:no-repeat;
            background-image:url(log/agence.png);
            background-color: chartreuse;
        }    
        table{
            height: 50px;
            font-size:20px;
            border:1px solid ;
            border-collapse:collapse;
            background-color:gold;

        }
        th,td{
            border:1px solid;
            
        }
       td{
           color : blue;
       }
       a{
           color : gold;
           text-decoration:unset;
       }
       a:hover{
           color:white;
       }
       a:visited{
           color:chocolate;
       }
       button{
           background-color : whitesmoke;
           border-radius: 9px ;
           font-size:20px;

       }
    </style></head>
<body>
<button> <a href="agence.php"><img src="log/back.gif">عودة</a></button>
<td><button style="color:blue;"><a style="color:blue;" href="impEmp.php"> طباعة كل السائقين</a></button>


<table border=1 width=90%>
<tr><th>id</th>
<th>الإسم</th>
<th>اللقب</th>
<th>الإثنين</th>
<th>الثلثاء</th>
<th>الأربعاء</th>
<th>الخميس </th>
<th>الجمعة</th>
<th>تغير</th>
<th>حذف</th>
</tr>

<?php while($row=mysqli_fetch_assoc($res) ){?>
<tr>
<td><?php echo $row['id'];?></td>

    <td><?php echo $row['nom'];?></td>
    <td><?php echo $row['prenom'];?></td>
    <td><?php echo $row['lundi'];?></td>
    <td><?php echo $row['mardi'];?></td>
    <td><?php echo $row['mercredi'];?></td>
    <td><?php echo $row['jedui'];?></td>
    <td><?php echo $row['vandredi'];?></td>
    <td><button><a href="editemp.php?id=<?php echo $row['id'];?>">تغير</td>
    <td><button><a href="imp1emp.php?id=<?php echo $row['id'];?>">حذف</td>

</tr>
<?php };?>
</table>
<?php include "footer.html" ;?>
</body>
</html>