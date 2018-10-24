<?php
//top.php
ob_start();
include "connection.php";
include "functions.php";
session_start();
check_logged_in();

$version = '0.4.1';
?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" href="IMG/icon.png" type="favicon" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminL&G</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Text editor Style-->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- fullcalendar -->
  <link rel="stylesheet" href="bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
   <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- Text editor Style-->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    
  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- Sparkline -->
  <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap  -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- ChartJS -->
  <script src="bower_components/Chart.js/Chart.js"></script>
  <!-- iCheck -->
  <!--<script src="bower_components/iCheck/icheck.min.js"></script>-->
  <script>
         $(function () { /*bootstrap WYSIHTML5 - text editor */$(".textarea").wysihtml5();});
        $(function () { $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
            });
          });
  </script>
  

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
</head>
<?php search($conn); ?>
<body class="hold-transition skin-blue fixed sidebar-mini sidebar-mini-expand-feature">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.phpm" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LG</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>L&G</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
    
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <?php
                
                    $user_id = $_SESSION['user_id'];
                
                
                    $date = date("m-d-Y", strtotime('-3 day'));
                    $SQL = "DELETE FROM notifications WHERE noti_date < (NOW() - INTERVAL 2 DAY) AND noti_user='$user_id'";
                    $result2 = $conn->query($SQL);
                
                    $amount = noti_count($conn, $_SESSION['user_id']);
                    if($amount > 0){
                ?>
                <span class="label label-warning"><?php echo $amount; ?></span>
                <?php
                    }
                ?>
            </a>
            <ul class="dropdown-menu">
                <li class="header">Je hebt 
                <?php 
                    echo $amount; 
                    if($amount == 1){
                        echo " melding";
                    }else{
                        echo " meldingen";
                    }
                ?>
                </li>
                <?php  
                    if($amount > 0){
                ?> 
                <li>
                <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                        <?php  
                            $SQL = "SELECT * FROM notifications WHERE noti_user='$user_id' ORDER BY noti_id DESC";
    
                            $result = $conn->query($SQL);
                            while($row = mysqli_fetch_assoc($result)){
                                $noti_cat = $row['noti_cat'];
                                $noti_title = $row['noti_title'];
                                $noti_link = $row['noti_link'];
                                $noti_id = $row['noti_id'];
                                
                                echo "<li>";
                                echo "<a href='$noti_link?action=1&noti_id=$noti_id' onClick='self.location='$noti_link?action=1'')'>";
                                echo "<i class='" . noti_cat_to_class($conn, $noti_cat) . "'></i>" . $noti_title;
                                echo "</a>";
                                echo "</li>";
                                
                            }
                        
                        ?> 
                    </ul>
                </li>
                <?php  
                    }
                ?> 
                <li class="footer"><a href="profile.php?show_user=<?php echo $_SESSION['user_name'] ?>">View all</a></li>
            </ul>
          </li>
          <li class="dropdown tasks-menu">
            <a href="lock.php" class="dropdown-toggle">
              <i class="fa fa-lock"></i>
            </a>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $_SESSION['user_image']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['user_name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $_SESSION['user_image']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['user_name']; ?> - <?php echo user_info($conn, "user_description", $_SESSION['user_id']) ?>
                  <small>lid sinds <?php echo user_info($conn, "user_since", $_SESSION['user_id']) ?></small>
                </p>
              </li>
              <!-- Menu Body
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                
              </li>-->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profiel</a>
                </div>
                <div class="pull-right">
                  <a href="logoff.php" class="btn btn-default btn-flat">Log uit</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $_SESSION['user_image']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['user_name']; ?></p>
          <?php
            $user_name = $_SESSION['user_name'];
            $user_email = $_SESSION['user_email'];
            
            $SQL = "SELECT * FROM users WHERE user_name='$user_name' AND user_email='$user_email'";
            $result = $conn->query($SQL);
            
            while($row = mysqli_fetch_assoc($result)){
                $online = $row['user_online']; 
            }
            
            if ($online == 0){
                echo '<a href="#"><i class="fa fa-circle text-danger"></i> Offline</a>';
            }else if ($online == 1){
                echo '<a href="#"><i class="fa fa-circle text-success"></i> Online</a>';   
            }else if ($online == 2){
                echo '<a href="#"><i class="fa fa-circle text-warning" style="color:#ffd200"></i> Afwezig</a>';
            }
              
          ?>
        </div>
      </div>
      <!-- search form -->
      <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control search-menu-box" placeholder="Zoeken..." id="my-search">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                  <?php 
    
                    if(isset($_GET['page'])){   // for pages and materials
                        $value = $_GET['page'];
                    }elseif(isset($_GET['show_user'])){ //for users
                        $value = $_GET['show_user'];
                    }elseif(isset($_GET['item'])){ //for galery and calendar
                        $value = $_GET['item'];
                    }elseif(isset($_GET['event'])){  //for event page
                        $value = $_GET['event'];
                    }else{
                        $value = 0;
                    }
            
                    $name = chop(chop($_SERVER['QUERY_STRING'],$value),"=");
                       
                    
                  ?>
                  <input type="hidden" name="<?php echo $name; ?>" value="<?php echo $value;?>">
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree" id="my-tree">
        <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
            <a href="#"  >
            <i class="fa fa-file-text-o"></i> <span>Pagina's</span>
            <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages.php?page=home"><i class="fa fa-file-text "></i>Home</a></li>
                <li><a href="pages.php?page=about_us"><i class="fa fa-file-text "></i>Over ons</a></li>
                <li><a href="pages.php?page=contact"><i class="fa fa-file-text "></i>Contact</a></li>
            </ul>
        </li>
        <li>
            <a href="galery.php"  >
            <i class="fa fa-picture-o"></i> <span>Galerij</span>
            </a>
        </li>
        <li>
            <a href="events.php">
                <i class="fa fa-calendar-times-o"></i> <span>Evenementen</span>
            </a>
        </li>
        <li>
            <a href="calendar.php">
                <i class="fa fa-calendar"></i> <span>Agenda</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-users"></i> <span>Profielen</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="profiles.php"><i class="fa fa-users"></i> Profielen</a></li>
                <li><a href="profile.php"><i class="fa fa-user"></i> Mijn Profiel</a></li>
            </ul>
        </li>
        <li>
            <a href="chat.php">
                <i class="fa fa-comments-o"></i> <span>Chat</span>
            </a>
        </li>
        <li class="header">WEBSITE</li>
        <li>
            <a href="../index.php" target="_blank">
                <i class="fa fa-external-link"></i> <span>Website</span>
            </a>
        </li>
        <?php
          
          if ($_SESSION['user_level'] >= 1){
        ?>
        <li class="header">ADMIN L&G</li>
        
        <li class="treeview">
            <a href="#"  >
            <i class="fa fa-square-o"></i> <span>Website</span>
            <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="website.php?page=create"><i class="fa fa-edit "></i>Aanmaken</a></li>
                <li><a href="website.php?page=pages"><i class="fa fa-file-text-o "></i>Pagina's</a></li>
                <li><a href="website.php?page=fileditor"><i class="fa fa-edit "></i>Fileditor</a></li>
                <li><a href="website.php?page=settings"><i class="fa fa-gear "></i>Instellingen</a></li>
            </ul>
        </li>
        <li>
            <a href="users.php">
                <i class="fa fa-users"></i> <span>Gebruikers</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#"  >
            <i class="fa fa-table"></i> <span>Materiaal</span>
            <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="materiaal.php?page=table"><i class="fa fa-table "></i>Materiaal</a></li>
                <li><a href="materiaal.php?page=edit"><i class="fa fa-pencil-square-o "></i>Bewerken</a></li>
                <li><a href="materiaal.php?page=enter"><i class="fa fa-keyboard-o "></i>Invoeren</a></li>
            </ul>
        </li>
        <li>
            <a href="social.php">
                <i class="fa fa-link"></i> <span>Social Media </span>
            </a>
        </li>
        
        <?php
          }
          
        ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>