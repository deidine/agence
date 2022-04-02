

<?php
 
 include("../database/connection.php");

 $query=mysqli_query($con,"select count(id) from `message`");
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

 
 $limit = 'LIMIT ' .($numpage - 1) * $ligne_limit .',' .$ligne_limit;
  
 $res=mysqli_query($con,"select * from `message` ORDER BY (id)DESC $limit");
  
?>
<html>
    <head>
        <style>#control{
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
            <?php include "../css/a.css";?>
        </style>
</head>
    <body>  
   <div class="nes"> <form action="impmes.php" method="post">
<label>numero chauffeur</label><input type="number" placeholder="entrer le numero du chauffeur" required name="numero">
<label>numero voiture</label><input type="text" placeholder="entrer le numero du bus" required name="numerov">
    <label>numero du page imprimer عددالأسطر للطباعة</label><input type="number"  placeholder="entrer le numero du page" required name="numerop">

<input style="font-size:20px;" type="submit" value="طباعة كل الجدول"> <br></form>  </div>
<a href="index.php"><button><img src="../log/back.gif">RETOUR</button></a>
   <div id="control"><?php echo $controler; ?></div>

<table width=100% border=1>
    <th>numero الرقم</th>
    <th>le nom du rssevoir المرسل اليه</th>
    <th>telephone الهاتف</th>
    <th>l'envoiyeur المرسل</th>
    <th>type du message نوعية الكولي</th>
    <th>le nombre du message عدد الكولي</th>
    <th>la prix السعر</th>
    <th colspan=2>action</th>
<?php
while($row=mysqli_fetch_assoc($res)){?>
<tr><td><?php echo $row['id'];?></td>

<td><?php echo $row['nom'];?></td>
<td><?php echo $row['telephone'];?></td>
<td><?php echo $row['envoiyeur'];?></td>
<td><?php echo $row['message'];?></td>
<td><?php echo $row['nombremessage'];?></td>
<td><?php echo $row['prix'];?></td>
<td><button><a href="javascript:suprimer(<?php echo $row['id'];?>)">suprimer</a></button></td>
<td><button><a href="edit.php?id=<?php echo $row['id'];?>">changer</a></button></td>

</tr>
<?php };?></table>
<script>
    function suprimer(id){
        if(confirm("tu veut vrziment suprimer?")){
            location="suprimer.php?id="+id;
        }
    }
</script>

</body>
</html>
