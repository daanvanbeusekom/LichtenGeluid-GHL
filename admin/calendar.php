<?php
include "top.php";
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-warning"></i> Waarschuwing</h4>
            De agenda is nog niet gereed voor gebruik, gebruik hem dus ook niet.                   
      </div>
    </section>
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Agenda
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-calendar"></i> Home</a></li>
        <li class="active">Agenda</li>
      </ol>
    </section>
      
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Agenda punt aanmaken</h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              <form class="form-horizontal" action="calendarsettings.php?action=1" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="text" class="form-control" placeholder="Type hier de titel" name="title">
                    </div>
                </div>
                  <p>Bij 1 dag, twee dezelfde dagen kiezen.</p>
                <hr>
                  
                <div class="form-group col-xs-12">
                    <p>Van:</p>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" style="margin-right: -12%;width: 112%;" name="date_start">
                </div>
                <!-- /.input group -->
                </div>
                  
                <div class="bootstrap-timepicker">
                <div class="form-group col-xs-12" style="width: 109%;">

                  <div class="input-group">
                    <input type="time" class="form-control timepicker" name="time_start">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div></div>
                
                <div class="form-group col-xs-12">
                    <p>Tot:</p>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" style="margin-right: -12%;width: 112%;" name="date_end">
                </div>
                <!-- /.input group -->
                </div>
                  
                <div class="bootstrap-timepicker">
                 <div class="form-group col-xs-12" style="width: 109%;">

                  <div class="input-group">
                    <input type="time" class="form-control timepicker" name="time_end">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div></div>
                
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="full_day"> Hele dag
                  </label>
                </div>
                <hr>
                  
                <div class="form-group col-xs-12" style="width:109%;">
                    <p>Type</p>
                                    
                    <select class="form-control" id="inputType" name="cat">
                        <?php                                            
                            $SQL = "SELECT * FROM event_categories";
                            $result = $conn->query($SQL);
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<option value='" . $row['cat_id'] . "'";
                                    echo ">" . $row['cat_name'] . "</option>";
                                }
                            ?>
                    </select>
                </div>
                  
                <div class="form-group col-xs-12" style="min-width: 109%!important;">
                  <p>Textarea</p>
                  <textarea class="form-control" rows="3" name="details" placeholder="Details ..."></textarea>
                </div>
                  
                <p>Kleur</p>
                <div class="form-group col-xs-12" style="border: 1px solid #ccc;margin-left: 1px;">
                    <div class="col-xs-4">
                        <div class="radio" style="margin-left: -40px;">
                        <label>
                          <input type="radio" name="color" id="optionsRadios1" value="#0073b7" checked="" style="margin-top: 7.5px; margin-left: 5.5px; background-color: white;"><a class="text-blue" href="#"><i class="fa fa-square fa-2x"></i></a>
                        </label>
                      </div>
                      <div class="radio" style="margin-left: -40px;">
                        <label>
                          <input type="radio" name="color" id="optionsRadios2" value="#00c0ef"  style="margin-top: 7.5px; margin-left: 5.5px; background-color: white;">
                         <a class="text-aqua" href="#"><i class="fa fa-square fa-2x"></i></a>
                        </label>
                      </div>
                    </div>
                    
                    <div class="col-xs-4">
                      <div class="radio" style="margin-left: -100px;">
                        <label>
                          <input type="radio" name="color" id="optionsRadios3" value="#f39c12"  style="margin-top: 7.5px; margin-left: 5.5px; background-color: white;"><a class="text-yellow" href="#"><i class="fa fa-square fa-2x"></i></a>
                        </label>
                      </div>
                      <div class="radio" style="margin-left: -100px;">
                        <label>
                          <input type="radio" name="color" id="optionsRadios4" value="#dd4b39"  style="margin-top: 7.5px; margin-left: 5.5px; background-color: white;">
                         <a class="text-red" href="#"><i class="fa fa-square fa-2x"></i></a>
                        </label>
                      </div>
                    </div>
                    
                    <div class="col-xs-4">
                      <div class="radio" style="margin-left: -160px;">
                        <label>
                            <input type="radio" name="color" id="optionsRadios5" value="#00a65a"  style="margin-top: 7.5px; margin-left: 5.5px; background-color: white;"><a class="text-green" href="#"><i class="fa fa-square fa-2x"></i></a>
                        </label>
                      </div>
                      <div class="radio" style="margin-left: -160px;">
                        <label>
                          <input type="radio" name="color" id="optionsRadios6" value="#777"  style="margin-top: 7.5px; margin-left: 5.5px; background-color: white;">
                         <a class="text-muted" href="#"><i class="fa fa-square fa-2x"></i></a>
                        </label>
                      </div>
                    </div>
            
                </div>
                  
                  <hr>              
                            
                <div class="form-group">
                    <div class="col-xs-6"></div>
                        <div class="col-xs-6 right">
                            <input type="hidden" value="1" name="page_id">
                            <input type="submit" class="btn btn-flat btn-primary pull-right" value="Opslaan">
                    </div>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>    
        
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
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