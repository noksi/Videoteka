<?php session_Start(); ?>

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
    
    $query="select * from userkolekcija inner join filmovi on filmovi.filmid=userkolekcija.film_id where user_id='".$_SESSION['userid']."' and naziv_filma like '".$_POST['slova']."%'";
    $result=mysqli_query($conn, $query);
    while ($row=mysqli_fetch_assoc($result));
    
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
           <input type='submit' name='details' class="btn btn-default butoni" value='Detalji'></a><br>
            <a href='edit.php?idedit=<?php echo $row['filmid']; ?>'><input type='submit' name='edit' class="btn btn-default butoni" value='Promjeni'></a><br>
            <a href='php/remove.php?idremove=<?php echo $row['filmid']; ?>'><input type='submit' name='remove' class="btn btn-default butoni" value='Ukloni'></a>
        </td>

 
</tr>

<?php }} //end while endif trazislovo

elseif (isset($_POST['trazilica'])) {
    $query2="select * from userkolekcija inner join filmovi on filmovi.filmid=userkolekcija.film_id where user_id='".$_SESSION['userid']."'and naziv_filma like '%".$_POST['filmovi']."%'";
$result2=mysqli_query($conn, $query2);
    while ($row2=mysqli_fetch_assoc($result2)) { ?>
    
   

    <tr class="tr">
        
	<td><?php echo $row2['naziv_filma']; ?></td>
	<td><?php echo $row2['godina']; ?></td>
	<td><?php echo $row2['zanr'];?></td>
	<td><?php echo $row2['redatelj'];?></td>
	<td><img src="data:image/jpeg;base64,<?php echo base64_encode($row2['slike'] ); ?>" height="100" width="85"></td>
        <td>
            <a href='details.php?details=<?php echo $row2['filmid']; ?>'>
           <input type='submit' name='details' class="btn btn-default butoni" value='Detalji'></a><br>
            <a href='edit.php?idedit=<?php echo $row2['filmid']; ?>'><input type='submit' name='edit' class="btn btn-default butoni" value='Promjeni'></a><br>
            <a href='php/remove.php?idremove=<?php echo $row2['filmid']; ?>'><input type='submit' name='remove' class="btn btn-default butoni" value='Ukloni'></a>
        </td>

 
</tr>

<?php }} // end while i elseif trazilica

elseif (isset($_POST['trazizanr'])) {
    $query3="select * from userkolekcija inner join filmovi on filmovi.filmid=userkolekcija.film_id where user_id='".$_SESSION['userid']."' and zanr='".$_POST['zanr']."'";
$result3=mysqli_query($conn, $query3);
    while ($row3=mysqli_fetch_assoc($result3)) { ?>
    

    
    <tr class="tr">
        
	<td><?php echo $row3['naziv_filma']; ?></td>
	<td><?php echo $row3['godina']; ?></td>
	<td><?php echo $row3['zanr'];?></td>
	<td><?php echo $row3['redatelj'];?></td>
	<td><img src="data:image/jpeg;base64,<?php echo base64_encode($row3['slike'] ); ?>" height="100" width="85"></td>
        <td>
            <a href='details.php?details=<?php echo $row3['filmid']; ?>'>
           <input type='submit' name='details' class="btn btn-default butoni" value='Detalji'></a><br>
            <a href='edit.php?idedit=<?php echo $row3['filmid']; ?>'><input type='submit' name='edit' class="btn btn-default butoni" value='Promjeni'></a><br>
            <a href='php/remove.php?idremove=<?php echo $row3['filmid']; ?>'><input type='submit' name='remove' class="btn btn-default butoni" value='Ukloni'></a>
        </td>

 
</tr>

<?php }} // end while i elseif trazizanr

elseif (isset($_POST['trazigodina'])) {
    $query4="select * from userkolekcija inner join filmovi on filmovi.filmid=userkolekcija.film_id where user_id='".$_SESSION['userid']."' and godina='".$_POST['godina']."'";
$result4=mysqli_query($conn, $query4);
    while ($row4=mysqli_fetch_assoc($result4)) { ?>
    

    
    <tr class="tr">
        
	<td><?php echo $row4['naziv_filma']; ?></td>
	<td><?php echo $row4['godina']; ?></td>
	<td><?php echo $row4['zanr'];?></td>
	<td><?php echo $row4['redatelj'];?></td>
	<td><img src="data:image/jpeg;base64,<?php echo base64_encode($row4['slike'] ); ?>" height="100" width="85"></td>
        <td>
            <a href='details.php?details=<?php echo $row4['filmid']; ?>'>
           <input type='submit' name='details' class="btn btn-default butoni" value='Detalji'></a><br>
            <a href='edit.php?idedit=<?php echo $row4['filmid']; ?>'><input type='submit' name='edit' class="btn btn-default butoni" value='Promjeni'></a><br>
            <a href='php/remove.php?idremove=<?php echo $row4['filmid']; ?>'><input type='submit' name='remove' class="btn btn-default butoni" value='Ukloni'></a>
        </td>

 
</tr>

<?php }} // end while i elseif trazigodina


    
    

    
    ?>



 </table>


</div> <!--tablahead-->



 </div><!--sadrzaj-->

    


</body>

</html>