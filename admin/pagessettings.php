<?php
include "top.php";

$action = "0";

if(isset($_GET['action'])){
    $action = $_GET['action'];
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
                            if($action == 1){
                                $page_title = $conn->real_escape_string($_POST['page_title']);
                                $page_txt = $conn->real_escape_string($_POST['page_txt']);
                                $page_id = $conn->real_escape_string($_POST['page_id']);
                                
                                $SQL = "UPDATE pages_txt SET title='$page_title', text='$page_txt' WHERE id='$page_id'";
                                
                                $result = $connweb->query($SQL);
                                
                                $SQL ="SELECT page FROM pages_txt WHERE id='$page_id'";
                                $result = $connweb->query($SQL);
                                while($row = mysqli_fetch_assoc($result)){
                                    $page = $row['page'];
                                }
                                
                                if($page == 'about'){
                                    $page = 'about_us';
                                }else{
                                    $page = $page;
                                }
                                
                                if(!$result){
                                        echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes, uncomment when needed
                                        echo '</div>';
                                    }else{
                                        echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>het bericht is succesvol gewijzigd</p></div>';
                                        header('Refresh: 2; url=pages.php?page=' . $page . '');
                                    
                                        $title = "bericht gewijzigd";
                                        $Titem_title = "<a href='profile.php?show_user=" . $_SESSION['user_name'] . "'>" . $_SESSION['user_name'] . "</a> heeft het " . $title;
                                    
                                        page_timeline_item_create($conn, $Titem_title, 8, $page_id);
                                }
                                
                            }elseif($action ==2){
                                
                                $errorArray = array();
                                
                                $SQL = "SELECT category_id FROM images WHERE image_id='$img_id'";
                                $result = $connweb->query($SQL);
                                
                                while($row = mysqli_fetch_assoc($result)){
                                    $page_id = $row['category_id'];   
                                }
                                
                                if($page_id == 1){
                                    $page_name = 'home';
                                }elseif($page_id == 2){
                                    $page_name = 'about_us';
                                }elseif($page_id == 3){
                                    $page_name = 'contact';
                                }
                                
                                if (isset($_GET['page_id'])){
                                    $page_id = $_GET['page_id'];
                                }
                                
                                
                                
                                //Upload the cover image
                                if(isset($_FILES["" . $img_id . "cover_image"]["name"]) && !empty($_FILES["" . $img_id . "cover_image"]["name"])){

                                    $target_dir = "IMG/BG/" . generateRandomString();
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

                                         $SQL = "UPDATE images SET image='$target_file_final' WHERE image_id='$img_id'";

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

                                            page_timeline_item_create($conn, $Titem_title, 9, $page_id);
                                            header('Refresh: 3; url=pages.php?page=' . $page_name . '');
                                        } else {
                                            echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan met het uploaden van je foto</p></div>';
                                        }
                                    }
                                }
                                //}else{
                                   //echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Kies //een nieuwe afbeelding voor dat je op de knop wijzigen drukt!</p>//</div>'; 
                                   //header('Refresh: 3; url=pages.php?page=' . $page_name . '');
                                   //echo $img_id;
                                //}
                                
                                if(isset($_POST['image_text']) && !empty ($_POST['image_text'])){
                                    
                                    $image_txt = $conn->real_escape_string($_POST['image_text']);
                                    
                                    $SQL = "UPDATE images SET image_text='$image_txt' WHERE image_id='$img_id'";
                                
                                    $result = $connweb->query($SQL);
                                    
                                    if(!$result){
                                        echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes, uncomment when needed
                                        echo '</div>';
                                    }else{
                                        echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>het bericht is succesvol gewijzigd</p></div>';
                                        header('Refresh: 2; url=pages.php?page=' . $page_name . '');
                                    
                                        $title = "afbeeldings tekst gewijzigd";
                                        $Titem_title = "<a href='profile.php?show_user=" . $_SESSION['user_name'] . "'>" . $_SESSION['user_name'] . "</a> heeft een " . $title;
                                    
                                        page_timeline_item_create($conn, $Titem_title, 8, $page_id);
                                    }
                                }
                            }elseif($action == 3){
                                $location = $conn->real_escape_string($_POST['location']);
                                $email = $conn->real_escape_string($_POST['email']);
                                
                                $SQL = "UPDATE contact SET location='$location', email='$email' WHERE id='1'";
                                
                                $result = $connweb->query($SQL);
                                
                                if (isset($_GET['page'])){
                                    $page = $_GET['page'];
                                }
                                
                                if (isset($_GET['page_id'])){
                                    $page_id = $_GET['page_id'];
                                }
                                
                                if(!$result){
                                        echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes, uncomment when needed
                                        echo '</div>';
                                    }else{
                                        echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>De gegevens zijn succesvol gewijzigd</p></div>';
                                        header('Refresh: 2; url=pages.php?page=' . $page . '');
                                    
                                        $title = "contact gegevens gewijzigd";
                                        $Titem_title = "<a href='profile.php?show_user=" . $_SESSION['user_name'] . "'>" . $_SESSION['user_name'] . "</a> heeft de " . $title;
                                    
                                        page_timeline_item_create($conn, $Titem_title, 10, $page_id);
                                }
                            
                            }elseif($action == 4){
                                $title = $conn->real_escape_string($_POST['icon_title']);
                                $text = $conn->real_escape_string($_POST['icon_text']);
                                $icon = $conn->real_escape_string($_POST['icon_icon']);
                                $id = $conn->real_escape_string($_POST['icon_id']);
                                
                                $SQL = "UPDATE icon_txt SET title='$title', text='$text', icon='$icon' WHERE id='$id'";
                                
                                $result = $connweb->query($SQL);
                                
                                if (isset($_GET['page'])){
                                    $page = $_GET['page'];
                                }
                                
                                if (isset($_GET['page_id'])){
                                    $page_id = $_GET['page_id'];
                                }
                                
                                if(!$result){
                                        echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes, uncomment when needed
                                        echo '</div>';
                                    }else{
                                        echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>De gegevens zijn succesvol gewijzigd</p></div>';
                                        header('Refresh: 2; url=pages.php?page=' . $page . '');
                                    
                                        $title = "icoon gewijzigd";
                                        $Titem_title = "<a href='profile.php?show_user=" . $_SESSION['user_name'] . "'>" . $_SESSION['user_name'] . "</a> heeft het " . $title;
                                    
                                        page_timeline_item_create($conn, $Titem_title, 11, $page_id);
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
                                