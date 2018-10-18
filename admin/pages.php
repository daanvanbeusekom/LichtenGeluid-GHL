<?php
$request_page = $_GET['page'];
if($request_page == "home"){
$page = 'home';
include "top.php";
    
$SQL = "SELECT * FROM pages_txt WHERE page = '$page'";
$result = $connweb->query($SQL);
    
while($row = mysqli_fetch_assoc($result)){
    $page_id = $row['id'];
    $page_name = $row['page'];
    $page_title = $row['title'];
    $page_txt = $row['text'];
}
    
if($page_id != 0){    
    $SQL = "SELECT * FROM images WHERE category_id = '1'";
    $result2 = $connweb->query($SQL);
    
    $row2 = mysqli_fetch_assoc($result2);
    $page_img = $row2['image'];
    $page_img_txt = $row2['image_text'];
    $page_img_id = $row2['image_id'];
}
    

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pagina
        <small>Home</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-file-text-o"></i> Home</a></li>
        <li class="active">Pagina</li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">

      <div class="row">
          <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#txt" data-toggle="tab">Info</a></li>
                    <li><a href="#img" data-toggle="tab">Afbeeldingen</a></li>
                    <li><a href="#icon" data-toggle="tab">Icoon</a></li>
                    <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="txt">
                        <div class="post">
                            <h3>
                                Tekst op de Home-pagina
                            </h3>
                            <p>
                                Hier kan de tekst op de home-pagina bewerkt worden.
                        </div>
                        
                    
                            <div class="box-body">
                                <form class="form-horizontal" action="pagessettings.php?action=1" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" placeholder="Type hier de titel" name="page_title" value="<?php echo $page_title ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <textarea class="textarea" placeholder="Type uw bericht" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="page_txt"><?php echo $page_txt ?>
                                    </textarea>
                                    <hr>
                                    <div class="form-group">
                                        <div class="col-xs-6"></div>
                                        <div class="col-xs-6 right">
                                            <input type="hidden" value="<?php echo $page_id ?>" name="page_id"/>
                                            <input type="submit" class="btn btn-flat btn-primary pull-right" value="Wijzigingen opslaan"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box-body -->
                          
                    </div>
                    
                    <div class="tab-pane" id="img">
                        <div class="post">
                            <h3>
                                Afbeeldingen op de Home-pagina
                            </h3>
                            <p>
                                Hier kunnen de afbeeldingen gewijzigd worden.
                            </p>
                        </div>
                            
                        <div class="box-body">
                            <?php  
                                $SQL = "SELECT * FROM images WHERE category_id = '1'";
                                $result2 = $connweb->query($SQL);

                                while($row2 = mysqli_fetch_assoc($result2)){
                                    
                                    echo "<div class='col-md-6'>";
                                    echo "<img src='../" . $row2['image'] . "' class='col-md-12' style='margin-bottom:10px;'>";
                                    echo '<form class="form-horizontal" action="pagessettings.php?action=2&img=' . $row2['image_id'] . '&page_id=1" method="POST" enctype="multipart/form-data">';
                                    if(isset ($row2['image_text']) && !empty ($row2['image_text'])){
                                    echo '<div class="form-group">';
                                        echo '<div class="col-xs-12">';
                                            echo '<input type="text" class="form-control" placeholder="Type hier het bijschrift" name="image_text" value="' . $row2['image_text'] . '"><br/><hr>';
                                        echo '</div>';
                                    echo '</div>';
                                    }
                                    echo '<div class="form-group">';
                                    echo '<label for="inputSkills" class="col-sm-3 control-label">Background Foto</label>';
                                    echo '<div class="col-sm-9">';
                                        echo '<input type="file" id="' . $row2['image_id'] . 'cover_image" name="' . $row2['image_id'] . 'cover_image" accept=".jpg,.jpeg,.png,.gif">';
                                        echo '<p class="help-block">let op: de afbeelding mag niet groter zijn dan 2MB.</p>';
                                    echo '</div>';
                                     echo '</div><hr>';
                                    echo '<div class="form-group">';
                                        echo '<div class="col-sm-offset-2 col-sm-9">';
                                            echo '<button type="submit" class="btn btn-flat btn-default pull-right">Wijzig</button>';
                                        echo '</div>';
                                    echo '</div>';
                                    echo '</form>';
                                    echo '</div>';
                                    
                                }
                            ?>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="icon">
                        <div class="post">
                            <h3>
                               Icoon tekst gegevens op de Home-pagina
                            </h3>
                            <p>
                                Hier kunnen de icoon teksten op de home-pagina gewijzigd worden.
                            </p>
                        </div>
                        
                        <div class="box-body">
                            
                            <?php
                                $SQL = "SELECT * FROM icon_txt WHERE 1";
                                $result = $connweb->query($SQL);

                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<div class='col-md-4'>";
                                        echo '<form class="form-horizontal" method="POST" action="pagessettings.php?action=4&page=home&page_id=' . $page_id . '" enctype="multipart/form-data">';
                                            echo '<div class="form-group">';
                                                echo '<div class="col-xs-12">';
                                                    echo '<input type="text" class="form-control" placeholder="Type hier de titel" name="icon_title" value="' . $row['title'] . '">';
                                                echo '</div>';
                                            echo '</div>';
                                    
                                            echo '<textarea class="textarea" placeholder="Type uw bericht" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="icon_text">' . $row['text'] . '</textarea>';
                                    
                                            echo '<h4>Het icoon dat te zien is:</h4>';
                                    
                                            echo '<div class="form-group">';
                                                echo '<div class="col-xs-12">';
                                                    echo '<input type="text" class="form-control" placeholder="Type hier de titel" name="icon_icon" value="' . $row['icon'] . '">';
                                                echo '</div>';
                                            echo '</div>';
                                    
                                            echo '<p> Op <a href="http://materializecss.com/icons.html">deze</a> site kun je verschillende icoontjes bekijken. Heb je er een gevonden plak dan de tekst die onder het icoontje staat in het vak hier boven.';
                                    
                                            echo '<hr>';
                                            echo '<div class="form-group">';
                                                echo '<div class="col-xs-6"></div>';
                                                echo '<div class="col-xs-6 right">';
                                                    echo '<input type="hidden" value="' . $row['id'] . '" name="icon_id"/>';
                                                    echo '<input type="submit" class="btn btn-flat btn-primary pull-right" value="Wijzigingen opslaan"/>';
                                                echo '</div>';
                                            echo '</div>';

                                        echo '</form>';
                                    echo "</div>";
                                }
                            ?>
                            
                        </div>
                    </div>
                    
                    
                    <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        <ul class="timeline timeline-inverse">
                          <!-- END timeline item -->
                            <?php
                                $SQL = "SELECT *, DATE_FORMAT(item_date,'%d %b %Y') AS date FROM page_timeline_items WHERE item_page='$page_id' ORDER BY item_date DESC, item_id DESC";
                                $result = $conn->query($SQL);

                                while($row = mysqli_fetch_assoc($result)){

                                    $class = timeline_item_cat_to_class($conn, $row['item_cat']);

                                    if(empty($oldDate) || $row['date'] != $oldDate){

                                        echo "<li class='time-label'>";
                                        echo "<span class='bg-blue'>" . $row['date'] . "</span>";
                                        echo "</li>";

                                        $oldDate = $row['date'];
                                    }

                                    echo "<li>";
                                    echo "<i class='" . $class . "'></i>";
                                    echo "<div class='timeline-item'>";
                                    echo "<h3 class='timeline-header no-border'>";
                                    echo $row['item_title'];
                                    echo "</h3>";
                                    echo "</li>";
                                }
                            ?>
                            <li>
                                <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                        </ul>
                    </div> <!-- /.tab-pane -->
                    
              </div> <!--/.tab-content -->
          </div> <!-- /.nav-tabs-custom -->
      </div>
    </div>
          
      </section>
