<?php
$page_title = "Gallerij";
include 'top.php';
?>

    <!--<div class="preloader-background">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>-->

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">Gallerij</h1>
            <br><br><br><br>
            <div class="row center">
              <h5 class="header col s12 light">Hier vind je alle foto's van feesten e.d.</h5>
            </div>
          </div>
        </div>
        <div class="parallax"><img src="IMG/background7.jpg" alt="Unsplashed background img 1"></div>
      </div>

      <div class="container">
        <div class="section">

          <div class="row">
            <div class="col s12 center">
              <h3><i class="mdi-content-send brown-text"></i></h3>
                <p class="left-align light">Op deze pagina kun je alle foto's vinden uit het huidige jaar en en het jaar er voor. Ben je op zoek naar foto's die eerder zijn gemaakt? Druk dan op <a href="https:/facebook.com/MHEventzz"> deze </a>link. Om de foto's te zien druk je op het kaartje hier worden 4 foto's getoont voor meer foto's staat er onder een linkje. Heb je vragen? Of wil je een specifieke foto hebben doorvoor verwijzen wij je graag door naar onze contact pagina.</p>
            </div>
          </div>

        </div>
      </div>

    <div class="container hide-on-small-only">
        <div class="section">
            
            <div class="row">
                <?php 
                $SQL = "SELECT year FROM galery GROUP BY year DESC LIMIT 2";
                $result = $connection->query($SQL);
                while($row2 = mysqli_fetch_assoc($result)){
                    $year = $row2['year']; 
                    
                echo '<div class="col s6"><h1 style="margin-left:35%">' . $year . '</h1></div>';
                }
                ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section">

   <div class="row"> 
       <div class="container col s12 m6">
                <div class="section">
                   <ul class="collapsible popout" data-collapsible="accordion">
       
       <?php 
        
        $SQL = "SELECT year FROM galery GROUP BY year DESC";
        $result = $connection->query($SQL);
        while($row3 = mysqli_fetch_assoc($result)){
            $year = $row3['year']; 
                
        
        $SQL = "SELECT * FROM galery WHERE year = $year ORDER BY year DESC";
        $result = $connection->query($SQL);
        while($row = mysqli_fetch_assoc($result)){
            $text = $row['image_text'];
            $album = $row['album'];
            $image = $row['headline_image_1'];
            $headline_image_1 = $row['headline_image_1'];
            $headline_image_2 = $row['headline_image_2'];
            $headline_image_3 = $row['headline_image_3'];
            $headline_image_4 = $row['headline_image_4'];
            $url = $row['url'];
            
            echo '<li>
                    <div class="collapsible-header active">
                        <div class="row" style="margin-left:-15px; margin-right:-15px;">

                              <div class="card" style="margin:0; box-shadow:none;">
                                <div class="card-image">
                                  <img src="' . $image . '" class="" style="padding: 0!important;">

                                  <span class="card-title">' . $album . '</span>
                                </div>
                                <div class="card-content">
                                  <p>' . $text . '</p>
                                </div>
                              </div>

                          </div>
                      </div>';

                    echo '<div class="collapsible-body">

                    <div class="thumb_galery">
                    <p>';
                      echo "<a href='IMG\background7.jpg' data-lightbox='Gallerij'>";
                                        echo '<img src="IMG\background7.jpg" class="col s12 m6 t5">';
                                   echo "</a>";
                      echo "<a href='IMG\background6.jpg' data-lightbox='Gallerij'>";
                                        echo '<img src="IMG\background6.jpg" class="col s12 m6 t5">';
                                    echo "</a>";
                      echo "<a href='IMG\background3.jpg' data-lightbox='Gallerij'>";
                                        echo '<img src="IMG\background3.jpg" class="col s12 m6 t5">';
                                    echo "</a>";
                      echo "<a href='IMG\background4.jpg' data-lightbox='Gallerij'>";
                                        echo '<img src="IMG\background4.jpg" class="col s12 m6 t5">';
                                    echo "</a>";
                        echo '</p>
                    </div>
                    <p style="margin-left: 70%;">klik<a href="' . $url . '"> hier </a>voor meer fotos</p>
            
            </div>
          </li>';
        }}?>
        </ul>
        </div>
       </div>
       
        
      <div class="container col s12 m6">
                <div class="section">
                   <ul class="collapsible popout" data-collapsible="accordion">
       
       <?php 
        
        $SQL = "SELECT year FROM galery GROUP BY year DESC";
        $result = $connection->query($SQL);
        while($row3 = mysqli_fetch_assoc($result)){
            $year = $row3['year'] - 1; 
                
        
        $SQL = "SELECT * FROM galery WHERE year = $year ORDER BY year DESC";
        $result = $connection->query($SQL);
        while($row = mysqli_fetch_assoc($result)){
            $text = $row['image_text'];
            $album = $row['album'];
            $image = $row['headline_image_1'];
            $headline_image_1 = $row['headline_image_1'];
            $headline_image_2 = $row['headline_image_2'];
            $headline_image_3 = $row['headline_image_3'];
            $headline_image_4 = $row['headline_image_4'];
            $url = $row['url'];
            
            echo '<li>
                    <div class="collapsible-header active">
                        <div class="row" style="margin-left:-15px; margin-right:-15px;">

                              <div class="card" style="margin:0; box-shadow:none;">
                                <div class="card-image">
                                  <img src="' . $image . '" class="" style="padding: 0!important;">

                                  <span class="card-title">' . $album . '</span>
                                </div>
                                <div class="card-content">
                                  <p>' . $text . '</p>
                                </div>
                              </div>

                          </div>
                      </div>';

                    echo '<div class="collapsible-body">

                    <div class="thumb_galery">
                    <p>';
                      echo "<a href='IMG\background7.jpg' data-lightbox='Gallerij'>";
                                        echo '<img src="IMG\background7.jpg" class="col s12 m6 t5">';
                                   echo "</a>";
                      echo "<a href='IMG\background6.jpg' data-lightbox='Gallerij'>";
                                        echo '<img src="IMG\background6.jpg" class="col s12 m6 t5">';
                                    echo "</a>";
                      echo "<a href='IMG\background3.jpg' data-lightbox='Gallerij'>";
                                        echo '<img src="IMG\background3.jpg" class="col s12 m6 t5">';
                                    echo "</a>";
                      echo "<a href='IMG\background4.jpg' data-lightbox='Gallerij'>";
                                        echo '<img src="IMG\background4.jpg" class="col s12 m6 t5">';
                                    echo "</a>";
                        echo '</p>
                    </div>
                    <p style="margin-left: 70%;">klik<a href="' . $url . '"> hier </a>voor meer fotos</p>
            
            </div>
          </li>';
        }}?>
        </ul>
        </div>
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
        <div class="parallax"><img src="IMG/background8.jpg" alt="Unsplashed background img 3"></div>
      </div>

<?php
include 'bottom.php';
?>