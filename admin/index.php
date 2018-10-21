<?php
include "top.php";

$user = $_SESSION['user_name'];

$SQL = "SELECT *, DATE_FORMAT(user_birthday,'%d %b %Y') AS birthday, DATE_FORMAT(user_since,'%d %b %Y') AS since FROM users WHERE user_name='$user'";
$result = $conn->query($SQL);

while($row = mysqli_fetch_assoc($result)){
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $user_email = $row['user_email'];
    $user_image = $row['user_image'];
    $user_cover_image = $row['user_cover_image'];
    $user_birthday = $row['birthday']; 
    $user_birthday_o = $row['user_birthday'];
    $user_description = $row['user_description'];
    $user_since = $row['since'];
    $user_place = $row['user_place'];
    $user_niveau = $row['user_niveau'];
    $user_notice = $row['user_notice'];
}
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version <?php echo $version ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      </section>
      
        <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-facebook"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Facebook Likes</span>
                <script src="JS/facebookcount.js" type='text/javascript'></script>
                <span class="info-box-number facebookcount"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-twitter"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Twitter Followers</span>
                <!--<script src="JS/twittercount.js" type='text/javascript'></script>-->
              <span class="info-box-number twittercount"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-calendar-times-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Evenementen</span>
                <span class="info-box-number">
                <?php
                    $SQL = "SELECT COUNT(*) AS amount FROM events";
                    
                    $result = $conn->query($SQL);
                    echo mysqli_fetch_assoc($result)['amount'];
                ?>
                </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-orange"><i class="ion ion-social-instagram-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Instagram followers</span>
                <!--<script src="JS/odometer.js"></script>
                <script src="JS/main.js"></script>
                <link rel="stylesheet" href="JS/odometer-theme-default.css">-->
                <script src="JS/instagramcount.js" type='text/javascript'></script>
              <span class="info-box-number instagramcount" id="channelFollowers"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
          
        <?php if(empty($user_cover_image) || empty($user_birthday) || empty($user_description) || empty($user_place) || empty($user_niveau)){
        
          ?>
        <div class="col-md-6">
          <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Welkom</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
              </div>
              
               <div class="box-body">
                   <h3>Welkom op de Administrator-pagina van de Licht & Geluid website!</h3>
                   <br>
                   <p>Hier kun je alles vinden wat met de website of het Licht & Geluid te maken heeft. Ook kun je in de agenda kijken en zien wanneer er iets is.
                   Dit is een kleine introductie om je om te leren gaan met het admin-paneel. Ook zul je een paar instellingen moeten veranderen om de introductie cursus te voltooien, zo ga je bijvoorbeeld een nieuwe profiel afbeelding in stellen. Ook kun je hier onder een check-list zien met wat je al afgerond hebt.</p>
                   
                   <p>Dit admin-paneel bestaat uit de volgende items:</p>
                   <div class="row">
                   <div class="col-md-2">
                       <ol>
                        <li>Dashboard</li>
                        <li>Pagina's</li>
                        <li>Galerij</li>
                        <li>Evenementen</li>
                        <li>Agenda</li>
                        <li>Profielen</li>
                        <li>Chat</li>
                       </ol>
                   </div>
                   <div class="col-md-10">
                       <ul class="list-unstyled">
                           <li>Dit is het centrale centrum, hier zie je alles in 1 oogwenk</li>
                           <li>Hier kun je de verschillende pagina's van de site bewerken</li>
                           <li>Hier staan de foto's die op de site staan, je kunt ook nieuwe toevoegen</li>
                           <li>Hier staan de grotere gebeurtenissen die meer voorbereiding vergen</li>
                           <li>Hier staan alles gebeurteniss overzichtelijk in een kalender</li>
                           <li>Hier kun je je profiel aanpassen en die van een ander bekijken</li>
                           <li>hier kun je met de andere leden van het licht & geluid chatten</li>
                       </ul>
                   </div>
                   </div>
                
                   <h4>Checklist</h4>
                   <div class="row">
                       <div class="col-md-1">
                        <ul class="list-unstyled">
                            <li>1.</li> 
                            <li>2.</li> 
                            <li>3.</li>
                            <li>4.</li>
                            <li>5.</li>
                        </ul>
                       </div>
                       <div class="col-md-4">
                           <ol class="list-unstyled">
                            <?php if(isset($user_cover_image) && !empty($user_cover_image)){ 
                            echo '<li><i class="fa fa-check text-green"></i><s>Kies een omslag afbeelding</li></s>';
                            }else{
                             echo '<li>Kies een omslag afbeelding</li>';
                            }
                            
                            if(isset($user_description) && !empty($user_description)){ 
                            echo '<li><i class="fa fa-check text-green"></i><s>Kies een beschrijving</li></s>';
                            }else{
                             echo '<li>Kies een beschrijving</li>';
                            }
    
                            if(isset($user_birthday) && !empty($user_birthday)){ 
                            echo '<li><i class="fa fa-check text-green"></i><s>Stel je verjaardag in</li></s>';
                            }else{
                             echo '<li>Stel je verjaardag in</li>';
                            }
    
                            if(isset($user_niveau) && !empty($user_niveau)){ 
                            echo '<li><i class="fa fa-check text-green"></i><s>Stel je school niveau in</li></s>';
                            }else{
                             echo '<li>Stel je school niveau in</li>';
                            }
    
                            if(isset($user_place) && !empty($user_place)){ 
                            echo '<li><i class="fa fa-check text-green"></i><s>Stel je woonplaats in</li></s>';
                            }else{
                             echo '<li>Stel je woonplaats in</li>';
                            }
                            ?>
                           </ol>
                       </div>

                       <div class="col-md-7">
                           <ul class="list-unstyled">
                            <?php if(isset($user_cover_image) && !empty($user_cover_image)){ 
                                echo "<li class='text-success'>gedaan</li>";
                            } 
    
                            if(isset($user_description) && !empty($user_description)){ 
                                echo "<li class='text-success'>gedaan</li>";
                            }
    
                            if(isset($user_birthday) && !empty($user_birtday)){ 
                                echo "<li class='text-success'>gedaan</li>";
                            }
    
                            if(isset($user_niveau) && !empty($user_niveau)){ 
                                echo "<li class='text-success'>gedaan</li>";
                            }
    
                            if(isset($user_place) && !empty($user_place)){ 
                                echo "<li class='text-success'>gedaan</li>";
                            }
                            ?>
                           </ul>
                       </div>
                   </div>
                    <br><p>De checklist die je hierboven staat is nog om rekening te houden met de planningen die we maken met wie er wanneer is.</p>
              </div>
            </div>
          </div>
          
          <?php
            }
          ?>
          
        <!-- Left col -->
        <div class="col-md-6">
          <div class="box box-succes">
                <div class="box-header with-border">
                  <h3 class="box-title">Volgende evenement</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
              </div>
                      <?php 
                        $SQL = "SELECT *, DATE_FORMAT(event_date,'%d %b %Y') AS date FROM events WHERE event_date >= NOW() ORDER BY event_date LIMIT 1";
                        $result = $conn->query($SQL);
                        while($row = mysqli_fetch_assoc($result)){
                            
                        $event_titel = $row['event_title'];
                        $event_location = $row['event_location'];   
                        $date = $row['date'];
                      
                        echo "<div class='widget-user-header bg-black box-body' style='background: " . $row['event_color'] . " ";
                            if(!empty($row['event_cover_image'])){
                                echo "url(\"" . $row['event_cover_image'] . "\") center center;background-size: cover;height: 200px; ";
                            }
                        echo "!important;'>";
                            
                    ?>
                  <h3 class='widget-user-username' style='margin-top: -0px;'><?php echo $event_titel; ?></h3></div>
                        <div class='box-footer' style='padding-top: 10px!important;'>
                            <div class='row'>
                                <div class='col-sm-6 border-right'>
                                    <div class='description-block'>
                                        <h5 class='description-header'><?php echo $date; ?></h5>
                                        <span class='description-text'>Datum</span>
                                    </div>
                                </div>
                                <div class='col-sm-6'>
                                    <div class='description-block'>
                                        <h5 class='description-header'><?php echo $event_location; ?></h5>
                                        <span class='description-text'>Locatie</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="events.php" class="uppercase">Alle evenementen</a>
                </div>
                <!-- /.box-footer -->
              </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        
      <?php
        if($_SESSION['user_level'] >= 1){
        
        ?>
        <div class="col-md-6">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Registratie code's</h3>

            </div>
              <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>regKey</th>
                  <th>Link</th>
                </tr>
                </thead>
                  
                <tbody>
                    
                <?php
                $width = " <script>document.write(screen.width); </script>";
                $height = " <script>document.write(screen.height); </script>";
                
                if($width <= 1280){
                    $limit = 9;
                }else{
                    $limit = 8;
                }
                
                $SQL = "SELECT * FROM regkeys ORDER BY regKey_id LIMIT " . $limit . "";
                $result = $conn->query($SQL);
    
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>" . $row['regKey_id'] . "</td>";
                    echo "<td>" . $row['regKey_regKey'] . "</td>";
                    echo "<td><a href='http://localhost/website-14/admin/register.php?regKey=" . $row['regKey_regKey'] . "'>Link</a></td>";
                    echo "<tr>";
                }
                ?>
                </tbody>
              </table>
        
            </div>
          </div>
        </div>
        
          <?php
        }
            $SQL = "SELECT COUNT(*) AS NumberOfUrders FROM users;";
            $result1 = $conn->query($SQL);
            $row1 = $result1->fetch_assoc();{
          ?>
          <div class="col-md-6">
          <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Gebruikers</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger"><?php echo $row1['NumberOfUrders'] ?> Gebruikers</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
              <?php
                }
              ?>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    
                    <?php 
                      $SQL = "SELECT user_name, user_image, DATE_FORMAT(user_since,'%d')AS user_date_day, DATE_FORMAT(user_since,'%m')AS user_date_month, DATE_FORMAT(user_since,'%Y') AS user_date_year FROM users ORDER BY user_name ASC LIMIT 4"; 
                      $result = $conn->query($SQL);  
                      
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<li><a href='profile.php?show_user=" . $row['user_name'] . "'>";
                                echo "<img src='" . $row['user_image'] . "' alt='User Image' width='80'>";
                                echo "<a class='users-list-name' href='profile.php?show_user=" . $row['user_name'] . "'>" . $row['user_name'] . "</a>";
                                echo "<span class='users-list-date'>" . $row['user_date_day'] . "-" . $row['user_date_month'] .  "-" . $row['user_date_year'] .  "</span>";
                            echo "</a></li>";
                        }
                    ?>
                    
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="profiles.php" class="uppercase">Alle gebruikers</a>
                </div>
                <!-- /.box-footer -->
              </div>
          <!-- /.box -->
        </div>
        
          <?php chat_final($conn, 6, 1, 0); ?>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
      
<?php   
include "bottom.php";
?>