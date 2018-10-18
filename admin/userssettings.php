<?php
include "top.php";

$action = "0";

if(isset($_GET['action'])){
    $action = $_GET['action'];
}
if(isset($_GET['user'])){
    $user_id1 = $_GET['user'];
}

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Instellingen
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-users"></i> Home</a></li>
        <li><a href="users.php">Users</a></li>
      </ol>
    </section>
      
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
          <div class="col-md-12">
              <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-gears"></i>

                      <h3 class="box-title">Gewijzigde Instellingen</h3>
                    </div>
                    <div class="box-body">
                        <?php 
                            if($action == 0){
                                $SQL = "DELETE FROM users WHERE user_id='$user_id1'";
                                
                                $result = $conn->query($SQL);
                                    
                                if(!$result){
                                    echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes
                                    echo '</div>';
                                }else{
                                    echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>de user is succesvol verwijderd</p></div>';
                                    header('Refresh: 3; url=users.php');
                                }
                            }else if($action == 1){
                                //Basis informatie
                                $title = $conn->real_escape_string($_POST['user_level']);
                                $post_id = $conn->real_escape_string($_POST['user_id2']);

                                $SQL = "UPDATE users SET user_level='$title' WHERE user_id='$post_id'";
                                
                                $result = $conn->query($SQL);
                                
                                if($_SESSION['user_id'] == $post_id){
                                $_SESSION['user_level'] = $title;
                                }
                                
                                if(!$result){
                                        echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes, uncomment when needed
                                        echo '</div>';
                                    }else{
                                        echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>het level is succesvol gewijzigd</p></div>';
                                        header('Refresh: 2; url=users.php');
                                }
                            }else if($action == 2){
                                $reg_1 = $conn->real_escape_string($_POST['key_1']);
                                $reg_2 = $conn->real_escape_string($_POST['key_2']);
                                $reg_3 = $conn->real_escape_string($_POST['key_3']);
                                $reg_4 = $conn->real_escape_string($_POST['key_4']);
                                $reg_5 = $conn->real_escape_string($_POST['key_5']);
                                
                                $SQL = "INSERT INTO regkeys(regKey_regKey) VALUES ('$reg_1'), ('$reg_2'), ('$reg_3'), ('$reg_4'), ('$reg_5')";
                                
                                $result = $conn->query($SQL);
                                
                                if(!$result){
                                        echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes, uncomment when needed
                                        echo '</div>';
                                    }else{
                                        echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>De keys zijn succesvol teogevoegd!</p></div>';
                                        header('Refresh: 2; url=users.php');
                                }
                            }
                        ?>
                                
                  </div>
              </div>
          </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include "bottom.php";
?>






