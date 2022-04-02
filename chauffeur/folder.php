<?php
include "../database/connection.php";
//if(is_numeric($_GET['numero'])){
$nummero=$_GET['numero'];//}
$sql="SELECT * FROM chauffeur where numero=$nummero  ";
$res=mysqli_query($con,$sql);
?>
<html>
    <head>
        <meta charset="UTF-8">
      <link href="../css/8.css" rel="stylesheet">
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
<button> <a href="afCh.php"><img src="../log/back.gif">RETOUR</a></button>
<button id="a" style="margin-left:70%;width: auto;height:auto;background-color:gold; "> <a href="afFolChauf.php?numero=<?php echo "$nummero";?>"style="color:black;width:auto;height:auto;">afficher le tableau <img src="q.gif">عرض جدول السائق</a></button>


<p style="font-size:30px;background-color:white;width:70%;">أكتب المبلغ الذي أخذه السائق وبأمكانك تسجيل الملاحظات و وقت العملية و المبلغ الذي أخذه السائق</p>



<?php while($row=mysqli_fetch_assoc($res) ){?>
    <p style="margin-left:900px;font-size:20px;background-color:green;">هذه بطاقة تعريفية عن السائق
</P> <div class="chauf"><img style="height:40%;width:30%;" src="../log/img1.png">
<div class="m">
<pre>للرقم numero :<?php echo $row['numero'];?></pre>
    <pre>nom الإسم:<?php echo $row['nom'];?></pre>
    <pre>prenom اللقب:<?php echo $row['prenom'];?></pre>
    <pre>الهاتف telephone :<?php echo $row['telephone'];?></pre>
    <pre>الراتب salaire :<?php echo $row['salaire'];?></pre>
</div></div>



<div class="d">        

<form action="insdepence.php" method="post">
    <h1>entrer la depence du chauffeur</h1>
<lable>la date du depense وقت العملية</lable><br><input type="text" name="date" readonly value="<?php echo date('Y-m-d H:i:s', time() - 2 * 60 * 60);?>"><br><br>
<lable>numero رقم السائق </label><br><input type="number" name="numero" readonly value="<?php  echo $row['numero'];?>"  required><br><br>
<lable>montant المبلغ المالي</label><br><input type="number" name="montant" required><br><br>
<lable>commentaire تعليق</label><br><select name="commentaire" required><option></option><option>calculer</option> 
<option>non calculer</option></select><br><br>
<input type="submit" value="enregistrer" name="deidine"><input type="reset" value="annuler">
</form> 
</body>
</html>

<?php };?>