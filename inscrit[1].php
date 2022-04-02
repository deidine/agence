<?php
include "database/connection.php";
@$nom=$_POST['nom'];
@$pass=$_POST['pass'];
$sql2="SELECT * FROM login WHERE username='$nom' AND password='$pass'";
$res2=mysqli_query($con,$sql2);
$row1=mysqli_num_rows($res2);
if($row1==1){
echo "<h1> لقد سجلت من قبل </h1>";
    }
    else
    {
    $sql="INSERT INTO `login` (username,password) VALUES ('$nom','$pass')";
    $res=mysqli_query($con,$sql);}
    
    
?>

<html>
    <head> <link href="index.css" rel="stylesheet"><title>login</title></head>
    <body>
          <img class="mimg" src="log/mimg.png"><br>
        <div class="c">
        <form method="POST" >
            <div class="b">
            <label><img class="img" src="log/user.png">أسم المستخدم</label> <input type="text" name="nom" size="50%" placeholder="entroer ton nom" required ><br>
            <label><img class="img" src="log/lock.png">كلمة السر</label> <input type="password" name="pass" size="50%" placeholder="entrer le mot de pass" required ><br>
           <input type="submit" name="login" value="التسجيل">
    </div>
        </form>
      <button style="background-color:green;font-size:22px;border-radius:12px;">  <a href="login.php"><img src="log/back.gif"> </a></button>
    </div>
 
    </body>
</html>