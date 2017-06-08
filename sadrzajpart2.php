<?php 
    //spajanje na bazu
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'videoteka';


$conn = mysqli_connect($server, $username, $password) or die (mysqli_error($conn));
mysqli_set_charset($conn, "utf8");
$baza=mysqli_select_db($conn, $database);

    $query="select * from filmovi";
    $result=mysqli_query($conn, $query);
    while ($row=mysqli_fetch_assoc($result)) { ?>
    
    
    <tr class="tr">
        <td><?php echo $row['id']; ?></td>
	<td><?php echo $row['naziv_filma']; ?></td>
	<td><?php echo $row['godina']; ?></td>
	<td><?php echo $row['zanr'];?></td>
	<td><?php echo $row['redatelj'];?></td>
	<td><img src="data:image/jpeg;base64,<?php echo base64_encode($row['slike'] ); ?>" height="100" width="85"></td>
        <td><a href='edit.php?idedit='><input type='submit' name='edit' class="btn btn-default butoni" value='Promjeni'></a><br>
            <a href='php/remove.php?idremove=<?php echo $row['id'];?>'><input type='submit' name='remove' class="btn btn-default butoni" value='Ukloni'></a>
        </td>

 
</tr>

    <?php } ?>



 </table>


</div> <!--tablahead-->



 </div><!--sadrzaj-->
