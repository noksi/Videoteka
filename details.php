<?php session_Start();
$_SESSION['details']=$_GET['details']; ?>


<!DOCTYPE html>
<html>
<?php include 'headpart.php'; ?>

<body>

<?php
include 'flexcontainerpart.php';
include 'mojnavbarpart.php';
include 'sadrzajdetails.php';
?>
    
<br>


 	
    
<?php 
    
if ($resultrows!=0) {

    $query2="select * from forum inner join login on login.userid=forum.userid where forum.filmid='".$_GET['details']."' order by forumid DESC";
    $result2=mysqli_query($conn, $query2);
    while ($row2=mysqli_fetch_assoc($result2)) { ?>
    
   <div class="tablaheadforum">
 <table style="width:100%">
     
 <tr class="trforum">
         
        
        <td style="width:100px; padding-left:6px !important; border-right:2px solid cadetblue !important;" class="tdforum">
            Korisnik:<br><span style="color: black"><?php echo $row2['username']; ?></span><br><br>
            Broj postova:
            <span style="color: black">
            <?php 
            
            $querycount="select count(userid) as brojusera from forum where userid='".$row2['userid']."'";
            $resultcount=mysqli_query($conn, $querycount);
            $rowcount=mysqli_fetch_assoc($resultcount);
            echo $rowcount['brojusera'];
            
            ?>
            </span>
            <br><br>
            Datum:<br><span style="color: black"><?php echo $row2['datum']; ?></span></td>
        
        <td style="padding-left:15px !important; border-right:2px solid cadetblue !important">
            <span style="color: slategrey;"> <?php echo $row2['post']; ?></span></td>
        
        <td style="width:100px; padding-left:6px !important; height: auto !important"><a href='edit.php?idedit='><input type='submit' name='edit' class="btn btn-default butoni" value='Promjeni'></a><br>
           
            <a href='php/removepost.php?forumidremove=<?php echo $row2['forumid'];?>'><input type='submit' name='removepost' class="btn btn-default butoni" value='Ukloni'></a></td>
        
        
          
</<tr>
    
    </table>


</div> <!--tablaheadforum-->

<?php

    } // end while
    } // end if rowresult

?>


    
   <div class="tablahead">
 
       <form method="POST" action="php/addtext.php">
           
           <textarea class="textareaforum" name="text"></textarea>
           
           <input type="submit" name="komentar" value="Komentiraj" class="btn btn-default" style="background: teal !important; color: white !important;">
           
       </form>


</div> <!--tablahead textarea-->

    



 



 </div><!--sadrzaj-->


</body>

</html>