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
    </head>       <a href="../index.php"><button><img src="../log/back.gif">RETOUR</button></a>
    <div class="c">
    <body><form action="insert.php"method="post">
    <label>la date اليوم</label><br><input type="text" name="date" readonly value="<?php echo date("Y-m-d");?>" required><br><br>

<label>le resvoir المستلم</label><br><input type="text" name="nom" placeholder="entrer le nom du person" required><br><br>

<label>telephone الهاتف</label><br><input type="number" name="telephone" placeholder="entrer le telephone du person" required>
<br><br>
<label>l'envoiyeur المرسل</label><br><input type="text" name="nomenv" placeholder="entrer le nom envoiyeur du person" required>
<br><br>
<label>le type du message نوع الرسالة</label><br><input type="text" name="message" placeholder="entrer le type du message" required>
<br><br>
<label>le nombre du messager عدد الكولي</label><br><input type="number" name="nombremes" placeholder="entrer le nom du person" required>
<br><br>
<label>direction الوجهة</label><br><select name="direction" required>
    <option></option>
    <option>noikchout نواكشوط</option>
    <option>atar أطار</option>
    <option>akjoujat أكجوجت</option>
    <option>zoiyratt أويرات</option>
    <option>tijikja تجكجة </option>

</select><br><br>
<label>la prix السعر</label><br><input type="number" name="prix" placeholder="entrer le prix" required><br><br>
<input type="submit" value="envoiyer" ><input type="reset" value="annuller">
</form></div>
  <nav class="left">
            <b>enregistrer les information du message ici <br>سجل معلومات الرسالة هنا بعد الأنتهاء أضغط على <br>enregistrer
            </B>
                </nav>

</body>
    </html>