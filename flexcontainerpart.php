<div class="flex-container">

<div class="korisni2">

  <form class="signup" action="php/create.php" method="post" enctype="multipart/form-data">
  
  <span>DODAJ FILM</span> <br><br>

    <span>Naziv filma:</span><br>
      <input type="text" class="input form-control2" name="naziv" style="color: black !important;" placeholder="Upiši naziv filma"><br><br>

      <span>Godina izdavanja:</span><br>
      <input type="number" class="form-control2" name="godina" style="color: black !important" placeholder="Upisi godinu"><br><br>

      <span>Žanr:</span><br>
      <select class="form-control2" name="zanrovi">
      	<option>Action</option>
      	<option>Comedy</option>
      	<option>Drama</option>
      	<option>Horor</option>
      	<option>SF-Fantasy</option>
        <option>Akcija-SF</option>
        <option>Adventure</option>
        <option>Romance</option>
        <option>Crime</option>
      </select><br><br>

      <span>Redatelj:</span><br>
      <input type="text" class="input form-control2" name="redatelj" style="color: black !important;" placeholder="Upiši naziv redatelja"><br><br>

      <span>Odaberite cover:</span>
      <input type="file" class="file" name="slika" id="slika">
      <label for="slika">Kliknite ovdje za odabir</label><br><br><br>





      <input type="submit" name="add" class="btn btn-default butoni" value="Dodaj film u listu"><br>
    
      
      
  </form>
  </div> <!--korisni2-->



 </div> <!--flex container-->