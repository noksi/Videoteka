<?php 



    //spajanje na bazu
include 'php/dbcon.php';

    $query="select * from userkolekcija inner join filmovi on filmovi.filmid=userkolekcija.film_id where user_id='".$_SESSION['userid']."'";
    $result=mysqli_query($conn, $query);
    while ($row=mysqli_fetch_assoc($result)) { 
        $_SESSION['details']=$row['filmid'];
        ?>
   
    
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
           <a href='edit.php?idedit=<?php echo $row['filmid'];?>'><input type='submit' name='edit' class="btn btn-default butoni" value='Promjeni'></a><br>
           
      <?php } ?>
           
            <a href='php/remove.php?idremove=<?php echo $row['filmid'];?>'><input type='submit' name='remove' class="btn btn-default butoni" value='Ukloni'></a>
        </td>
</tr>

    <?php } ?>



 </table>


</div> <!--tablahead-->



 </div><!--sadrzaj-->
