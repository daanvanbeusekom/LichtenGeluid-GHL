<?php
include "top.php";

if($_SESSION['user_level'] >= 1){
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gebruikers
        <small>Overzicht</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-users"></i> Home</a></li>
        <li class="active">Gebruikers</li>
      </ol>
    </section>
      
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Verwijder of pas gebruikers aan</h3>

              <!--<div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Zoeken">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Gebruiker</th>
                  <th>Email</th>
                  <th>Lid since</th>
                  <th>Status</th>
                  <th>Level</th>
                  <th>Verwijderen</th>
                  <th>Herstel wachtwoord</th>
                  <th></th>
                </tr>
                </thead>
                  
                <tbody>
                    
                <?php
                $SQL = "SELECT * FROM users WHERE 1";
                $result = $conn->query($SQL);
    
                while($row = $result->fetch_assoc()){
                    if($row['user_online'] == 0){
                        $user_online = '<i class="fa fa-circle text-red"></i> Offline';
                    }elseif($row['user_online'] == 1){
                        $user_online = '<i class="fa fa-circle text-green"></i> Online';
                    }elseif($row['user_online'] == 2){
                        $user_online = '<i class="fa fa-circle text-yellow"></i> Afwezig';
                    }
                        echo "<tr>";
                            echo "<td>" . $row['user_id'] . "</td>";
                            echo "<td>" . $row['user_name'] . "</td>";
                        echo "<td><a href='" . $row['user_email'] . "'>" . $row['user_email'] . "</a></td>";
                            echo "<td>" . $row['user_since'] . "</td>";
                            echo "<td>" . $user_online . "</td>";
                            echo "<td>
                                    <form method='POST' action='userssettings.php?action=1'>
                                    <input type='number' name='user_level' min='0' max='3' value='" . $row['user_level'] . "'>
                                    <input type='hidden' value='" . $row['user_id'] . "' name='user_id2'/>
                                    <input type='submit' style='position: absolute; left: -9999px'/>
                                    </form>
                                 </td>";
                            $user_id1 = $row['user_id'];
                            echo "<td><a href='userssettings.php?action=0&user=" . $row['user_id'] . "' ><i class='fa fa-ban' aria-hidden='true'></i></td>";
                            echo "<td style='width:1%'>" . $row['user_recovery'] . "</td>";
                            echo "<td><a href='recover.php?recKey=" . $row['user_recovery'] . "'>link</a></td>";
                        echo "</tr>";
                }
                ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
        
        
        <div class="row">
        <div class="col-md-6">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Genereer nieuwe Registratie code's</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form class="form-horizontal" method='POST' action="userssettings.php?action=2" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label for="inputKey" class="col-sm-2 control-label">Reg 1</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="inputKey" placeholder="Key" name="key_1" value="TDGHL_<?php echo generateRandomString(); ?>">
                    </div>
                  </div>
                      
                  <div class="form-group">
                    <label for="inputKey" class="col-sm-2 control-label">Reg 2</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="inputKey" placeholder="Key" name="key_2" value="TDGHL_<?php echo generateRandomString(); ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputKey" class="col-sm-2 control-label">Reg 3</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="inputKey" placeholder="Key" name="key_3" value="TDGHL_<?php echo generateRandomString(); ?>">
                    </div>
                  </div>
                      
                  <div class="form-group">
                    <label for="inputKey" class="col-sm-2 control-label">Reg 4</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="inputKey" placeholder="Key" name="key_4" value="TDGHL_<?php echo generateRandomString(); ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputKey" class="col-sm-2 control-label">Reg 5</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="inputKey" placeholder="Key" name="key_5" value="TDGHL_<?php echo generateRandomString(); ?>">
                    </div>
                  </div><br/>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-flat btn-primary">Toevoegen</button>
                    </div>
                  </div>
                  
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
        
        <div class="col-md-6">
          <div class="box box-danger">
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
                $SQL = "SELECT * FROM regkeys ORDER BY regKey_id";
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
        </div>
        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
include "bottom.php";
}else{
?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        403 Error Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">403 error</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> 403</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Verboden toegang.</h3>

          <p>
            Je bent niet gemachtigd dit gedeelte weer te geven!
            Je kan wel <a href="index.php">naar het dashboard</a> of hieronder zoeken!.
          </p>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Zoeken">

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 
    include "bottom.php";
} ?>