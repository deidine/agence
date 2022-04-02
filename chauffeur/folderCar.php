<?php
include "../database/connection.php";
$nummero=$_GET['numero'];
$sql="SELECT * FROM voiture where numero='$nummero'";
$res=mysqli_query($con,$sql);

?>

<html>
    <head> 
        <link href="../css/9.css" rel="stylesheet">
        <style>
        #a{
    position:relative;
    animation: a 15s infinite;
}
@keyframes a{
    0%{right:0%;}
    100%{right:40%;}
}
     
            </style>
    </head>
<body>
    <button> <a href="afVoit.php"><img src="../log/back.gif">RETOUR</a></button>
<button id="a" style="margin-left:70%;width: auto;height:auto;background-color:gold; "> <a href="afFolcar.php?numero=<?php echo "$nummero";?>"style="color:black;width:auto;height:auto;">afficher le tableau <img src="q.gif">عرض جدول الباص</a></button>

<p style="font-size:40px;color:black;background-color:white;"> أكتب المبلغ الذي أعطاه الباص مع ذكر التاريخ و رقم لوحة الباص </p>

<?php while($row=mysqli_fetch_assoc($res) ){?>
    <p style="margin-left:900px;font-size:20px;background-color:green;">هذه بطاقة تعريفية عن الباص
</P> <div class="chauf">
<img style="height:40%;width:30%;" src="../log/bus1.png">
<div class="m">
<pre>رقم لوحة الباصnumero  :<?php echo $row['numero'];?></pre>
    <pre>ماركة الباص :<?php echo $row['marque'];?></pre>
    <pre> وقت تشغيل الباص <br>date de fonction:<br> <?php echo $row['date'];?></pre>
</div></div>



<div class="d">        

<form action="insfolvoit.php" method="post">
    <h1>entrer la depence du voiture</h1>
    <label>id</lable><input type="number" readonly name="id" value="<?php echo $row['id'];?>"><br>
<lable>la date  التاريخ </lable><br><input type="text" name="date" readonly value="<?php echo date('Y-m-d H:i:s', time() - 2 * 60 * 60);?>"><br><br>
<lable>numero رقم لوحة الباص</label><br><input type="text" name="numero" readonly value="<?php  echo $row['numero'];?>"  required><br><br>
<lable>argent المبلغ</label><br><input type="number" name="argent" required><br><br>
<lable>commentaire تعليق</label><br><select name="commentaire" required><option></option><option>calculer</option> 
<option>non calculer</option></select><br><br>
<input type="submit" value="enregistrer" name="deidine"><input type="reset" value="annuler">
</form> 

<?php };?>
</body>
</html>

    </table>
    </body></html>
   