</div>
<?php
include "bottom.php";
}elseif($request_page == "about_us"){
include "top.php";
$page = 'about';
    
$SQL = "SELECT * FROM pages_txt WHERE page = '$page'";
$result = $connweb->query($SQL);
    

    $page_id = $row['id'];
    $page_name = $row['page'];
    $page_title = $row['title'];
    $page_txt = $row['text'];
    
if($page_id != 0){    
    $SQL = "SELECT * FROM images WHERE category_id = '1'";
    $result2 = $connweb->query($SQL);
    
    $row2 = mysqli_fetch_assoc($result2);
    $page_img = $row2['image'];
    $page_img_txt = $row2['image_txt'];
    $page_img_id = $row2['image_id'];
}
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pagina
        <small>Over ons</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-file-text-o"></i> Home</a></li>
        <li class="active">Pagina</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#txt" data-toggle="tab">Info</a></li>
                    <li><a href="#img" data-toggle="tab">Afbeeldingen</a></li>
                    <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="txt">
                        <div class="post">
                            <h3>
                                Tekst op de Over ons-pagina
                            </h3>
                            <p>
                                Hier kan de tekst op de over ons-pagina bewerkt worden.
                        </div>
                        
                    
                            <div class="box-body">
                                <?php
    
                                $SQL = "SELECT COUNT(*) AS NumberOfUrders FROM pages_txt WHERE page = 'about'";
                                $result1 = $connweb->query($SQL);
                                $row1 = $result1->fetch_assoc();{
                                    $i = $row1['NumberOfUrders'];
                                }
    
                                while($row = mysqli_fetch_assoc($result)){
                                    $page_id = $row['id'];
                                    
                                echo '<h2>' . $row['title'] . '</h2>';
                                
                                echo '<form class="form-horizontal" action="pagessettings.php?action=1" method="POST" enctype="multipart/form-data">';
                                    echo '<div class="form-group">';
                                        echo '<div class="col-xs-12">';
                                            echo '<input type="text" class="form-control" placeholder="Type hier de titel" name="page_title" value="' . $row['title'] . '">';
                                        echo '</div>';
                                    echo '</div>';
                                    echo '<hr>';
                                    echo '<textarea class="textarea" placeholder="Type uw bericht" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="page_txt">' . $row['text'] . 
                                    '</textarea>';
                                    echo '<hr>';
                                    echo '<div class="form-group">';
                                        echo '<div class="col-xs-6"></div>';
                                        echo '<div class="col-xs-6 right">';
                                            echo '<input type="hidden" value="' . $row['id'] . '" name="page_id"/>';
                                            echo '<input type="submit" class="btn btn-flat btn-primary pull-right" value="Wijzigingen opslaan"/>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</form>';
                                    
                                    if($row['id']-1 != $i){
                                        echo "<hr style='border-bottom: 1px solid #d2d6de;'>";
                                    }
                                    
                                }
                                ?>
                            </div>
                            <!-- /.box-body -->
                          
                    </div>
                    
                    <div class="tab-pane" id="img">
                        <div class="post">
                            <h3>
                                Afbeeldingen op de About-pagina
                            </h3>
                            <p>
                                Hier kunnen de afbeeldingen gewijzigd worden.
                            </p>
                        </div>
                        
                        <div class="box-body">
                            
                            <?php  
                                $SQL = "SELECT * FROM images WHERE category_id = '2'";
                                $result2 = $connweb->query($SQL);

                                while($row2 = mysqli_fetch_assoc($result2)){
                                    echo "<div class='col-md-6'>";
                                    echo "<img src='../" . $row2['image'] . "' class='col-md-12' style='margin-bottom:10px;'>";
                                    echo '<form class="form-horizontal" action="pagessettings.php?action=2&img=' . $row2['image_id'] . '&page_id=2" method="POST" enctype="multipart/form-data">';
                                    if(isset ($row2['image_text']) && !empty ($row2['image_text'])){
                                    echo '<div class="form-group">';
                                        echo '<div class="col-xs-12">';
                                            echo '<input type="text" class="form-control" placeholder="Type hier het bijschrift" name="image_text" value="' . $row2['image_text'] . '"><br/><hr>';
                                        echo '</div>';
                                    echo '</div>';
                                    }
                                    echo '<div class="form-group">';
                                    echo '<label for="' . $row2['image_id'] . 'cover_image" class="col-sm-3 control-label">Background Foto</label>';
                                    echo '<div class="col-sm-9">';
                                        echo '<input type="file" id="' . $row2['image_id'] . 'cover_image" name="' . $row2['image_id'] . 'cover_image" accept=".jpg,.jpeg,.png,.gif">';
                                        echo '<p class="help-block">let op: de afbeelding mag niet groter zijn dan 2MB.</p>';
                                    echo '</div>';
                                     echo '</div><hr>';
                                    echo '<div class="form-group">';
                                        echo '<div class="col-sm-offset-2 col-sm-9">';
                                            echo '<button type="submit" class="btn btn-flat btn-default pull-right">Wijzig</button>';
                                        echo '</div>';
                                    echo '</div>';
                                    echo '</form>';
                                    echo '</div>';
                                    
                                    
                                }
                            ?>
                        </div>
                    </div>
                    
                    
                    <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        <ul class="timeline timeline-inverse">
                          <!-- END timeline item -->
                            <?php
                                $SQL = "SELECT *, DATE_FORMAT(item_date,'%d %b %Y') AS date FROM page_timeline_items WHERE item_page IN (2,3,4) ORDER BY item_date DESC, item_id DESC";
                                $result = $conn->query($SQL);

                                while($row = mysqli_fetch_assoc($result)){

                                    $class = timeline_item_cat_to_class($conn, $row['item_cat']);

                                    if(empty($oldDate) || $row['date'] != $oldDate){

                                        echo "<li class='time-label'>";
                                        echo "<span class='bg-blue'>" . $row['date'] . "</span>";
                                        echo "</li>";

                                        $oldDate = $row['date'];
                                    }

                                    echo "<li>";
                                    echo "<i class='" . $class . "'></i>";
                                    echo "<div class='timeline-item'>";
                                    echo "<h3 class='timeline-header no-border'>";
                                    echo $row['item_title'];
                                    echo "</h3>";
                                    echo "</li>";
                                }
                            ?>
                            <li>
                                <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                        </ul>
                    </div> <!-- /.tab-pane -->
                    
              </div> <!--/.tab-content -->
          </div> <!-- /.nav-tabs-custom -->
      </div>
        </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
<?php
include "bottom.php";
}elseif($request_page == "contact"){
include "top.php";
$page = 'contact';
    
$SQL = "SELECT * FROM pages_txt WHERE page = '$page'";
$result = $connweb->query($SQL);
    

    $page_id = $row['id'];
    $page_name = $row['page'];
    $page_title = $row['title'];
    $page_txt = $row['text'];
    
if($page_id != 0){    
    $SQL = "SELECT * FROM images WHERE category_id = '1'";
    $result2 = $connweb->query($SQL);
    
    $row2 = mysqli_fetch_assoc($result2);
    $page_img = $row2['image'];
    $page_img_txt = $row2['image_txt'];
    $page_img_id = $row2['image_id'];
}
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pagina
        <small>Contact</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-file-text-o"></i> Home</a></li>
        <li class="active">Pagina</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#txt" data-toggle="tab">Info</a></li>
                    <li><a href="#img" data-toggle="tab">Afbeeldingen</a></li>
                    <li><a href="#contact" data-toggle="tab">Contact</a></li>
                    <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="txt">
                        <div class="post">
                            <h3>
                                Tekst op de Contact-pagina
                            </h3>
                            <p>
                                Hier kan de tekst op de contact-pagina bewerkt worden.
                        </div>
                        
                    
                            <div class="box-body">
                                <?php
    
                                $SQL = "SELECT COUNT(*) AS NumberOfUrders FROM pages_txt WHERE page = 'contact'";
                                $result1 = $connweb->query($SQL);
                                $row1 = $result1->fetch_assoc();{
                                    $i = $row1['NumberOfUrders'];
                                }
    
                                while($row = mysqli_fetch_assoc($result)){
                                    
                                echo '<h2>' . $row['title'] . '</h2>';
                                
                                echo '<form class="form-horizontal" action="pagessettings.php?action=1" method="POST" enctype="multipart/form-data">';
                                    echo '<div class="form-group">';
                                        echo '<div class="col-xs-12">';
                                            echo '<input type="text" class="form-control" placeholder="Type hier de titel" name="page_title" value="' . $row['title'] . '">';
                                        echo '</div>';
                                    echo '</div>';
                                    echo '<hr>';
                                    echo '<textarea class="textarea" placeholder="Type uw bericht" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="page_txt">' . $row['text'] . 
                                    '</textarea>';
                                    echo '<hr>';
                                    echo '<div class="form-group">';
                                        echo '<div class="col-xs-6"></div>';
                                        echo '<div class="col-xs-6 right">';
                                            echo '<input type="hidden" value="' . $row['id'] . '" name="page_id"/>';
                                            echo '<input type="submit" class="btn btn-flat btn-primary pull-right" value="Wijzigingen opslaan"/>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</form>';
                                    
                                    if($row['id']-4 != $i){
                                        echo "<hr style='border-bottom: 1px solid #d2d6de;'>";
                                    }
                                }
                                ?>
                            </div>
                            <!-- /.box-body -->
                          
                    </div>
                    
                    <div class="tab-pane" id="img">
                        <div class="post">
                            <h3>
                                Afbeeldingen op de Contact-pagina
                            </h3>
                            <p>
                                Hier kunnen de afbeeldingen gewijzigd worden.
                            </p>
                        </div>
                        
                        <div class="box-body">
                            
                            <?php  
                                $SQL = "SELECT * FROM images WHERE category_id = '3'";
                                $result2 = $connweb->query($SQL);

                                while($row2 = mysqli_fetch_assoc($result2)){
                                    echo "<div class='col-md-6'>";
                                    echo "<img src='../" . $row2['image'] . "' class='col-md-12' style='margin-bottom:10px;'>";
                                    echo '<form class="form-horizontal" action="pagessettings.php?action=2&img=' . $row2['image_id'] . '&page_id=5" method="POST" enctype="multipart/form-data">';
                                    if(isset ($row2['image_text']) && !empty ($row2['image_text'])){
                                    echo '<div class="form-group">';
                                        echo '<div class="col-xs-12">';
                                            echo '<input type="text" class="form-control" placeholder="Type hier het bijschrift" name="image_text" value="' . $row2['image_text'] . '"><br/><hr>';
                                        echo '</div>';
                                    echo '</div>';
                                    }
                                    echo '<div class="form-group">';
                                    echo '<label for="' . $row2['image_id'] . 'cover_image" class="col-sm-3 control-label">Background Foto</label>';
                                    echo '<div class="col-sm-9">';
                                        echo '<input type="file" id="' . $row2['image_id'] . 'cover_image" name="' . $row2['image_id'] . 'cover_image" accept=".jpg,.jpeg,.png,.gif">';
                                        echo '<p class="help-block">let op: de afbeelding mag niet groter zijn dan 2MB.</p>';
                                    echo '</div>';
                                     echo '</div><hr>';
                                    echo '<div class="form-group">';
                                        echo '<div class="col-sm-offset-2 col-sm-9">';
                                            echo '<button type="submit" class="btn btn-flat btn-default pull-right">Wijzig</button>';
                                        echo '</div>';
                                    echo '</div>';
                                    echo '</form>';
                                    echo '</div>';
                                    
                                }
                            ?>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="contact">
                        <div class="post">
                            <h3>
                               Contact gegevens op de Contact-pagina
                            </h3>
                            <p>
                                Hier kunnen de contact gegevens op de contac-pagina gewijzigd worden.
                            </p>
                        </div>
                        
                        <div class="box-body">
                            <?php
                            $SQL = "SELECT * FROM contact WHERE 1";
                            $result = $connweb->query($SQL);

                            while($row = $result->fetch_assoc()){
                                $location = $row['location'];
                                $email = $row['email'];
                            }
                            ?>
                            
                            <form class="form-horizontal" method='POST' action="pagessettings.php?action=3&page=contact&page_id=0" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label for="inputKey" class="col-sm-1 control-label">Locatie</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" id="location" placeholder="Locatie" name="location" value="<?php echo $location ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputKey" class="col-sm-1 control-label">Email</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $email ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-1 col-sm-2 pull-left">
                                      <button type="submit" class="btn btn-flat btn-primary">Wijzigen</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    
                    <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        <ul class="timeline timeline-inverse">
                          <!-- END timeline item -->
                            <?php
                                $SQL = "SELECT *, DATE_FORMAT(item_date,'%d %b %Y') AS date FROM page_timeline_items WHERE item_page='$page_id' ORDER BY item_date DESC, item_id DESC";
                                $result = $conn->query($SQL);

                                while($row = mysqli_fetch_assoc($result)){

                                    $class = timeline_item_cat_to_class($conn, $row['item_cat']);

                                    if(empty($oldDate) || $row['date'] != $oldDate){

                                        echo "<li class='time-label'>";
                                        echo "<span class='bg-blue'>" . $row['date'] . "</span>";
                                        echo "</li>";

                                        $oldDate = $row['date'];
                                    }

                                    echo "<li>";
                                    echo "<i class='" . $class . "'></i>";
                                    echo "<div class='timeline-item'>";
                                    echo "<h3 class='timeline-header no-border'>";
                                    echo $row['item_title'];
                                    echo "</h3>";
                                    echo "</li>";
                                }
                            ?>
                            <li>
                                <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                        </ul>
                    </div> <!-- /.tab-pane -->
                    
              </div> <!--/.tab-content -->
          </div> <!-- /.nav-tabs-custom -->
      </div>
        </div>
      <!-- /.row -->
        </div>

    </section>
    <!-- /.content -->
  </div>
<?php
include "bottom.php";
}
?>