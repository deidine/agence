
<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql="select * from message where id=$id"; $res=mysqli_query($con,$sql);$row=mysqli_fetch_assoc($res);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
          
            nav{
                background-color: orange;
                float: left;
                margin-top:-43%;
                padding: 40px; 
                border-radius:20px;
            }
            nav:hover{
                background-color:gold;
            }
            b{
                color:green;
                font-size:20px;
            }select{
    background-color:blue;
    color:white;
    width:50%;
    height:35px;
    font-size:20px;
}
                  </style>
        <link href="../css/b.css" rel="stylesheet">
    </head>       <a href="afficher.php"><button><img src="../log/back.gif">RETOUR</button></a>
    <div class="c">
    <body><form action="channger.php" method="post">
     <label>nombre </label><br>  <input type="number" name="id" readonly value="<?php echo $row['id'];?>"><br><br>
    <label>la date اليوم</label><br><input type="text" name="date"  value="<?php echo date("Y-m-d");?>" required><br><br>

<label>le resvoir المستلم</label><br><input type="text" value="<?php echo $row['nom'];?>" name="nom" placeholder="entrer le nom du person" required><br><br>

<label>telephone الهاتف</label><br><input type="number" value="<?php echo $row['telephone'];?>" name="telephone" placeholder="entrer le telephone du person" required>
<br><br>
<label>l'envoiyeur المرسل</label><br><input type="text" value="<?php echo $row['envoiyeur'];?>" name="nomenv" placeholder="entrer le nom envoiyeur du person" required>
<br><br>
<label>le type du message نوع الرسالة</label><br><input type="text" value="<?php echo $row['message'];?>" name="message" placeholder="entrer le type du message" required>
<br><br>
<label>le nombre du messager عدد الكولي</label><br><input value="<?php echo $row['nombremessage'];?>" type="number" name="nombremes" placeholder="entrer le nom du person" required>
<br><br>
<label>direction الوجهة</label><br><input type="text" value="<?php echo $row['direction'];?>" name="direction" required><br><br>
<label>la prix السعر</label><br><input type="number" value="<?php echo $row['prix'];?>" name="prix" placeholder="entrer le prix" required><br><br>
<input type="submit" value="changer" >
</form></div>
  <nav class="left">
            <b>enregistrer les information du message ici <br>سجل معلومات الرسالة هنا بعد الأنتهاء أضغط على <br>enregistrer
            </B>
                </nav>

</body>
    </html>