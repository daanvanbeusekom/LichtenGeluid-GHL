<?php
include "top.php";
//Check all varaibles

$action = $_GET['action'];
if(isset($_GET['item_id'])){
    $item_id = $_GET['item_id'];
                            
    $SQL = "SELECT * FROM galery WHERE id=$item_id";

    $result = $connweb->query($SQL);
    $row = mysqli_fetch_assoc($result);
    $item_name = $row['album'];
}else{
    $item_name = 'Nieuw Album';
}

if(isset($_GET['img'])){
    $img_id = $_GET['img'];
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
        <li><a href="index.php"><i class="fa fa-image"></i> Home</a></li>
        <li><a href="galery.php">Galerij</a></li>
        <li class="active"><?php echo $item_name; ?></li>
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
                                $SQL = "DELETE FROM galery WHERE id='$item_id'";
                                
                                $result = $connweb->query($SQL);
                                    
                                if(!$result){
                                    echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes
                                    echo '</div>';
                                }else{
                                    echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>het album is succesvol verwijderd</p></div>';
                                    header('Refresh: 3; url=galery.php');
                                }
                            }else if($action == 1){
                                //Basis informatie
                                $item_name = $conn->real_escape_string($_POST['item_name']);
                                $item_text = $conn->real_escape_string($_POST['item_text']);
                                
                                if(!empty($item_name) || !empty($item_text)){
                                    $SQL = "UPDATE galery SET album='$item_name', image_text='$item_text' WHERE id='$item_id'";
                                    
                                    $result = $connweb->query($SQL);
                                
                                    if(!$result){
                                        echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes, uncomment when needed
                                        echo '</div>';
                                    }else{
                                        echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>de basis informatie is succesvol gewijzigd</p></div>';
                                        $Titem_title = "<a href='profile.php?show_user=" . $_SESSION['user_name'] . "'>" . $_SESSION['user_name'] . "</a> heeft de basis informatie gewijzigd";
                                        galery_timeline_item_create($conn, $Titem_title, 6,$item_id);
                                        header('Refresh: 2; url=galery_item.php?item='. $item_id . '');
                                    }
                                }
                            }else if($action == 2){

                                $errorArray = array();
                                
                                $img_id = $_GET['img'];
                                
                                //Upload the cover image
                                if(isset($_FILES["" . $img_id . "cover_image"]["name"]) && !empty($_FILES["" . $img_id . "cover_image"]["name"])){

                                    $target_dir = "IMG/GAlERIJ/" . generateRandomString();
                                    $target_dir_final = "../" . $target_dir . basename($_FILES["" . $img_id . "cover_image"]["name"]);
                                    $target_file_final = $target_dir . basename($_FILES["" . $img_id . "cover_image"]["name"]);
                                    $target_file = $target_dir_final . basename($_FILES["" . $img_id . "cover_image"]["name"]);
                                    $uploadOk = 1;
                                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                                    // Check if image file is a actual image or fake image
                                    if(isset($_POST["submit"])) {
                                        $check = getimagesize($_FILES["" . $img_id . "cover_image"]["tmp_name"]);
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
                                    if ($_FILES["" . $img_id . "cover_image"]["size"] > 1000000) {
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
                                        
                                        $target_file_final = $target_file_final . $_FILES["" . $img_id . "cover_image"]["name"];

                                        //Check which image must be changed
                                        if($img_id == 1){
                                            $SQL = "UPDATE galery SET headline_image_1='$target_file_final' WHERE id='$item_id'";
                                        }else if($img_id == 2){
                                            $SQL = "UPDATE galery SET headline_image_2='$target_file_final' WHERE id='$item_id'";
                                        }else if($img_id == 3){
                                            $SQL = "UPDATE galery SET headline_image_3='$target_file_final' WHERE id='$item_id'";
                                        }else if($img_id == 4){
                                            $SQL = "UPDATE galery SET headline_image_4='$target_file_final' WHERE id='$item_id'";
                                        }
                                        
                                        $result = $connweb->query($SQL);

                                        //Check if all went right
                                        if(!$result ){
                                            //something went wrong, display the error
                                            echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                            echo $conn->error(); //debugging purposes, uncomment when needed
                                            echo '</div>';
                                        }else{
                                            echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>Je instellingen zijn succesvol gewijzigd</p></div>';

                                        }

                                        if (move_uploaded_file($_FILES["" . $img_id . "cover_image"]["tmp_name"], $target_file)) {
                                            echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>De foto is succesvol geupload, en wat een plaatje!</p></div>';

                                            $title = "afbeelding gewijzigd";
                                            $Titem_title = "<a href='profile.php?show_user=" . $_SESSION['user_name'] . "'>" . $_SESSION['user_name'] . "</a> heeft een " . $title;

                                            galery_timeline_item_create($conn, $Titem_title, 9, $item_id);
                                            header('Refresh: 3; url=galery.php?item=' . $item_id . '');
                                        } else {
                                            echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan met het uploaden van je foto</p></div>';
                                        }
                                    }
                                }
                                
                            
                            }else if($action == 3){
                                $item_event = $conn->real_escape_string($_POST['item_event_id']);
                                $item_year = $conn->real_escape_string($_POST['item_year']);
                                
                                if(!empty($item_event) || !empty($item_year)){
                                    $SQL = "UPDATE galery SET event='$item_event', year='$item_year' WHERE id='$item_id'";
                                    
                                    $result = $connweb->query($SQL);
                                
                                    if(!$result){
                                        echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes, uncomment when needed
                                        echo '</div>';
                                    }else{
                                        echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>de extra informatie is succesvol gewijzigd</p></div>';
                                        $Titem_title = "<a href='profile.php?show_user=" . $_SESSION['user_name'] . "'>" . $_SESSION['user_name'] . "</a> heeft de extra informatie gewijzigd";
                                        galery_timeline_item_create($conn, $Titem_title, 6,$item_id);
                                        header('Refresh: 2; url=galery_item.php?item='. $item_id . '');
                                    }
                                }
                            }else if($action == 4){
                                $item_link = $conn->real_escape_string($_POST['item_link']);
                                
                                if(!empty($item_link) || isset($item_link)){
                                    $SQL = "UPDATE galery SET url='$item_link' WHERE id='$item_id'";
                                    
                                    $result = $connweb->query($SQL);
                                   
                                    if(!$result){
                                        echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes, uncomment when needed
                                        echo '</div>';
                                    }else{
                                        echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>het album is succesvol gewijzigd</p></div>';
                                        $Titem_title = "<a href='profile.php?show_user=" . $_SESSION['user_name'] . "'>" . $_SESSION['user_name'] . "</a> heeft het album gewijzigd";
                                        galery_timeline_item_create($conn, $Titem_title, 13,$item_id);
                                        header('Refresh: 2; url=galery_item.php?item='. $item_id . '');
                                    }
                                }
                            }else if($action == 5){
                                $SQL = "INSERT INTO galery (album,year,image_color) VALUES ('Nieuw Album', NOW(), '" . random_color() . "')";
                                
                                $result = $connweb->query($SQL);
                                header('Refresh: 0; url=galery.php');
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