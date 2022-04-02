
<?php
include "../database/connection.php";
$p=$_POST['p'];
$sql="SELECT * FROM client where current_date()=date ORDER BY (id)DESC limit $p";
$res=mysqli_query($con,$sql);
$num=mysqli_num_rows($res);
?>
<html>
    <head>  
        <style>
             .fiel{
                 margin-top:40px;
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
</head><body onload="print('doc/ali.pdf')";>
  <?php 
           while($ligne=mysqli_fetch_assoc($res)) { ?>
<fieldset class="fiel">


<?php include "../database/ticket.html";?>
    <fieldset class="prix">prix:--------5000---------UM</fieldset>
    <div class="tic">
    <b> :الإتجاه-----------</b> <?php  echo $ligne['direction'];?> <b> -----------:direction</b><br>
          <b>nom de passageur:-----</b>   <?php  echo $ligne['nom']."/   ".$ligne['prenom'];?> <b>----- :إسم المسافر</b><br>
          <b>telephone: ----------</b><?php  echo $ligne['telephone'];?>  <b>-----------:الهاتف</b><br>
          </div>  
        </fieldset>
       -------------------------------------------------------------------------------------------------------------------------------------
   
           <?php };?>

           
           
</body>

    </html>