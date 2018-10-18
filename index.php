<?php
$page_title = "Home";
include 'top.php';

$SQL = "SELECT * FROM `images` WHERE image_id = 1";
$result1 = $connection->query($SQL);
$row = $result1->fetch_assoc();{
  $image_1    = $row['image'];   
}

$SQL = "SELECT * FROM `images` WHERE image_id = 2";
$result2 = $connection->query($SQL);
$row = $result2->fetch_assoc();{
  $image_2    = $row['image'];
  $image_text_2 = $row['image_text'];
}

$SQL = "SELECT * FROM `images` WHERE image_id = 3";
$result3 = $connection->query($SQL);
$row = $result3->fetch_assoc();{
  $image_3    = $row['image'];
  $image_text_3 = $row['image_text'];
}
?>


      <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">Licht en Geluid</h1>
            <div class="row center">
              <h5 class="header col s12 light">De website van het licht en geluid van het Groene Hart Lyceum</h5>
            </div>
            <div class="row center">
              <a href="gallerij.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Bekijk Foto's</a>
            </div>
            <br><br>

          </div>
        </div>
        <div class="parallax"><img src="<?php echo "$image_1";?>" alt="Unsplashed background img 1"></div>
      </div>


      <div class="container">
        <div class="section">

          <!--   Icon Section   -->
          <div class="row">
              
              <?php
                $SQL = "SELECT * FROM `icon_txt` ORDER BY id";
                $result8 = $connection->query($SQL);
                while($row = mysqli_fetch_assoc($result8)){
              
                    echo '<div class="col s12 m4">';
                        echo '<div class="icon-block">';
                            echo '<h2 class="center grey-text"><i class="material-icons">' . $row['icon'] . '</i></h2>';
                            echo '<h5 class="center">' . $row['title'] . '</h5>';
                            echo '<p class="light">';
                                echo $row['text'];
                            echo '</p>';
                        echo '</div>';
                    echo '</div>';
                }
              ?>
          </div>

        </div>
      </div>


      <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
          <div class="container">
            <div class="row center">
              <h5 class="header col s12 light"><?php echo "$image_text_2";?></h5>
            </div>
          </div>
        </div>
        <div class="parallax"><img src="<?php echo "$image_2";?>" alt="Unsplashed background img 2"></div>
      </div>

      <div class="container">
        <div class="section">

          <div class="row">
            <?php
                $SQL = "SELECT * FROM `pages_txt` WHERE page = 'home'";
                $result5 = $connection->query($SQL);
                $row5 = mysqli_fetch_assoc($result5);
                    echo '<div class="col s12 center">';
                        echo '<h3><i class="mdi-content-send brown-text"></i></h3>';
                        echo '<h4>' . $row5['title'] . '</h4>';
                        echo '<p class="left-align light">';
                        echo $row5['text'];
                        echo '</p>';
                    echo '</div>';
                    
              ?>
              
          </div>

        </div>
      </div>


      <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
          <div class="container">
            <div class="row center">
              <h5 class="header col s12 light"><?php echo "$image_text_3";?></h5>
            </div>
          </div>
        </div>
        <div class="parallax"><img src="<?php echo "$image_3";?>" alt="Unsplashed background img 3"></div>
      </div>

<?php

include 'bottom.php';

?>