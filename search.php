<!DOCTYPE html>
<html>
<?php include 'headpart.php'; ?>

<body>

<?php
include 'flexcontainerpart.php';
include 'mojnavbarpart.php';
include 'sadrzajpart1.php';
?>
    <?php 
    
    //spajanje na bazu
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'videoteka';


$conn = mysqli_connect($server, $username, $password) or die (mysqli_error($conn));
mysqli_set_charset($conn, "utf8");
$baza=mysqli_select_db($conn, $database);

// provjera koji je button iz forme potvrdjen

if (isset($_POST['trazislovo'])){
    
    $query="select * from filmovi where naziv_filma like '"
            .$_POST['slova']."%' or naziv_filma like '"
            .strtoupper($_POST['slova'])."%'";
    
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

<?php }} //end while endif trazislovo

elseif (isset($_POST['trazilica'])) {
    $query2="select * from filmovi where naziv_filma like '%".$_POST['filmovi']."%'";
$result2=mysqli_query($conn, $query2);
    while ($row2=mysqli_fetch_assoc($result2)) { ?>
    
    
    <tr class="tr">
        <td><?php echo $row2['id']; ?></td>
	<td><?php echo $row2['naziv_filma']; ?></td>
	<td><?php echo $row2['godina']; ?></td>
	<td><?php echo $row2['zanr'];?></td>
	<td><?php echo $row2['redatelj'];?></td>
	<td><img src="data:image/jpeg;base64,<?php echo base64_encode($row2['slike'] ); ?>" height="100" width="85"></td>
        <td><a href='edit.php?idedit=<?php echo $row2['id']; ?>'><input type='submit' name='edit' class="btn btn-default butoni" value='Promjeni'></a><br>
            <a href='php/remove.php?idedit=<?php echo $row2['id']; ?>'><input type='submit' name='remove' class="btn btn-default butoni" value='Ukloni'></a>
        </td>

 
</tr>

<?php }} // end while i elseif trazilica


    
    ?>



 </table>


</div> <!--tablahead-->



 </div><!--sadrzaj-->

    


</body>

</html>