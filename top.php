<?php
include "vars.php";
include "sessions.php";
include "database_connect.php";
?>

<!DOCTYPE html>

<html>
    
    <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
      <title><?php echo $page_title; ?> - Licht & Geluid</title>

      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="CSS/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="CSS/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="CSS/lightbox.min.css" rel="stylesheet" type="text/CSS"/>
      
      <!-- Javascript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"></script>
      <script src="JS/cookie.js"></script>
      <script>
        $(document).ready(function() {
            $('select').material_select();
          });  
      </script>
      
        
      <!-- Info	Base 64
        RGV6ZSBzaXRlIGlzIGdlbWFha3QgZG9vciBEYWFuIHZhbiBCZXVzZWtvbS4gClRoZW1hOiBMaWNodCBlbiBHZWx1aWQgVGhlbWEKVmVyc2llOiAwLjEgQmV0YSAxCkRlc2NyaXB0aWU6IEdlbWFha3Qgdm9vciBoZXQgbGljaHQgZW4gIGdlbHVpZCB2YW4gaGV0IEdITApHZW1hYWt0I GRvb3I6IERhYW4gdmFuIEJldXNla29tCndlYnNpdGU6bGljaHRlbmdlbHVpZC50aw==
		-->

    </head>
    
    <body>
      <nav class="white" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="index.php" class="brand-logo">Licht en Geluid</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
              <li><a href="over_ons.php">Over ons</a></li>
              <li><a href="gallerij.php">Gallerij</a></li>
              <li><a href="contact.php">Contact</a></li>
          </ul>

          <ul id="nav-mobile" class="side-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="over_ons.php">Over ons</a></li>
            <li><a href="galerij.php">Gallerij</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
      </nav>
        
      
        
    <?php
        
    if(isset($_COOKIE['COOKIE_WALL']) && !empty($_COOKIE['COOKIE_WALL'])){
        
    }else{
      echo '<section>';
        echo '<div id="modal1" class="modal modal-fixed-footer">';
           echo '<div class="modal-content">';
             echo '<h4>Cookies</h4>';
             echo '<p>Licht & Geluid maakt gebruik van cookies en vergelijkbare technieken voor functionele en analytische doeleinden, om het mogelijk te maken content via social media te delen, om informatie te verzamelen over uw voorkeuren en de informatie toe te voegen aan uw klantprofiel en om de inhoud van haar websites en advertenties af te stemmen op uw voorkeuren. Voor meer informatie over het cookie gebruik </p><br><br>
             <p>';
             echo 'Cookies kunnen ook geplaatst en gebruikt worden door derden, zoals advertentienetwerken en adverteerders. Door op "Akkoord" te klikken, gaat u akkoord met de plaatsing en gebruik van cookies via Licht & Geluid en derden. Ook gaat u dan akkoord met de verwerking van de (persoons)gegevens die met behulp van cookies kunnen worden verzameld en verwerkt voor de onder tot en met genoemde doeleinden. Meer informatie over deze verwerking van (persoons)gegevens kunt u vinden in de toepasselijke privacyverklaring respectievelijk deze derden.
             </p>';
           echo '</div>';
           echo '<div class="modal-footer">';
             echo '<a href="#!" id="mylink" onclick="Cookie_Wall()" class="modal-action modal-close waves-effect waves-green btn-flat ">Akkoord</a>';
           echo'</div>';
         echo '</div>';
       echo '</section>';
    }
        
?>
        
        