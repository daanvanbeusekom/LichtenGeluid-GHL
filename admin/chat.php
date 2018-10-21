<?php
include "top.php";
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chat
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-comments-o"></i> Home</a></li>
        <li><a href="materiaal.php">Chat</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <?php chat_final($conn, 9, 0, 'height:65vh;'); ?>
        
        <div class="col-sm-3 toggle-contact-list">
              <div class="box box-warning direct-chat direct-chat-warning">  
              <div class="box-header with-border">
                <h3 class="box-title">Online Gebruikers</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <!-- Contacts are loaded here -->
                <div class="direct-chat-messages ol-members" style="height: auto;">
                  <ul class="contacts-list">
                    <!-- ngRepeat: user in users -->
                      
                    <?php
                      
                    $SQL = "SELECT * FROM users WHERE user_online = 1";
                    $result= $conn->query($SQL);
                      
                      while($row = $result->fetch_assoc()){
                      
                      echo '<li ng-repeat="user in users" class="ng-scope">';
                                echo '<a href="profile.php?show_user=' . $row['user_name'] . '">';
                                echo '<img class="contacts-list-img" ng-src="' . $row['user_image'] . '" src="' . $row['user_image'] . '">';
                                echo '<div class="contacts-list-info">
                                        <span class="ol-memeber-name ng-binding" style="line-height:2.6; padding:5px; font-weight : 500; color : #333;">';
                                        echo $row['user_name'];
                                        echo '</span>';
                                echo '</div><!-- /.contacts-list-info -->';
                            echo '</a>';
                    echo '</li><!-- end ngRepeat: user in users -->';
                          
                      }
                    ?>  
                    
                      
                  </ul><!-- /.contatcts-list -->
                </div><!--/.direct-chat-messages-->
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div>
        </div>
    </section>
</div>
  <!-- /.content-wrapper -->
<?php
include "bottom.php";
?>