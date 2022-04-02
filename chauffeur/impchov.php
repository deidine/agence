
<?php
include "../database/connection.php";
$id=$_GET['id'];
$sql2="SELECT * FROM chauffeur where id=$id ";
$res2=mysqli_query($con,$sql2);


?>
<html>
    <head>  
      <style>
           .fiel{
                width:60%;
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
                width:60%;
                margin-left:100px;
            }
            .h{
                font-size:25px;
                margin: 50px;;
            }
          <?php include "../css/10.css";?>
      </style>  
       </head><body onload="window.print()">

        <?php while($row=mysqli_fetch_assoc($res2)){?>
            <fieldset class="fiel">
            <?php include "../database/ticket.html";?>
    <br><center><strong>carte d'idenité du chauffeur هذه بطاقة تعريفية عن السائق</strong></center>
<br>    
    <fieldset class="prix">numero du chauffeur:--------<?php  echo $row['numero'];?>--------- رقم السائق</fieldset>
    <div class="tic">
          <b>nom du chauffeur:-----</b>   <?php  echo $row['nom']."/   ".$row['prenom'];?> <b>----- :إسم السائق</b><br>
          <b>telephone du chauffeur: ----------</b><?php  echo $row['telephone'];?>  <b>-----------: الهاتف السائق</b><br>
          </div>  
        </fieldset>
        </div>   <?php };?>

 
</body>

    </html>


      