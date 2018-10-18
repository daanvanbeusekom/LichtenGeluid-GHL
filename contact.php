<?php
$page_title = "Contact";
include 'top.php';

$action = "0";

if(isset($_GET['action'])){
    $action = $_GET['action'];
}
    
if($action == 0){
    
$SQL = "SELECT * FROM `images` WHERE image_id = 6";
$result1 = $connection->query($SQL);
$row = $result1->fetch_assoc();{
  $image_1    = $row['image'];   
}

$SQL = "SELECT * FROM `images` WHERE image_id = 7";
$result2 = $connection->query($SQL);
$row = $result2->fetch_assoc();{
  $image_2    = $row['image'];
  $image_text_2 = $row['image_text'];
}
    
$SQL = "SELECT * FROM `images` WHERE image_id = 8";
$result3 = $connection->query($SQL);
$row = $result3->fetch_assoc();{
  $image_3    = $row['image'];
  $image_text_3 = $row['image_text'];
}
    
$SQL = "SELECT * FROM contact WHERE id=1";
$result4 = $connection->query($SQL);
$row = $result4->fetch_assoc();{
    $location = $row['location'];
    $email = $row['email'];
}
?>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">Contact</h1>
            <br><br><br><br>
            <div class="row center">
              <h5 class="header col s12 light">Wil je zelf bij het licht & geluid of heb je een vraag stel hem hier</h5>
            </div>
          </div>
        </div>
        <div class="parallax"><img src="<?php echo $image_1 ?>" alt="Unsplashed background img 1"></div>
      </div>

    <div class="container">
        <div class="section">
            
            <div class="row">
            <div class="col s12 center">
              <h3><i class="mdi-content-send brown-text"></i></h3>
              <h4>Informatie</h4>
              <p class="left-align light col s6">De licht & Geluid groep is actief op het Groene Hart Lyceum. Voor buitenschoolse evenmenten verwijzen wij u door naar <a href="http://mheventzz.nl">MHEventzz</a>.
              <br><br>
                Locatie:&emsp;&emsp;<?php echo $location ?>
               <br><br>  
                E-mail:&ensp;&emsp;&emsp;<a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
               <br><br>
                     
              </p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2448.941382177073!2d4.656015515924272!3d52.13538777241299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5dafb40286d1f%3A0xc86a0e5c2e80cced!2sTolstraat+11%2C+2405+VS+Alphen+aan+den+Rijn!5e0!3m2!1snl!2snl!4v1507485574015" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
            
        </div>
    </div>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
          <div class="container">
            <div class="row center">
            </div>
          </div>
        </div>
        <div class="parallax"><img src="<?php echo $image_2 ?>" alt="Unsplashed background img 3"></div>
      </div>

    <div class="container">
        <div class="section">
            
            <div class="row">
            <div class="col s12 center">
              <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>Aanmelden bij het licht & Geluid</h4>
            </div>
            <form method="POST" action="contact.php?action=1" class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" type="text" class="validate" required>
                  <label for="first_name">Voornaam</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate" required>
                  <label for="last_name">Achternaam</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate" required>
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
              <div class="input-field col s6">
                    <select required>
                      <option value="" disabled selected>Leeftijd</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                    </select>
                    <label>Leeftijd</label>
                  </div>
                
                <div class="input-field col s6">
                    <select required>
                      <option value="" disabled selected>Kies hier je leerjaar</option>
                      <option value="1">Klas 1</option>
                      <option value="2">Klas 2</option>
                      <option value="3">Klas 3</option>
                      <option value="4">Klas 4</option>
                    </select>
                    <label>Leerjaar</label>
                  </div>
                </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" class="materialize-textarea" required></textarea>
                  <label for="textarea1">Motivatie</label>
                </div>
                  
              
              
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="action">Verzenden
                <i class="material-icons right">send</i>
              </button>
            </form>
          </div>
            
        </div>
    </div>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
          <div class="container">
            <div class="row center">
            </div>
          </div>
        </div>
        <div class="parallax"><img src="<?php echo $image_3 ?>" alt="Unsplashed background img 3"></div>
      </div>

<?php
include 'bottom.php'; 
?>

<?php
    }elseif($action == 1){
?>

<?php

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if (mail("35807@youscope.nl","My subject",$msg)) {
    echo 'Sent';
} else {
    echo 'Error while sending email';
}
?>

<?php
}
?>