<!DOCTYPE html>
<html>
<?php include 'headpart.php'; ?>

    <body>
        
        <div class="flex-container">

<div class="korisni2">
 
    <form method="POST" action="php/regscript.php" class="signup" enctype="multipart/form-data">
        
        <span><strong>Unesite željeno korisničko ime:</strong></span><br>
        <input class="form-control2" type="text" name="korisnik"><br>
        
        <span><strong>Unesite željenu lozinku:</strong></span><br>
        <input class="form-control2" type="password" name="lozinka"><br><br>
        
        <span><strong>Odaberite vašu profilnu sličicu:</strong></span>
        <input type="file" class="file" name="profilnaslika" id="profilnaslika">
        <label for="profilnaslika"><span class="glyphicon glyphicon-search"></span></label><br><br>
        
        <input type="submit" name="registracija" class="btn btn-default butoni" value="Podnesi registraciju">
    
</form> 
    
    
    <form action="index.php" method="POST" class="signup">
        
         <input type="submit" name="homeindex" class="btn btn-default butoni" value="Vrati se na početnu stranicu" title="Početna stranica">
    </form>
  
  </div> <!--korisni2-->



 </div> <!--flex container-->
        
    </body>
    
    
    
</html>

