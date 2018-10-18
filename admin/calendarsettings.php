<?php
include "top.php";
//Check all varaibles

$action = $_GET['action'];

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Instellingen
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="ion ion-beer"></i> Home</a></li>
        <li><a href="events.php">Agenda</a></li>
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
                                //$SQL = "DELETE FROM events WHERE event_id='$event_id'";
                                
                                $result = $conn->query($SQL);
                                    
                                if(!$result){
                                    echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes
                                    echo '</div>';
                                }else{
                                    echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>het feest is succesvol verwijderd</p></div>';
                                    header('Refresh: 3; url=events.php');
                                }
                            }else if($action == 1){
                                //Basis informatie
                                $title = $conn->real_escape_string($_POST['title']);
                                $date_start = $conn->real_escape_string($_POST['date_start']);
                                $time_start = $_POST['time_start'];
                                $date_end = $conn->real_escape_string($_POST['date_end']);
                                $time_end = $_POST['time_end'];
                                $type = $_POST['cat'];
                                
                                if (!empty ($_POST['full_day'])){
                                    $full_day = '1';
                                    $time_start = '00:00';
                                    $time_end = '23:59';
                                }else{
                                    $full_day = '0';
                                }
                                
                                $details = $_POST['details'];
                                $color = $_POST['color'];
                                
                                //transform start date to required format 
                                $start = $date_start . " " . $time_start;
                                $start_f = DateTime::createFromFormat('d/m/Y H:i', $start)->format('Y-m-d H:i:s');
                                
                                //transform end date to required format
                                $end = $date_end . " " . $time_end; 
                                $end_f = DateTime::createFromFormat('d/m/Y H:i', $end)->format('Y-m-d H:i:s'); 
                               
                                
                                $SQL = "INSERT INTO `calendar_date`(`title`, `start`, `end`, `allday`, `bg_color`, `bd_color`, `details`, `type`) VALUES ('$title','$start_f','$end_f','$full_day','$color','$color','$details','$type')";
                                
                                 $result = $conn->query($SQL);
                                
                                if(!$result){
                                        echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes, uncomment when needed
                                        echo '</div>';
                                    }else{
                                        echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>het agenda item is succesvol toegevoegd</p></div>';
                                        header('Refresh: 2; url=calendar.php');
                                }
                            }elseif($action == 2){
                                $item_id = $_GET['item_id'];
                                
                                $title = $conn->real_escape_string($_POST['item_title']);
                                $bg_color = $conn->real_escape_string($_POST['item_bgcolor']);
                                $type = $_POST['cat'];
                                
                                $SQL = "UPDATE calendar_date SET title='$title', bg_color='$bg_color', bd_color='$bg_color', type='$type' WHERE item_id='$item_id'";
                                
                                $result = $conn->query($SQL);  
                            
                                //Check if all went right
                                if(!$result ){
                                    //something went wrong, display the error
                                    echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                    echo $conn->error(); //debugging purposes, uncomment when needed
                                    echo '</div>';
                                }else{
                                    echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>Het item is succesvol gewijzigd</p></div>';
                                    header('Refresh: 3; url=calendaritem.php?item=' . $item_id . '');
                                }
                            }elseif($action == 3){
                                
                            }elseif($action == 4){
                                $item_id = $_POST['item_id'];
                                $details = $conn->real_escape_string($_POST['details']);
                                
                                //Update the database
                                 $SQL = "UPDATE calendar_date SET details='$details' WHERE item_id='$item_id'";
                                
                                $result = $conn->query($SQL);
                                
                                //Check if all went right
                                if(!$result ){
                                    //something went wrong, display the error
                                    echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                    echo $conn->error(); //debugging purposes, uncomment when needed
                                    echo '</div>';
                                }else{
                                    echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>De details zijn succesvol gewijzigd</p></div>';
                                    header('Refresh: 3; url=calendaritem.php?item=' . $item_id . '');
                                }  
                            }
                            ?>