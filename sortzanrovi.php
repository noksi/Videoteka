<?php session_start(); ?>

<!DOCTYPE html>
<html>
<?php include 'headpart.php'; ?>

<body>

<?php

if (isset($_SESSION['username']))
    {
    

include 'flexcontainerpart.php';
include 'mojnavbarpart.php';
include 'sadrzajpart1.php';
?>



    
    <?php 
    //spajanje na bazu
include 'php/dbcon.php';

    $query="select * from userkolekcija inner join filmovi on filmovi.filmid=userkolekcija.film_id where user_id='".$_SESSION['userid']."' order by zanr ASC";
    $result=mysqli_query($conn, $query);
    while ($row=mysqli_fetch_assoc($result)) { ?>
    
    
    <tr class="tr">
        
	<td><?php echo $row['naziv_filma']; ?></td>
	<td><?php echo $row['godina']; ?></td>
	<td><?php echo $row['zanr'];?></td>
	<td><?php echo $row['redatelj'];?></td>
	<td><img src="data:image/jpeg;base64,<?php echo base64_encode($row['slike'] ); ?>" height="100" width="85"></td>
        <td>
            <a href="details.php?details=<?php echo $row['filmid']; ?>">
           <input type='submit' name='details' class="btn btn-default butoni" value='Topic'></a><br>
           
           <?php 
      
      if ($_SESSION['priv']=='admin') {
      ?>
            <a href='edit.php?idedit=<?php echo $row['filmid']; ?>'><input type='submit' name='edit' class="btn btn-default butoni" value='Promjeni'></a><br>
            
      <?php } ?>
            <a href='php/remove.php?idremove=<?php echo $row['filmid']; ?>'><input type='submit' name='remove' class="btn btn-default butoni" value='Ukloni'></a>
        </td>

 
</tr>

    <?php } ?>



 </table>


</div> <!--tablahead-->



 </div><!--sadrzaj-->



    <?php } 
    
    else {
    
    header('Location: index.php');

   }
    
    ?>
 




</body>

</html>