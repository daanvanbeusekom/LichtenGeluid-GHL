<?php
include "top.php";
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Evenementen
        <small>Overzicht</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-calendar-times-o"></i> Home</a></li>
        <li class="active">Evenementen</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li>
                            <form action="eventsettings.php?action=5" method="POST">
                                <button type="submit" class="btn btn-success btn-flat btn-sm" style="margin: 5px; margin-bottom: 9px; margin-left: 9px;">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </form>
                        </li>
                        <li>
                            <h4>Voeg evenement toe</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      <!-- Info boxes -->
          <?php 
            $SQL = "SELECT *, DATE_FORMAT(event_date,'%d %b %Y') AS date FROM events ORDER BY event_date ASC";
            $col_number = 1;  
          
            $result = $conn->query($SQL);
            while($row = mysqli_fetch_assoc($result)){
                
                if($col_number == 1){
                    echo "<div class='row'>";
                    $row_ended = false;
                }
                
                //$color = new ColorGenerator();
                
                echo "<a href='event.php?event=" . $row['event_id'] . "'><div class='col-md-3 col-sm-6'>";
                    echo "<div class='box box-widget widget-user'>";
                        echo "<div class='widget-user-header bg-black' style='background: " . $row['event_color'] . " ";
                            if(!empty($row['event_cover_image'])){
                                echo "url(\"" . $row['event_cover_image'] . "\") center center; background-size: cover ";
                            }
                        echo "!important;'>";
                            echo "<h3 class='widget-user-username'><b>" . $row['event_title'] . "</b></h3>";
                        echo "</div>"; 
                        echo "<div class='box-footer' style='padding-top: 10px!important;'>";
                            echo "<div class='row'>";
                                    $date1 = strtotime($row['post_date']);
                                    $date2 = strtotime($row['event_date']); // Expire date
                                    $today = time();
                                    $timePast = $today - $date1;
                                    $duration = $date2 - $date1;
                                    $completed  = floor(($timePast/$duration)*100);
                
                                    if($completed >= 100){
                                         $color = "green";
                                    }else{
                                        $color = "aqua";
                                    } 
                
                                echo "<div class='col-xs-12'><div class='progress progress-sm active'><div class='progress-bar progress-bar-" . $color . " progress-bar-striped' role='progressbar' aria-valuenow='" . $completed . "' aria-valuemin='0' aria-valuemax='100' style='width: " . $completed . "%'><span class='sr-only'>" . $completed . "% Complete</span></div></div></div>";
                            echo "</div>";
                            echo "<div class='row'>";
                                echo "<div class='col-sm-6 border-right'>";
                                    echo "<div class='description-block'>";
                                        echo "<h5 class='description-header'>" . $row['date'] . "</h5>";
                                        echo "<span class='description-text'>Datum</span>";
                                    echo "</div>";
                                echo "</div>";
                                echo "<div class='col-sm-6'>";
                                    echo "<div class='description-block'>";
                                        echo "<h5 class='description-header'>" . $row['event_location'] . "</h5>";
                                        echo "<span class='description-text'>Locatie</span>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>"; 
                    echo "</div>";
                echo "</div></a>";
                
                if($col_number == 4){
                    echo "</div>";
                    $col_number = 0;
                    $row_ended = true;
                }
                $col_number++;
            }
            
            if(!$row_ended){
                echo "</div>";
                $col_number = 0;
                $row_ended = true;
            }
            
          ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include "bottom.php";
?>