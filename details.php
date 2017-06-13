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

    $query="select * from filmovi where id= ".$_GET['details']."";
    $result=mysqli_query($conn, $query);
    while ($row=mysqli_fetch_assoc($result)) { ?>
    
   
 <tr class="tr">
         
        
        <td><?php echo $row['naziv_filma']; ?></td>
        <td><iframe width="200" height="150" src="https://www.youtube.com/embed/<?php echo $row['video']; ?>"></iframe>
        </td>

	
        <td><img src="data:image/jpeg;base64,<?php echo base64_encode($row['slike'] ); ?>" height="200" width="150"></td>
        
          
</<tr>

    <?php } ?>



 </table>


</div> <!--tablahead-->



 </div><!--sadrzaj-->


</body>

</html>