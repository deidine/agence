
<?php
include "../database/connection.php";
$p=$_POST['p'];
$sql="SELECT * FROM message where current_date()=date ORDER BY (id) DESC limit $p ";
$res=mysqli_query($con,$sql);
$num=mysqli_num_rows($res);
?>
<html>
    <head>  
        <style>
            .fiel{
                width:60%;
                padding:20px;
                border-radius:20px;
            }
            .n{
                font-size:25px;
                margin-left:200px;
            }
            p{
                padding-top:0px;
            }
            .tic{
                margin-left:100px;                              
                            }
            .ticket{
            }
            .prix{
                width:50%;
                margin-left:100px;
            }
            .h{
                font-size:25px;
            }
            </style>
</head><body onload=print();>

  <?php 
           while($ligne=mysqli_fetch_assoc($res)) { ?>
<fieldset class="fiel">

<?php include "../database/ticket.html";?>
    <fieldset class="prix">prix:--------<?php echo $ligne['prix'];?>---------UM</fieldset>
    <div class="tic">
    <b> :الإتجاه-----------</b> <?php  echo $ligne['direction'];?> <b> -----------:direction</b><br>
          <b>type du message:-----</b>   <?php  echo $ligne['message'];?> <b>----- :نوعية الكولي </b><br> 
          <b>l'envoiyeur:-----</b>   <?php  echo $ligne['envoiyeur'];?> <b>----- :المرسل </b><br>
          <b>nom du rssevoir:-----</b>   <?php  echo $ligne['nom'];?> <b>----- :المرسل اليه</b><br>
          <b>telephone: ----------</b><?php  echo $ligne['telephone'];?>  <b>-----------:الهاتف</b><br>
          </div>  </fieldset>
    ---------------------------------------------------------------------------------------------------------------------------------------


           <?php };?>

           
           
</body>

    </html>