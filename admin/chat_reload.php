<?php
include "connection.php";
include "functions.php";
session_start();
check_logged_in();

                  
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