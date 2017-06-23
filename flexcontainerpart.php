

<div class="flex-container">

<div class="korisni2">
 
    <a href="index.php" class="glyphicon glyphicon-home glif" title="Početna stranica"></a>
    <a href="movies.php" class="glyphicon glyphicon-film glif" title="Filmovi"></a>
    <a href="index.php" class="glyphicon glyphicon-cd glif" title="Igre"></a>
    <a href="index.php" class="glyphicon glyphicon-user glif" title="Popis korisnika"></a>
    <a href="index.php" class="glyphicon glyphicon-comment glif" title="Chat"></a>
    <br><br>
    
    <?php 
    
   include 'php/dbcon.php';


$queryavatar="select * from login where userid='".$_SESSION['userid']."'";
$resultavatar=mysqli_query($conn, $queryavatar);
while ($rowavatar=mysqli_fetch_assoc($resultavatar)){ ?>
    
    <div class="flexuser">
        
        <?php 
        
        if ($rowavatar['avatar']!=NULL){
        
        ?>
    <img src="data:image/jpeg;base64,<?php echo base64_encode($rowavatar['avatar'] ); ?>" height="42" width="42" style="margin-right:2px !important; border-radius: 4px !important;">
    
        <?php } ?>
       Prijavljeni ste kao [<?php  echo $rowavatar['username'];
  }
    
  ?>]<br> <a href="#" class="glyphicon glyphicon-envelope posta" title="Sandučić"></a> Imate novih poruka: [0]<br>
  
  <a href="" class="glyphicon glyphicon-user user" title="Profil [<?php echo $_SESSION['username'];?>]"></a>
  Uredite svoj profil <br>
  
  <a href="php/logout.php" class="glyphicon glyphicon-off odjava" title="Odjava [<?php echo $_SESSION['username'];?>]"></a>
  Odjavite se
    
    
    </div> <!--flexuser-->
    
    
  <form class="signup" action="php/create.php" method="post" enctype="multipart/form-data">
  
      
      <span><strong>Dodaj film u favorite:</strong></span><br><br>


       
      <input type="text" class="form-control2" name="favoriti" list="filmovi" autocomplete="off">
      <datalist id="filmovi">
           <?php  $query="select naziv_filma, godina from filmovi order by naziv_filma ASC";
          $result=mysqli_query($conn, $query);
          while ($row=mysqli_fetch_assoc($result)){
          ?>
         
          <option value="<?php echo $row['naziv_filma']; ?>"><?php echo $row['naziv_filma']." ".$row['godina']; ?></option> <?php } ?>
          </datalist><br>
      <input type="submit" name="dodajfav" value="Dodaj" class="btn btn-default butoni"><br><br><br>
      
      <span><strong>Dodaj igru u favorite:</strong></span><br><br>


       
      <input type="text" class="form-control2" name="favoritiigre" list="igre" autocomplete="off">
      <datalist id="igre">
           <?php  $query="select naziv_filma, godina from filmovi order by naziv_filma ASC";
          $result=mysqli_query($conn, $query);
          while ($row=mysqli_fetch_assoc($result)){
          ?>
         
          <option value="<?php echo $row['naziv_filma']; ?>"><?php echo $row['naziv_filma']." ".$row['godina']; ?></option> <?php } ?>
          </datalist><br>
      <input type="submit" name="dodajfav" value="Dodaj" class="btn btn-default butoni"><br><br><br>
      
      <?php 
      
      if ($_SESSION['priv']=='admin' && $_SESSION['section']=='1') {
      ?>
      
      <span><strong>Dodaj film u bazu podataka:</strong></span> <br><br>

    <span>Naziv filma:</span><br>
      <input type="text" class="input form-control2" name="naziv" style="color: black !important;" placeholder="Upiši naziv filma"><br>

      <span>Godina izdavanja:</span><br>
      <input type="number" class="form-control2" name="godina" style="color: black !important" placeholder="Upiši godinu"><br>

      <span>Žanr:</span><br>
      <select class="form-control2" name="zanrovi">
      	<option>Action</option>
      	<option>Comedy</option>
      	<option>Drama</option>
      	<option>Horor</option>
      	<option>SF-Fantasy</option>
        <option>Action-SF</option>
        <option>Adventure</option>
        <option>Romance</option>
        <option>Crime</option>
        <option>Thriller</option>
      </select><br>

      <span>Redatelj:</span><br>
      <input type="text" class="input form-control2" name="redatelj" style="color: black !important;" placeholder="Upiši naziv redatelja"><br>
      
      <span>Unesite ID youtube videa:</span><br>
      <input type="text" class="input form-control2" name="video" style="color: black !important;" placeholder="Upiši ID video trailera"><br>

      <span>Odaberite cover:</span>
      <input type="file" class="file" name="slika" id="slika">
      <label for="slika"><span class="glyphicon glyphicon-search"></span></label><br><br><br>





      <input type="submit" name="add" class="btn btn-default butoni" value="Dodaj film"><br><br>
    
      <?php } ?>
      
  </form>
  </div> <!--korisni2-->



 </div> <!--flex container-->