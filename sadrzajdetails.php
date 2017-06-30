<div class="sadrzaj">

<div class="tablahead" >
 <table style="width:100%">
 	
<tr>
	

<th></th>
<th></th>
<th></th>


</tr>
    
    
<?php 
    //spajanje na bazu
include 'php/dbcon.php';

    $query="select * from userkolekcija inner join filmovi on filmovi.filmid=userkolekcija.film_id where film_id='".$_GET['details']."' and user_id='".$_SESSION['userid']."'";
    $result=mysqli_query($conn, $query);
    $resultrows=mysqli_num_rows($result);
    while ($row=mysqli_fetch_assoc($result)) { ?>
    
   
 <tr class="trdet">
         
        
     <td><?php echo $row['naziv_filma']; ?><br><br>
         <a href="<?php echo $row['fb']; ?>" class="fa fa-facebook-square detailfbglif" title="Posjeti <?php echo $row['naziv_filma']; ?> na facebook stranici" target="blank"></a><br><br>
         <a href="<?php echo $row['imdb']; ?>" class="fa fa-imdb detailimdbglif" title="Posjeti <?php echo $row['naziv_filma']; ?> na IMDB stranici" target="blank"></a><br><br>
         <a href="<?php echo $row['wiki']; ?>" class="fa fa-wikipedia-w detailwikiglif" title="Posjeti <?php echo $row['naziv_filma']; ?> na IMDB stranici" target="blank"></a><br><br>
                </td>
        
        <td style="padding-left: 10px;"><iframe width="490" height="320" src="https://www.youtube.com/embed/<?php echo $row['video']; ?>"></iframe>
        </td>

	
        <td><img src="data:image/jpeg;base64,<?php echo base64_encode($row['slike'] ); ?>" height="320" width="240"></td>
        
          
</<tr>

    <?php } ?>



 </table>


</div> <!--tablahead-->