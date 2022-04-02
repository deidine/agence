
<?php

include "database/connection.php";
session_start();
if(isset($_POST['login'])){
$user=stripslashes($_REQUEST['username']);
$pass=stripslashes($_REQUEST['password']);

$user = mysqli_real_escape_string($con,$user);
$pass = mysqli_real_escape_string($con,$pass);
/*
$user=$_POST['username'];
$pass=$_POST['password'];
//user = efffefe password = ' or '1=1
*/
 $sql="SELECT * FROM login WHERE username='$user' AND password='$pass' ";
 #echo "<b style='color:red'>$sql</b>";
echo "<br>";
$res=mysqli_query($con,$sql);

if($row=mysqli_fetch_assoc($res)){
    $_SESSION['username'] = $user;
    header("Location: agence.php"); // Redirect user to index.php
}
else {
    echo "<script> alert(' كلمة المرور خاطئة');  </script> ";

}
}?>
<html>
    <head><style><?php include "index.css";?></style>
    <title>login</title></head>
    <body>
       
        <img class="mimg" src="log/mimg.png"><br>
        <div class="c">
        <form method="POST" >
            <div class="b">
        <label><img class="img" src="log/user.png">أسم المستخدم</label><br><input type="text" name="username" size="50%" placeholder="entrer ton nom" required ><br><br>
         <label><img class="img" src="log/lock.png">كلمة السر</label><br><input type="password" name="password" size="50%" placeholder="entrer le mot de pass" required ><br>
           <input type="submit" name="login" value="دخول"><br><br>
       <footer>  <p class="a" >  <button onclick="conf();"style="color:green;background-color:red;"class="a" href="inscrit.php"> أضغط هنا</button>إذا نسيت كلمة المرور</p></footer>
    </div>
        </form> 
    </div>
<script >
function conf(){
    
    if(prompt(" seulment le directeur qui peut entrer ecrire le code ")=="deidine"){
        location="inscrit.php";
    }
    else{alert("error") ;location="login.php";} 
}

</script>
    </body>
</html>

