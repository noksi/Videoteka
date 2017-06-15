<?php session_Start(); ?>

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

    $query="select * from filmovi where filmid='".$_GET['details']."'";
    $result=mysqli_query($conn, $query);
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
    


    $query2="select * from forum inner join login on login.userid=forum.userid where forum.filmid='".$_GET['details']."'";
    $result2=mysqli_query($conn, $query2);
    while ($row2=mysqli_fetch_assoc($result2)) { ?>
    
   <div class="tablaheadforum">
 <table style="width:100%">
     
 <tr class="tr">
         
        
        <td style="width:100px !important; padding-left:6px !important; border-right:2px solid cadetblue !important;">
            Korisnik:<br><?php echo $row2['username']; ?><br><br> Broj postova:</td>
        
        <td style="padding-left:15px !important;"><?php echo $row2['post']; ?></td>
        
        
          
</<tr>
    
    </table>


</div> <!--tablahead-->

    <?php } ?>



 



 </div><!--sadrzaj-->


</body>

</html>