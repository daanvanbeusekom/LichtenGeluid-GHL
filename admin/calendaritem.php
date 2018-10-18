<?php
include "top.php";
if(!isset($_GET['item'])){
    header('Refresh: 0; url=calendar.php');
    exit();
}else{
    $item = $_GET['item'];
}

$SQL = "SELECT * FROM calendar_date WHERE item_id='$item'";
$result = $conn->query($SQL);

while($row = mysqli_fetch_assoc($result)){
    $item_id = $row['item_id'];
    $item_title = $row['title'];
    $item_start = $row['start'];
    $item_end = $row['end'];
    $item_allday = $row['allday'];
    $item_bgcolor = $row['bg_color'];
    $item_details = $row['details'];
    $item_type = $row['type'];
    //$item_users = $row['users']; //uncommend when needed
}

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Agenda Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-picture-o"></i> Home</a></li>
        <li><a href="calendar.php">Agenda</a></li>
        <li class="active"><?php echo $item_title; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
                <h3 class="profile-username text-center"><?php echo $item_title;?></h3>
                
                <div class="row">
                    <div class="col-sm-12" style="background-color:<?php echo $item_bgcolor;?>; height:75px; margin-left:5px; margin-bottom: 5px;width: calc(100% - 10px);"></div>
                    <!-- /.col -->
                </div>
                
                <p class="text-muted text-center"><?php echo substr($item_details, 0, 100);?>...</p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Start</b> <a class="pull-right"><?php echo $item_start;?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Eindigt</b> <a class="pull-right"><?php echo $item_end;?></a>
                    </li>
                    <li class="list-group-item">
                    <b>Status</b>
                        <div class='progress active' style="margin-top: 5px; margin-bottom: 5px;">
                            <?php
                            $date1 = time() - (7 * 24 * 60 * 60);
                            $date2 = strtotime($item_end); // Expire date
                            $today = time();
                            $timePast = $today - $date1;
                            $duration = $date2 - $date1;
                            $completed  = floor(($timePast/$duration)*100);
                            ?>
                            <div class='progress-bar progress-bar-aqua progress-bar-striped' role='progressbar' aria-valuenow='<?php echo $completed ?>' aria-valuemin='0' aria-valuemax='100' style='width: <?php echo $completed ?>%;'>
                                <span class='sr-only'><?php echo $completed ?>% Complete</span>
                            </div>
                        </div>  
                </li>
                  </ul>
                
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
                        Hier kan de basis informatie gewijzigd worden. Je kunt hier ook de details aanpassen. In de toekomst is het mogelijk om je als lid aan te melden voor een agenda punt!
                    </p>
                </div>
                <!-- /.post -->
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Basis informatie</h4>
                            <form class="form-horizontal" action="calendarsettings.php?action=2&item_id=<?php echo $item_id ?>" method="POST">
                                <div class="form-group">
                                    <label for="inputTitle" class="col-sm-3 control-label">Titel</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputTitle" placeholder="Titel"    value="<?php echo $item_title; ?>" name="item_title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kleur</label>
                                    <div class="col-sm-9">
                                        <input type="txt" class="form-control my-colorpicker1 colorpicker-element" value="<?php echo $item_bgcolor; ?>" name="item_bgcolor">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Type</label>
                                    <div class="col-sm-9">

                                        <select class="form-control" id="inputType" name="cat">
                                            <?php                                            
                                                $SQL = "SELECT * FROM event_categories";
                                                $result = $conn->query($SQL);
                                                    while($row = mysqli_fetch_assoc($result)){
                                                        echo "<option value='" . $row['cat_id'] . "'";
                                                        if($row['cat_id'] == $item_type){
                                                        echo " selected";
                                                        }
                                                        echo ">" . $row['cat_name'] . "</option>";
                                                    }
                                                ?>
                                        </select>
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
                            <h4>Tijd</h4>
                            <form class="form-horizontal" action="calendarsettings.php?action=3&item_id=<?php echo $item_id ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Van</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                          <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask=""  name="date_start">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="time" class="form-control timepicker" name="time_start">

                                                <div class="input-group-addon">
                                                  <i class="fa fa-clock-o"></i>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tot</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                          <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask=""  name="date_end">
                                        </div>
                                    </div>
                                </div>
                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="time" class="form-control timepicker" name="time_end">

                                                <div class="input-group-addon">
                                                  <i class="fa fa-clock-o"></i>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-9 right">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="full_day" <?php if($item_allday == 1){
                                                echo 'checked';
                                            } ?>> Hele dag
                                          </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-9">
                                        <button type="submit" class="btn btn-flat btn-default pull-right">Wijzig</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                  </div>
                        
                <hr style="border-top: 1px solid #d2d6de;">      
                
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Details</h4>
                            
                            <form class="form-horizontal" action="calendarsettings.php?action=4" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-12">Wijzig details</label>
                                    <div class="col-sm-12">
                                      <textarea class="textarea" placeholder="Details" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="details"><?php echo $item_details; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-0 col-sm-12">
                                        <input type="hidden" id="user_id" name="item_id" value="<?php echo $item_id;?>">
                                      <button type="submit" class="btn btn-flat btn-primary">Wijzig</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
              </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
<?php
include "bottom.php";
?>