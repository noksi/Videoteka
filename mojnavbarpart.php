<div class="mojnavbar">

     
                 
    
 <form class="mojnavbarforma" method="POST" action="search.php">
     <div class="navbar-title">Tražite film po slovu:</div>
        <select class="form-control3" name="slova" style="width: 11.4%;">
        
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
  <option value="E">E</option>
  <option value="F">F</option>
  <option value="G">G</option>
  <option value="H">H</option>
  <option value="I">I</option>
  <option value="J">J</option>
  <option value="K">K</option>
  <option value="L">L</option>
  <option value="M">M</option>
  <option value="N">N</option>
  <option value="O">O</option>
  <option value="P">P</option>
  <option value="R">R</option>
  <option value="S">S</option>
  <option value="T">T</option>
  <option value="U">U</option>
  <option value="V">V</option>
  <option value="Z">Z</option>
  <option value="X">X</option>
  <option value="W">W</option>
  <option value="Y">Y</option>
  <option value="Č">Č</option>
  <option value="Ć">Ć</option>
  <option value="Đ">Đ</option>
  <option value="Ž">Ž</option>
  <option value="Š">Š</option>
  
  </select>
        <label for="trazislovo" class="glyphicon glyphicon-search navsearch" title="Traži film po slovu"></label>
<input type="submit" name="trazislovo" id="trazislovo" class="btn btn-default butonnavbar" value="Traži">


<div class="navbar-title navbar-title2" style="margin-left: 10%">Upišite naziv filma:</div> 

<input type="text" name="filmovi" placeholder="Naziv filma" class="form-control3 nazivfilma">
<label for="trazilica" class="glyphicon glyphicon-search navsearch" title="Traži film"></label>
<input type="submit" name="trazilica" id="trazilica" class="btn btn-default butonnavbar" value="Traži">
 </form>
 
	
 	</div> <!--mojnavbar-->
        
        <div class="mojnavbar2">

 <form class="mojnavbarforma2" method="POST" action="search.php">
     <div class="navbar-title">Tražite film po žanru:</div>
        
        <select class="form-control3" name="zanr">
            
        <option>Action</option>
      	<option>Comedy</option>
      	<option>Drama</option>
      	<option>Horor</option>
      	<option>SF-Fantasy</option>
        <option>Akcija-SF</option>
        <option>Adventure</option>
        <option>Romance</option>
        <option>Crime</option>
        
        </select>
        
        <label for="trazizanr" class="glyphicon glyphicon-search navsearch" title="Traži film po žanru"></label>
<input type="submit" name="trazizanr" id="trazizanr" class="btn btn-default butonnavbar2" value="Traži" style="width: 13.7%">


<div class="navbar-title navbar-title2" style="margin-left: 10%">Upišite godinu izdavanja:</div> 

<input type="number" name="godina" placeholder="Godina izdavanja filma" class="form-control3" style="width: 24.1%;">
<label for="trazigodina" class="glyphicon glyphicon-search navsearch" title="Traži film po godini"></label>
<input type="submit" name="trazigodina" id="trazigodina" class="btn btn-default butonnavbar2" value="Traži">
 </form>
 
	
 	</div> <!--mojnavbar2-->