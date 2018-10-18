<?php
include "top.php";
if(!isset($_GET['item'])){
    header('Refresh: 0; url=galery.php');
    exit();
}else{
    $item = $_GET['item'];
}

$SQL = "SELECT * FROM galery WHERE id='$item'";
$result = $connweb->query($SQL);

while($row = mysqli_fetch_assoc($result)){
    $item_id = $row['id'];
    $item_event = $row['album'];
    $item_year = $row['year'];
    $item_h1 = $row['headline_image_1'];
    $item_h2 = $row['headline_image_2'];
    $item_h3 = $row['headline_image_3'];
    $item_h4 = $row['headline_image_4'];
    $item_color = $row['image_color'];
    $item_text = $row['image_text'];
    $item_url = $row['url'];
    $item_event_id = $row['event'];
}

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Album Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-picture-o"></i> Home</a></li>
        <li><a href="galery.php">Galerij</a></li>
        <li class="active"><?php echo $item_event; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
                <h3 class="profile-username text-center"><?php echo $item_event;?></h3>
                <?php
                    if(!empty($item_h1)){
                ?>
                <div class="row">
                    <div class="col-sm-12" style="background: url('../<?php echo $item_h1 ?>') center center; background-size: cover;height:300px; margin-left:5px; margin-bottom: 5px;width: calc(100% - 10px);"></div>
                    <!-- /.col -->
                </div>
                <?php
                    }
                ?>
                
            <p class="text-muted text-center"><?php echo $item_text;?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
          
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#info" data-toggle="tab">Info</a></li>
                <!--<li><a href="#news" data-toggle="tab">Nieuws</a></li>-->
                <li><a href="#album" data-toggle="tab">Album</a></li>
                <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
                <li class="pull-right">
                        <form action="galerysettings.php?item_id=<?php echo $item_id ?>&action=0" method="POST">
                            <input type="hidden" name="post_title" <?php echo "value='" . $item_event . "'"; ?>>
                            <button type="submit" class="btn btn-danger btn-flat" style="margin: 2px;">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                </li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="info">
                <!-- Post -->
                <div class="post">
                  <!-- /.user-block -->
                  <!-- /.row -->
                    <h3>
                        Basis informatie
                    </h3>
                    <p>
                        Hier kan de basis informatie gewijzigd worden. Je kunt hier ook de headline foto's aanpassen. Let op als er geen jaar aangegeven is zal het album niet weergegeven worden.
                    </p>
                </div>
                <!-- /.post -->
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Basis informatie</h4>
                            <form class="form-horizontal" action="galerysettings.php?action=1&item_id=<?php echo $item_id ?>" method="POST">
                                <div class="form-group">
                                    <label for="inputTitle" class="col-sm-3 control-label">Naam</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputTitle" placeholder="Naam van het feest"    value="<?php echo $item_event; ?>" name="item_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputTitle" class="col-sm-3 control-label">Beschrijving</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputTitle" placeholder="Beschrijving van het feest" value="<?php echo $item_text; ?>" name="item_text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-flat btn-primary pull-right">Wijzig</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                        <div class="col-md-6">
                            <h4>Extra informatie</h4>
                            <form class="form-horizontal" action="galerysettings.php?action=3&item_id=<?php echo $item_id ?>" method="POST" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label for="inputType" class="col-sm-3 control-label">Evenement</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="inputType" name="item_event_id">
                                            <?php                                            
                                                $SQL = "SELECT * FROM events";
                                                $result = $conn->query($SQL);
                                                while($row = mysqli_fetch_assoc($result)){
                                                    echo "<option value='" . $row['event_id'] . "'";
                                                    if($row['event_id'] == $item_event_id){
                                                        echo " selected";
                                                    }
                                                    echo ">" . $row['event_title'] . "</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputTitle" class="col-sm-3 control-label">Jaar</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="inputTitle" class="form-control" name="item_year" value="<?php echo $item_year; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-flat btn-default pull-right">Wijzig</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                  
                    <div class="post">
                      <!-- /.user-block -->
                      <!-- /.row -->
                        <h3>
                            Headline Foto's
                        </h3>
                        <p>
                            Hier kan je de headline foto's wijzigen voor dit album. Dit zijn de 4 foto's die je ziet als je op het album drukt.
                        </p>
                    </div>
                    <div id="row">
                        <div class='col-md-6 col-sm-6'>
                            <div class='box box-widget widget-user'>
                                <div class='widget-user-header bg-black' style='background:
                                <?php 
                                if(!empty($item_h1)){
                                        echo "url(\"../$item_h1\") center center; background-size: cover ";
                                    }else{
                                        echo $item_color;
                                    }
                                ?>
                                !important; height:250px;'>
                                </div> 
                            </div>
                                <form class="form-horizontal" action="galerysettings.php?action=2&img=1&item_id=<?php echo $item_id; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="cover_image" class="col-sm-3 control-label">Foto 1</label>
                                        <div class="col-sm-9">
                                            <input type="file" id="1cover_image" name="1cover_image" accept=".jpg,.jpeg,.png,.gif">
                                            <p class="help-block">let op: de afbeelding mag niet groter zijn dan 2MB.</p>
                                        </div>
                                    </div><hr>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-9">
                                            <button type="submit" class="btn btn-flat btn-default pull-right">Wijzig</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        
                        <div class='col-md-6 col-sm-6'>
                            <div class='box box-widget widget-user'>
                                <div class='widget-user-header bg-black' style='background:
                                <?php
                                    if(!empty($item_h2)){
                                        echo "url(\"../$item_h2\") center center; background-size: cover ";
                                    }else{
                                        echo $item_color;
                                    }
                                ?>
                                !important; height:250px;'>
                                </div> 
                            </div>
                                <form class="form-horizontal" action="galerysettings.php?action=2&img=2&item_id=<?php echo $item_id; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="cover_image" class="col-sm-3 control-label">Foto 2</label>
                                        <div class="col-sm-9">
                                            <input type="file" id="2cover_image" name="2cover_image" accept=".jpg,.jpeg,.png,.gif">
                                            <p class="help-block">let op: de afbeelding mag niet groter zijn dan 2MB.</p>
                                        </div>
                                    </div><hr>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-9">
                                            <button type="submit" class="btn btn-flat btn-default pull-right">Wijzig</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        
                        <div class='col-md-6 col-sm-6'>
                            <div class='box box-widget widget-user'>
                                <div class='widget-user-header bg-black' style='background:
                                <?php 
                                if(!empty($item_h3)){
                                        echo "url(\"../$item_h3\") center center; background-size: cover ";
                                    }else{
                                        echo $item_color;
                                    }
                                ?>
                                !important; height:250px;'>
                                </div> 
                            </div>
                                <form class="form-horizontal" action="galerysettings.php?action=2&img=3&item_id=<?php echo $item_id; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="cover_image" class="col-sm-3 control-label">Foto 3</label>
                                        <div class="col-sm-9">
                                            <input type="file" id="3cover_image" name="3cover_image" accept=".jpg,.jpeg,.png,.gif">
                                            <p class="help-block">let op: de afbeelding mag niet groter zijn dan 2MB.</p>
                                        </div>
                                    </div><hr>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-9">
                                            <button type="submit" class="btn btn-flat btn-default pull-right">Wijzig</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        
                        
                        <div class='col-md-6 col-sm-6'>
                            <div class='box box-widget widget-user'>
                                <div class='widget-user-header bg-black' style='background:
                                <?php 
                                if(!empty($item_h4)){
                                        echo "url(\"../$item_h4\") center center; background-size: cover ";
                                    }else{
                                        echo $item_color;
                                    }
                                ?>
                                !important; height:250px;'>
                                </div> 
                            </div>
                                <form class="form-horizontal" action="galerysettings.php?action=2&img=4&item_id=<?php echo $item_id; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="' . $row2['image_id'] . 'cover_image" class="col-sm-3 control-label">Foto 4</label>
                                        <div class="col-sm-9">
                                            <input type="file" id="4cover_image" name="4cover_image" accept=".jpg,.jpeg,.png,.gif">
                                            <p class="help-block">let op: de afbeelding mag niet groter zijn dan 2MB.</p>
                                        </div>
                                    </div><hr>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-9">
                                            <button type="submit" class="btn btn-flat btn-default pull-right">Wijzig</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <p>&nbsp;</p>
                  </div>
                </div>
                
                <div class="tab-pane" id="album">
                <!-- Post -->
                <div class="post">
                  <!-- /.user-block -->
                  <!-- /.row -->
                    <h3>
                        Album
                    </h3>
                    <p>
                        Hier kan de link naar het album aangepast worden. Dit is de link naar het album op facebook. Er kan natuurlijk ook gebruik gemaakt worden van een andere service. De link naar het album staat onder de 4 foto's.
                    </p>
                    
                    <form class="form-horizontal" action="galerysettings.php?action=4&item_id=<?php echo $item_id ?>" method="POST" enctype="multipart/form-data">
                        
                        <hr>
                                
                        <div class="form-group">
                                <label for="inputTitle" class="col-sm-1 control-label">Link</label>
                                    <div class="col-sm-10">
                                        <input type="url" id="inputTitle" placeholder="Link" class="form-control" name="item_link" value="<?php echo $item_url; ?>">
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
                                $SQL = "SELECT *, DATE_FORMAT(item_date,'%d %b %Y') AS date FROM galery_timeline_items WHERE item_galery='$item_id' ORDER BY item_date DESC, item_id DESC";
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
                
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
<?php
include "bottom.php";
?>