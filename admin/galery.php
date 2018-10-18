<?php
include "top.php";
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Galerij
        <small>Overzicht</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-picture-o"></i> Home</a></li>
        <li class="active">Galerij</li>
      </ol>
    </section>
      
      

    <!-- Main content -->
      
    <?php 
        $SQL = "SELECT year FROM galery GROUP BY year DESC";
        $result = $connweb->query($SQL);
        while($row = mysqli_fetch_assoc($result)){
            $year = $row['year'];            
            
            echo '<section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li>
                                    <form action="galerysettings.php?action=5" method="POST">
                                        <button type="submit" class="btn btn-success btn-flat btn-sm" style="margin: 5px; margin-bottom: 9px; margin-left: 9px;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <h4>' . $year . '</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              <!-- Info boxes -->';


                        $col_number = 1;  

                        $SQL = "SELECT * FROM galery WHERE year = $year";
                        $result2 = $connweb->query($SQL);
                        while($row2 = mysqli_fetch_assoc($result2)){

                        if($col_number == 1){
                            echo "<div class='row'>";
                            $row_ended = false;
                        }

                        echo "<a href='galery_item.php?item=" . $row2['id'] . "'><div class='col-md-3 col-sm-6'>";
                            echo "<div class='box box-widget widget-user'>";
                                echo "<div class='widget-user-header bg-black' style='background: " . $row2['image_color'] . " ";
                                    if(!empty($row2['headline_image_1'])){
                                        echo "url(\"../" . $row2['headline_image_1'] . "\") center center; background-size: cover ";
                                    }
                                echo "!important; height:250px;'>";
                                    echo "<h3 class='widget-user-username'><b>" . $row2['album'] . "</b></h3>";
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



             echo '</section>';
       } 
    ?>
      
  </div>
  <!-- /.content-wrapper -->
<?php
include "bottom.php";
?>