<?php session_Start(); ?>

<!DOCTYPE html>
<html>
    
<?php include 'headpart.php'; ?>

<body>

<?php

if (isset($_SESSION['username']) && $_SESSION['priv']=='admin')
    {

include 'flexcontainerpart.php';
include 'mojnavbarpart.php'; ?>
    
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
include 'php/dbcon.php';

    $query="select * from userkolekcija inner join filmovi on filmovi.filmid=userkolekcija.film_id where film_id='".$_GET['idedit']."' and user_id='".$_SESSION['userid']."'";
    $result=mysqli_query($conn, $query);
    $resultrows=mysqli_num_rows($result);
    while ($row=mysqli_fetch_assoc($result)) { ?>
    
   
 <tr class="trdet">
         
        
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

if ($resultrows!=0){?>
    
 <div class="tablahead" >
 <table style="width:100%">
 	
<tr>
	

<th class="tha"><a href='sortfilmovi.php'>Naziv filma</a></th>
<th class ="tha"><a href="sortgodina.php">Godina</a></th>
<th class ="tha"><a href="sortzanrovi.php">Žanr</a></th>
<th>Redatelj</th>
<th>Cover</th>
<th></th>

</tr>

<?php
$query="select * from userkolekcija inner join filmovi on filmovi.filmid=userkolekcija.film_id where user_id='".$_SESSION['userid']."' and film_id='".$_GET['idedit']."'";
    $result=mysqli_query($conn, $query);
    while ($row=mysqli_fetch_assoc($result)) { 
        $_SESSION['details']=$row['filmid'];
        ?>
   
    
 <tr class="tr">
     
 <form method="POST" action="php/update.php">
        <td><?php echo $row['naziv_filma']; ?></td>
        <td><input type="number" name="godina" value="<?php echo $row['godina']; ?>"></td>
        <td><select name="zanr">
      	<option>Action</option>
      	<option>Comedy</option>
      	<option>Drama</option>
      	<option>Horor</option>
      	<option>SF-Fantasy</option>
        <option>Akcija-SF</option>
        <option>Adventure</option>
        <option>Romance</option>
        <option>Crime</option>
      </select></td>
        <td><input type="text" name="redatelj" value="<?php echo $row['redatelj']; ?>"></td>
        <td><img src="data:image/jpeg;base64,<?php echo base64_encode($row['slike'] ); ?>" height="100" width="85"></td>
        <td>
            <input type="submit" value="Podnesi" name="podnesi" class="btn btn-default butoni">
   </td>
    </form>   
</tr>

    <?php } ?>



 </table>


</div> <!--tablahead-->
    

<?php } // end if resultrow
    } //end if session

else {
    
    header('Location: index.php');

   }
    
?>

    
</body>

</html>