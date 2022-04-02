<?php
include "../auth.php";

include "../database/connection.php";

$sql="SELECT * FROM chauffeur";
$res=mysqli_query($con,$sql);

?>
<html>
    <head> <style>
        <?php include "../css/1.css";?>
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
    color:red;
 }
            </style>
</head>
<body>
<button> <a href="index.php"><img src="../log/back.gif">RETOUR</a></button>

<button style="float:right;"><a href="imptoutchauf.php">imprimer tous les chauffeurs</a></button>
<table border=1 width=90%>
<tr><th>numero</th>
<th>الإسم</th>
                <th>اللقب</th>
                <th>الهاتف</th>
              

                <th colspan=2>action</th>  <th>ملف السائق</th><td>imprimer 1 chauff</td>
</tr>


<?php while($row=mysqli_fetch_assoc($res)){?>
<tr>
<td><?php echo $row['numero'];?></td>
    <td><?php echo $row['nom'];?></td>
    <td><?php echo $row['prenom'];?></td>
    <td><?php echo $row['telephone'];?></td>
    
<td><button ><a href="javascript:suprimer(<?php echo $row['id'];?>)">حذف</a></button></td>
    <td><button ><a href="editch.php?id=<?php echo $row['id'];?>">تغير</a></button></td>
  
   
    <td><button><a href="folder.php?numero=<?php echo $row['numero'];?>">ملف السائق</a></button></td>
    <td><button style="color:blue;"><a style="color:blue;" href="impchov.php?id=<?php echo $row['id'];?>">imprimer</a></button></td>

 </tr> 

<?php
 };?></table>
<script> function suprimer(id){
   if( window.confirm('tu veut vraiment suprimer هل تريد حذف السائق')){

   window.location='supch.php?id='+id ;}


   
}</script>
<?php include "footer.html" ;?>
</body>
</html>
<!--
<td><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>	function sureToApprove(id){
			if(confirm("Are you sure you want to delete this car?")){
				window.location.href ='delete_car.php?id='+id;
			}!-->