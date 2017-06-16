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