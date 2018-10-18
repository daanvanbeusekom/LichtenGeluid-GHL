<?php
include "top.php";
?>

<script>
window.onload=function () {
     var objDiv = document.getElementById("chat");
     objDiv.scrollTop = objDiv.scrollHeight;
}
var auto_refresh = setInterval(
function()
{
$('#chat').load('chat_reload.php');
}, 2000);
</script>
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
            <div class="col-md-9">
          <!-- DIRECT CHAT WARNING -->
          <div class="box box-warning direct-chat direct-chat-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Chat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages" id="chat" style="height:65vh; overflow-x: hidden;">
                <!-- Message. Default to the left -->
                  
                <?php
                  
                $SQL = "SELECT * FROM chat";
                $result = $conn->query($SQL);
                  
                
                 while($row = mysqli_fetch_assoc($result)){
                  $user_id = $row['user_id'];
				  
				  if($user_id == $_SESSION['user_id']){
					echo '<div class="direct-chat-msg right">
							<div class="right" style="float:right;">
                            <div class="direct-chat-info clearfix">';

                            $SQL = "SELECT * FROM users WHERE user_id = $user_id";
                            $result2 = $conn->query($SQL);
                            while($row2 = mysqli_fetch_assoc($result2)){
                              echo '<span class="direct-chat-name pull-right">' . $row2['user_name'] . '</span>';  
                              echo '<span class="direct-chat-timestamp pull-left">' . $row['chat_date'] . '</span></div>';
                              echo '<img class="direct-chat-img" src="' . $row2['user_image'] . '" alt="Message User Image"><!-- /.direct-chat-img -->';
                            }
                            
                      echo '<div class="direct-chat-text" style="background: #f39c12; border-color: #f39c12; color: #fff;">';
                        echo $row['chat_content'];
                      echo '</div>
                      <!-- /.direct-chat-text -->
                    </div>
					</div>
                    <!-- /.direct-chat-msg -->';
				  }else{
                    
                    echo '<div class="direct-chat-msg">
							<div class="left" style="float:left;">
                            <div class="direct-chat-info clearfix">';

                            $SQL = "SELECT * FROM users WHERE user_id = $user_id";
                            $result2 = $conn->query($SQL);
                            while($row2 = mysqli_fetch_assoc($result2)){
                              echo '<span class="direct-chat-name pull-left">' . $row2['user_name'] . '</span>';  
                              echo '<span class="direct-chat-timestamp pull-right">' . $row['chat_date'] . '</span></div>';
                              echo '<img class="direct-chat-img" src="' . $row2['user_image'] . '" alt="Message User Image"><!-- /.direct-chat-img -->';
                            }
                            
                      echo '<div class="direct-chat-text">';
                        echo $row['chat_content'];
                      echo '</div>
                      <!-- /.direct-chat-text -->
                    </div>
					</div>
                    <!-- /.direct-chat-msg -->';
					}
                }
                ?>
                </div>
              <!--/.direct-chat-messages-->
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <form action="chat.php" method="POST">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Typ bericht ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-warning btn-flat">Verzend</button>
                      </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.direct-chat -->
        </div>
        
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
if(isset($_POST['message']) | !empty($_POST['message'])){

	$message = $_POST['message'];
	$user_id = $_SESSION['user_id'];
	
	$SQL = "INSERT INTO `chat`(`chat_content`, `chat_date`, `user_id`) VALUES ('$message',NOW(),'$user_id')";
	$result = $conn->query($SQL);
	
	if(!$result){
        echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
        echo $conn->error; //debugging purposes, uncomment when needed
        echo '</div>';
	}else{
		header('Refresh: 0; url=chat.php');
	}
}
include "bottom.php";
?>