<?php
include "top.php";

$action = "0";

if(isset($_GET['action'])){
    $action = $_GET['action'];
}

//Check all varaibles
if($action != 1){
$user_id = $conn->real_escape_string($_POST['user_id']);
$user_name = $conn->real_escape_string($_POST['user_name']);
$user_email = $conn->real_escape_string($_POST['user_email']);
$user_birthday = $conn->real_escape_string($_POST['user_birthday']);
$user_description = $conn->real_escape_string($_POST['user_description']);
$user_place = $conn->real_escape_string($_POST['user_place']);
$user_niveau = $conn->real_escape_string($_POST['user_niveau']);
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
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="profiles.php">Profiles</a></li>
        <li class="active">
            <?php 
                if(isset($user_name) && !empty($user_name)){
                  echo $user_name;   
                }else{
                    echo 'Instellingen';
                }
            ?>
          </li>
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
                        if($action != 1){

						
                        //Update the database
                        $SQL = "UPDATE users SET user_name='$user_name', user_email='$user_email', user_birthday='$user_birthday', user_description='$user_description', user_place='$user_place', user_niveau='$user_niveau' WHERE user_id='$user_id'";

                        $result = $conn->query($SQL);

                        //Check if all went right
                        if(!$result ){
                            //something went wrong, display the error
                            echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                            echo $conn->error(); //debugging purposes, uncomment when needed
                            echo '</div>';
                        }else{
                            echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>Je instellingen zijn succesvol gewijzigd</p></div>';

                            $_SESSION['user_name']  = $user_name;
                            $_SESSION['user_email'] = $user_email;
                            
                            if(isset($_COOKIE['user']) && !empty($_COOKIE['user']) && isset($_COOKIE['user_email']) && !empty($_COOKIE['user_email']) && isset($_COOKIE['logged_in']) && !isset($_GET['change_user'])){
                                //Update the cookies
                                setcookie('user',$_SESSION['user_name'],time() + (86400 * 30), "/"); //86400 = 1 day
                                setcookie('user_email',$_SESSION['user_email'],time() + (86400 * 30), "/"); //86400 = 1 day
                                setcookie('logged_in',1,time() + (86400 * 30), "/"); //86400 = 1 day
                            }
                            header('Refresh: 3; url=profile.php');
                            
                        }

                        $errorArray = array();
                        
                        //Upload the image
                        if(isset($_FILES["fileToUpload"]["name"]) && !empty($_FILES["fileToUpload"]["name"])){

                            $target_dir = "IMG/profile/PP/";
                            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                            // Check if image file is a actual image or fake image
                            if(isset($_POST["submit"])) {
                                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                if($check !== false) {
                                    $errorArray[] = "File is an image - " . $check["mime"] . ".";
                                    $uploadOk = 1;
                                } else {
                                    $errorArray[] = "File is not an image.";
                                    $uploadOk = 0;
                                }
                            }

                            // Check if file already exists
                            if (file_exists($target_file)) {
                                $errorArray[] = "Sorry, file already exists.";
                                $uploadOk = 0;
                            }

                             // Check file size
                            if ($_FILES["fileToUpload"]["size"] > 500000) {
                               $errorArray[] = "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }

                            // Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif" ) {
                                $errorArray[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }

                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "<div class='callout callout-danger'><strong>Mislukt :(</strong><br>Sorry, your file was not uploaded. The following errors occurred:<br>";
                                echo '<ul>';
                                foreach($errorArray as $key => $value){ /* walk through the array so all the errors get displayed */
                                    echo '<li>' . $value . '</li>'; /* this generates a nice error list */
                                }
                                echo '</ul></div>';
                            // if everything is ok, try to upload file
                            } else {
                                
                                 $SQL = "UPDATE users SET user_image='$target_file' WHERE user_email='$user_email'";

                                $result = $conn->query($SQL);

                                //Check if all went right
                                if(!$result ){
                                    //something went wrong, display the error
                                    echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                    echo $conn->error(); //debugging purposes, uncomment when needed
                                    echo '</div>';
                                }else{
                                    echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>Je instellingen zijn succesvol gewijzigd</p></div>';
                                    header('Refresh: 3; url=profile.php');
                                    
                                    $_SESSION['user_image'] = $target_file;
                                    
                                }
                                
                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                    echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>Je profiel foto is succesvol geupload, en wat een plaatje!</p></div>';
                                    
                                    $title = "rofiel foto gewijzigd";
                                    $noti_title = "P" . $title;
                                    $Titem_title = "<a href='profile.php?show_user=" . $_SESSION['user_name'] . "'>" . $_SESSION['user_name'] . "</a> heeft zijn p" . $title;
                                    
                                    noti_create($conn, 2, $noti_title, "profile.php", $_SESSION['user_id']);
                                    timeline_item_create($conn, $Titem_title, 2, $_SESSION['user_id']);
                                    header('Refresh: 3; url=index.php');
                                } else {
                                    echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan met het uploaden van je foto</p></div>';
                                }
                            }
                        }
                        
                        //Upload the cover image
                        if(isset($_FILES["cover_image"]["name"]) && !empty($_FILES["cover_image"]["name"])){

                            $target_dir = "IMG/profile/CP/";
                            $target_file = $target_dir . basename($_FILES["cover_image"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                            // Check if image file is a actual image or fake image
                            if(isset($_POST["submit"])) {
                                $check = getimagesize($_FILES["cover_image"]["tmp_name"]);
                                if($check !== false) {
                                    $errorArray[] = "File is an image - " . $check["mime"] . ".";
                                    $uploadOk = 1;
                                } else {
                                    $errorArray[] = "File is not an image.";
                                    $uploadOk = 0;
                                }
                            }

                            // Check if file already exists
                            if (file_exists($target_file)) {
                                $errorArray[] = "Sorry, file already exists.";
                                $uploadOk = 0;
                            }

                             // Check file size
                            if ($_FILES["cover_image"]["size"] > 1000000) {
                               $errorArray[] = "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }

                            // Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif" ) {
                                $errorArray[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }

                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "<div class='callout callout-danger'><strong>Mislukt :(</strong><br>Sorry, your file was not uploaded. The following errors occurred:<br>";
                                echo '<ul>';
                                foreach($errorArray as $key => $value){ /* walk through the array so all the errors get displayed */
                                    echo '<li>' . $value . '</li>'; /* this generates a nice error list */
                                }
                                echo '</ul></div>';
                            // if everything is ok, try to upload file
                            } else {
                                
                                 $SQL = "UPDATE users SET user_cover_image='$target_file' WHERE user_email='$user_email'";

                                $result = $conn->query($SQL);

                                //Check if all went right
                                if(!$result ){
                                    //something went wrong, display the error
                                    echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                    echo $conn->error(); //debugging purposes, uncomment when needed
                                    echo '</div>';
                                }else{
                                    echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>Je instellingen zijn succesvol gewijzigd</p></div>';
                                
                                }
                                
                                if (move_uploaded_file($_FILES["cover_image"]["tmp_name"], $target_file)) {
                                    echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>Je profiel foto is succesvol geupload, en wat een plaatje!</p></div>';
                                    
                                    $title = "mslag foto gewijzigd";
                                    $noti_title = "O" . $title;
                                    $Titem_title = "<a href='profile.php?show_user=" . $_SESSION['user_name'] . "'>" . $_SESSION['user_name'] . "</a> heeft zijn o" . $title;
                                    
                                    noti_create($conn, 8, $noti_title, "profile.php", $_SESSION['user_id']);
                                    timeline_item_create($conn, $Titem_title, 2, $_SESSION['user_id']);
                                    header('Refresh: 3; url=index.php');
                                } else {
                                    echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan met het uploaden van je foto</p></div>';
                                }
                            }
                        }
                        }else{
                            $user_id = $conn->real_escape_string($_POST['user_id']);
                            $user_notice = $conn->real_escape_string($_POST['user_notice']);
                            
                            //Update the database
                            $SQL = "UPDATE users SET user_notice='$user_notice' WHERE user_id='$user_id'";

                            $result = $conn->query($SQL);

                            //Check if all went right
                            if(!$result ){
                                //something went wrong, display the error
                                echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                echo $conn->error(); //debugging purposes, uncomment when needed
                                echo '</div>';
                            }else{
                                echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>Je instellingen zijn succesvol gewijzigd</p></div>';
                                header('Refresh: 3; url=profile.php');
                            }
                        }
                     ?>                        
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
