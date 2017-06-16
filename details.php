<?php session_Start();
$_SESSION['details']=$_GET['details']; ?>


<!DOCTYPE html>
<html>
<?php include 'headpart.php'; ?>

<body>

<?php
include 'flexcontainerpart.php';
include 'mojnavbarpart.php';

?>
    <div class="sadrzaj">

<div class="tablahead" >
 <table style="width:100%">
 	
<tr>
	

<th>Naziv filma</th>
<th>Video</th>
<th>Cover</th>


</tr>
    
    
<?php 
    //spajanje na bazu
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'videoteka';


$conn = mysqli_connect($server, $username, $password) or die (mysqli_error($conn));
mysqli_set_charset($conn, "utf8");
$baza=mysqli_select_db($conn, $database);

    $query="select * from userkolekcija inner join filmovi on filmovi.filmid=userkolekcija.film_id where film_id='".$_GET['details']."' and user_id='".$_SESSION['userid']."'";
    $result=mysqli_query($conn, $query);
    $resultrows=mysqli_num_rows($result);
    while ($row=mysqli_fetch_assoc($result)) { ?>
    
   
 <tr class="tr">
         
        
        <td><?php echo $row['naziv_filma']; ?></td>
        <td><iframe width="490" height="320" src="https://www.youtube.com/embed/<?php echo $row['video']; ?>"></iframe>
        </td>

	
        <td><img src="data:image/jpeg;base64,<?php echo base64_encode($row['slike'] ); ?>" height="320" width="240"></td>
        
          
</<tr>

    <?php } ?>



 </table>


</div> <!--tablahead-->
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
            Korisnik:<br><?php echo $row2['username']; ?><br><br>
            Broj postova:
            
            <?php 
            
            $querycount="select count(userid) as brojusera from forum where userid='".$row2['userid']."'";
            $resultcount=mysqli_query($conn, $querycount);
            $rowcount=mysqli_fetch_assoc($resultcount);
            echo $rowcount['brojusera'];
            
            ?>
              
            <br><br>
            Datum:<br><?php echo $row2['datum']; ?></td>
        
        <td style="padding-left:15px !important; border-right:2px solid cadetblue !important"> <?php echo $row2['post']; ?></td>
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
           
           <input type="submit" name="komentar" value="Komentiraj" class="btn btn-default">
           
       </form>


</div> <!--tablahead textarea-->

    



 



 </div><!--sadrzaj-->


</body>

</html>