<?php
include "connection.php";
include "functions.php";

if(isset($_GET['recKey'])){
    $recKey = $_GET['recKey'];
}else{
    $recKey = '';
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminL&G | Recover</title>    
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index2.html"><b>Admin</b>L&G</a>
  </div>
  <div class="register-box-body">
    <?php
    if(!isset($_GET['action']) || $_GET['action'] != 1){
    ?>
    <p class="login-box-msg">Wijzig het wachtwoord voor je account voor het Dashboard van Licht & Geluid.</p>
    <form action="recover.php?action=1" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="user_email" autocapitalize="none">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Wachtwoord" name="user_pass" autocapitalize="none">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Herhaal wachtwoord" name="user_passc" autocapitalize="none">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback"> <!--has-error -->
        <input type="text" class="form-control" placeholder="Recovery Code" value="<?php echo $recKey ?>" name="recKey">
        <span class="glyphicon glyphicon-certificate form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registreer</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <?php
    }elseif(isset($_GET['action']) && $_GET['action'] == 1){
        
        echo "<p class='login-box-msg'>Een moment geduld alstublieft, uw aanvraag wordt verwerkt. Problemen? Neem dan contact met ons op.</p>";
        
        $errorArray = array();
        
        //Check if all items are filled in
        if(!isset($_POST['user_email']) || empty($_POST['user_email'])){
            $errorArray[] = "U bent vergeten uw e-mail adres in te voeren";
        }
        if(!isset($_POST['user_pass']) || empty($_POST['user_pass'])){
            $errorArray[] = "U bent vergeten het wachtwoord in te voeren";
        }
        if(!isset($_POST['user_passc']) || empty($_POST['user_passc'])){
            $errorArray[] = "U bent vergeten het wachtwoord nogmaals in te voeren";
        }
        if(!isset($_POST['recKey']) || empty($_POST['recKey'])){
            $errorArray[] = "U bent vergeten de recovery code intevoeren";
        }
        
        //Check if there are errors
        if(!empty($errorArray)){
            echo "<div class='alert alert-danger'><strong>Mislukt :(</strong> <br>";
            echo '<ul>';

            foreach($errorArray as $key => $value){ /* walk through the array so all the errors get displayed */
                echo '<li>' . $value . '</li>'; /* this generates a nice error list */
            }

            echo '</ul></div>';
        }else{
            
            //Create all variables
            $user_email = htmlentities($_POST['user_email']);
            $user_pass = sha1(htmlentities($_POST['user_pass']));
            $user_passc = sha1(htmlentities($_POST['user_passc']));
            $recKey = htmlentities($_POST['recKey']);
            
            //Check if the passwords are the same
            if($user_pass != $user_passc){
                $errorArray[] = 'De twee wachtwoorden komen niet overeen';
            }
            
            //Check if there are errors
            if(!empty($errorArray)){
                echo "<div class='alert alert-danger'><strong>Mislukt :(</strong> <br>";
                echo '<ul>';
                foreach($errorArray as $key => $value){ /* walk through the array so all the errors get displayed */
                    echo '<li>' . $value . '</li>'; /* this generates a nice error list */
                }
                echo '</ul></div>';
            }
            
            //Check if there is a user with that name or email and check if the regKey is correct
            $SQL = "SELECT * FROM users WHERE user_email='$user_email'";
            $result = $conn->query($SQL);
            
            while($row = mysqli_fetch_assoc($result)){
                $user_email_db = $row['user_email'];
                $user_recKey_db = $row['user_recovery'];
                $user_name = $row['user_name'];
                $user_id = $row['user_id'];
            }
            
            if($user_email_db != $user_email){
                $errorArray[] = 'Het email-adres komt niet overeen met het email-adres in de database';
            }else{
                $user_recKey_nw = "TDGHL_" . generateRandomString() . "";
                
                if($recKey != $user_recKey_db){
                   $errorArray[] = 'De recovery code komt niet overeen met de code in de database'; 
                }else{
                    
                    //Update the database
                    $SQL = "UPDATE users SET user_pass='$user_pass', user_recovery='$user_recKey_nw' WHERE user_email='$user_email'";
                    
                    $result = $conn->query($SQL);
                    
                    $title = "<a href='profile.php?show_user=" . $user_name . "'>" . $user_name . "</a> heeft zijn account gewijzigd";
                
                    $user_id = user_id_by_email($conn, $user_email);
                
                    timeline_item_create($conn, $title, 2, $user_id);
                    
                    if(!$result){
                        //something went wrong, display the error
                        echo '<div class="alert alert-danger"><strong>Mislukt :(</strong><br>Sorry er is iets mis gegaan, probeer het opnieuw.<br>';
                        echo $conn->error(); //debugging purposes, uncomment when needed
                        echo '</div>';
                    }else{
                        echo '<div class="alert alert-success"><strong>Gelukt :)</strong><br>Je wachtwoord is succesvol gewijzigd. Je kan nu <a href="login.php">inloggen</a></div>';
                    }
                }
                //Check if there are errors
                if(!empty($errorArray)){
                    echo "<div class='alert alert-danger'><strong>Mislukt :(</strong> <br>";
                    echo '<ul>';
                    foreach($errorArray as $key => $value){ /* walk through the array so all the errors get displayed */
                        echo '<li>' . $value . '</li>'; /* this generates a nice error list */
                    }
                    echo '</ul></div>';
                }
            }
                 
        }
    }?>
      
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>