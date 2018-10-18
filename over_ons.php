<?php
$page_title = "Over ons";
include 'top.php';

$SQL = "SELECT * FROM `images` WHERE image_id = 4";
$result1 = $connection->query($SQL);
$row = $result1->fetch_assoc();{
  $image_1    = $row['image'];   
}

$SQL = "SELECT * FROM `images` WHERE image_id = 5";
$result2 = $connection->query($SQL);
$row = $result2->fetch_assoc();{
  $image_2    = $row['image'];
  $image_text_2 = $row['image_text'];
}
?>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">Over ons</h1>
            <br><br><br><br>
            <div class="row center">
              <h5 class="header col s12 light">Een korte introductie over ons, school en over de dingen die wij doen</h5>
            </div>
          </div>
        </div>
        <div class="parallax"><img src="<?php echo $image_1 ?>" alt="Unsplashed background img 1"></div>
      </div>

    <div class="container">
        <div class="section">
            
            <div class="row">
              <?php
                $SQL = "SELECT * FROM `pages_txt` WHERE page = 'about' AND id ='2'";
                $result1 = $connection->query($SQL);
                $row1 = mysqli_fetch_assoc($result1);
                    echo '<div class="col s12 center">';
                        echo '<h3><i class="mdi-content-send brown-text"></i></h3>';
                        echo '<h4>' . $row1['title'] . '</h4>';
                        echo '<p class="left-align light col s6">';
                        echo $row1['text'];
                        echo '</p>';
              ?>

              <img class="materialboxed right-align col s6" data-caption="Nieuwjaarsgala 2017" width="650" style="margin-top:20px" src="IMG/background5.jpg">
            </div>
          </div>
            
        </div>
    </div>
     
    <div class="container">
        <div class="divider teal-text text-lighten-2" style="height:2px;"></div>
    </div>   
        
    <div class="container">
        <div class="section">
            
            <div class="row">
            <?php
                $SQL = "SELECT * FROM `pages_txt` WHERE page = 'about' AND id ='3'";
                $result1 = $connection->query($SQL);
                $row1 = mysqli_fetch_assoc($result1);
                    echo '<div class="col s12 center">';
                        echo '<h3><i class="mdi-content-send brown-text"></i></h3>';
                        echo '<h4>' . $row1['title'] . '</h4>';
                        echo '<p class="left-align light">';
                        echo $row1['text'];
                        echo '</p>';
                    echo '</div>';
              ?>
          </div>
            
        </div>
    </div>

    <div class="container">
        <div class="divider teal-text text-lighten-2" style="height:2px;"></div>
    </div>

    <div class="container">
        <div class="section">
            
            <div class="row">
            <?php
                $SQL = "SELECT * FROM `pages_txt` WHERE page = 'about' AND id ='4'";
                $result1 = $connection->query($SQL);
                $row1 = mysqli_fetch_assoc($result1);
                    echo '<div class="col s12 center">';
                        echo '<h3><i class="mdi-content-send brown-text"></i></h3>';
                        echo '<h4>' . $row1['title'] . '</h4>';
                        echo '<p class="left-align light">';
                        echo $row1['text'];
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
            </div>
          </div>
        </div>
        <div class="parallax"><img src="<?php echo $image_2 ?>" alt="Unsplashed background img 3"></div>
      </div>

<?php
include 'bottom.php';
?>