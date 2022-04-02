
<?php
include "../database/connection.php";
$p=$_POST['p'];
$sql="SELECT * FROM clienttarder where current_date()=temp ORDER BY (id)DESC ";
$res=mysqli_query($con,$sql);
$num=mysqli_num_rows($res);
?>
<html>
    <head>  
        <style>
             .fiel{
                width:40%;
                padding:20px;
                border-radius:20px;
                display:inline-block;
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


<b class="h">TEYSSIR VOYAGES   سفريات التيسير</b><br>
    transport Nouakchott akjoujt النقل -انواكشوط -أكجوجت -أطار<br><b>Tél:42 30 23 33 (NKTT)
        <b class="n"> أطار > المسافر</b><br></b>
    <b>Tél:22 10 28 02(ATAR)</b>
    <fieldset class="prix">prix:--------5000---------UM</fieldset>
    <div class="tic">
          <b> :الإتجاه-----------</b> <?php  echo $ligne['direction'];?> <b> -----------:direction</b><br>
          <b>nom de passageur:-----</b>   <?php  echo $ligne['nom']."/   ".$ligne['prenom'];?> <b>----- :إسم المسافر</b><br>
          <b>telephone: ----------</b><?php  echo $ligne['telephone'];?>  <b>-----------:الهاتف</b><br>
          </div>  
        </fieldset>
       <!---------------------------------------------------------------------------------------------------------------------------------------
    !-->

           <?php };?>

           
           
</body>

    </html>