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
        <li><a href="index.php"><i class="fa fa-table"></i> Home</a></li>
        <li><a href="materiaal.php">Materiaal</a></li>
        <li class="active">Bewerken</li>
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

                      <h3 class="box-title">Gewijzigde Data</h3>
                    </div>
                    <div class="box-body">
                        <?php 
                            if($action == 1){
                                // Get id 
                                $id = $conn->real_escape_string($_POST['id']);
                                
                                // Get variables out of database
                                $SQL = "SELECT * FROM materiaal WHERE id ='$id'";
                                $result2 = $conn->query($SQL);
                                
                                while($row2 = $result2->fetch_assoc()){
                                    $name_sql = $row2['naam'];
                                    $staat_sql = $row2['staat'];
                                    $werkend_sql = $row2['werkend'];
                                    $totaal_sql = $row2['totaal'];
                                    $gebruikt_sql = $row2['gebruikt'];
                                    $type_sql = $row2['type'];
                                    $doos_sql = $row2['doos'];
                                    $ontvanger_sql = $row2['ontvanger'];
                                    $houder_sql = $row2['houder'];
                                    $invoer_sql = $row2['invoer'];
                                    $uitvoer_sql = $row2['uitvoer'];
                                    $vermogen_sql = $row2['vermogen'];
                                    $aux_sql = $row2['aux'];
                                    $A_sql = $row2['A'];
                                    $B_sql = $row2['B'];
                                    $lengte_sql = $row2['lengte'];
                                    $diameter_sql = $row2['diameter'];
                                    $afmetingen_sql = $row2['afmetingen'];
                                    $opmerkingen_sql = $row2['opmerkingen'];
                                }
                                
                                
                                
                                
                                // checking and getting variables, if they aren't set use the database variables
                                if(isset($_POST['name']) && !empty($_POST['name'])){
                                    $name = $conn->real_escape_string($_POST['name']);
                                }else{
                                    $name = $name_sql;
                                }
                                if(isset($_POST['staat']) && !empty($_POST['staat'])){
                                    $staat = $conn->real_escape_string($_POST['staat']);
                                }else{
                                    $staat = $staat_sql;
                                }
                                if(isset($_POST['werkend']) && !empty($_POST['werkend'])){
                                    $werkend = $conn->real_escape_string($_POST['werkend']); 
                                }else{
                                    $werkend = $werkend_sql;
                                }
                                if(isset($_POST['totaal']) && !empty($_POST['totaal'])){
                                    $totaal = $conn->real_escape_string($_POST['totaal']);
                                }else{
                                    $totaal = $totaal_sql;
                                }
                                if(isset($_POST['gebruikt']) && !empty($_POST['gebruikt'])){
                                    $gebruikt = $conn->real_escape_string($_POST['gebruikt']);
                                }else{
                                    $gebruikt = $gebruikt_sql;
                                }
                                if(isset($_POST['type']) && !empty($_POST['type'])){
                                    $type = $conn->real_escape_string($_POST['type']); 
                                }else{
                                    $type = $type_sql;
                                }
                                if(isset($_POST['doos']) && !empty($_POST['doos'])){
                                    $doos = $conn->real_escape_string($_POST['doos']);
                                }else{
                                    $doos = $doos_sql;
                                }
                                if(isset($_POST['ontvanger']) && !empty($_POST['ontvanger'])){
                                    $ontvanger = $conn->real_escape_string($_POST['ontvanger']);
                                }else{
                                    $ontvanger = $ontvanger_sql;
                                }
                                if(isset($_POST['houder']) && !empty($_POST['houder'])){
                                    $houder = $conn->real_escape_string($_POST['houder']);
                                }else{
                                    $houder = $houder_sql;
                                }
                                if(isset($_POST['invoer']) && !empty($_POST['invoer'])){
                                    $invoer = $conn->real_escape_string($_POST['invoer']);
                                }else{
                                    $invoer = $invoer_sql;
                                }
                                if(isset($_POST['uitvoer']) && !empty($_POST['uitvoer'])){
                                    $uitvoer = $conn->real_escape_string($_POST['uitvoer']);
                                }else{
                                    $uitvoer = $uitvoer_sql;
                                }
                                if(isset($_POST['vermogen']) && !empty($_POST['vermogen'])){
                                    $vermogen = $conn->real_escape_string($_POST['vermogen']);
                                }else{
                                    $vermogen = $vermogen_sql;
                                }
                                if(isset($_POST['aux']) && !empty($_POST['aux'])){
                                    $aux = $conn->real_escape_string($_POST['aux']);
                                }else{
                                    $aux = $aux_sql;
                                }
                                if(isset($_POST['A']) && !empty($_POST['A'])){
                                    $A = $conn->real_escape_string($_POST['A']);
                                }else{
                                    $A = $A_sql;
                                }
                                if(isset($_POST['B']) && !empty($_POST['B'])){
                                    $B = $conn->real_escape_string($_POST['B']);
                                }else{
                                    $B = $B_sql;
                                }
                                if(isset($_POST['lengte']) && !empty($_POST['lengte'])){
                                    $lengte = $conn->real_escape_string($_POST['lengte']);
                                }else{
                                    $lengte = $lengte_sql;
                                }
                                if(isset($_POST['diameter']) && !empty($_POST['diameter'])){
                                    $diameter = $conn->real_escape_string($_POST['diameter']);
                                }else{
                                    $diameter = $diameter_sql;
                                }
                                if(isset($_POST['afmetingen']) && !empty($_POST['afmetingen'])){
                                    $afmetingen = $conn->real_escape_string($_POST['afmetingen']);
                                }else{
                                    $afmetingen = $afmetingen_sql;
                                }
                                if(isset($_POST['opmerkingen']) && !empty($_POST['opmerkingen'])){
                                    $opmerkingen = $conn->real_escape_string($_POST['opmerkingen']);
                                }else{
                                    $opmerkingen = $opmerkingen_sql;
                                }
                                
                                
                                //get value staat
                                if($staat == 'Goed' || $staat == 'goed'){
                                    $staat = '1';;
                                }elseif($staat == 'Matig' || $staat =='matig'){
                                    $staat = '2';
                                }elseif($staat == 'Slecht' || $staat == 'slecht'){
                                    $staat = '3';
                                }elseif($staat == 'Gebruikt' || $staat == 'gebruikt'){
                                    $staat = '4';
                                }
                                
                                //get value gebruikt
                                if($gebruikt == 'Nee' || $gebruikt == 'nee'){
                                    $gebruikt = '0';
                                }elseif($gebruikt == 'Ja' || $gebruikt=='ja'){
                                    $gebruikt = '1';
                                }
                                
                                //get value aux
                                if($aux == 'Nee' || $aux == 'nee'){
                                    $aux = '0';
                                }elseif($aux == 'Ja' || $aux == 'ja'){
                                    $aux = '1';
                                }elseif($aux == '2 aux' || $aux == '2 Aux'){
                                    $aux = '2';
                                }elseif($aux == '3 aux' || $aux == '3 Aux'){
                                    $aux = '3';
                                }elseif($aux == '4 aux' || $aux == '4 Aux'){
                                    $aux = '4';
                                }
                                
                                
                                /*echo "<br/>" . $name . "";
                                echo "<br/>" . $staat . "";
                                echo "<br/>" . $werkend . "";
                                echo "<br/>" . $totaal . "";
                                echo "<br/>" . $gebruikt . "";
                                echo "<br/>" . $type . "";
                                echo "<br/>" . $doos . "";
                                echo "<br/>" . $ontvanger . "";
                                echo "<br/>" . $opmerkingen . "";
                                echo "<br/>" . $id . "";*/
                                
                                //Update the info         
                                $SQL = "UPDATE materiaal SET naam='$name', staat='$staat', werkend='$werkend', totaal='$totaal', gebruikt='$gebruikt', type='$type', doos='$doos', ontvanger='$ontvanger', houder='$houder', invoer='$invoer', uitvoer='$uitvoer', vermogen='$vermogen', aux='$aux', A='$A', B='$B', lengte='$lengte', diameter='$diameter', afmetingen='$afmetingen', opmerkingen='$opmerkingen', update_date=NOW() WHERE id='$id'";
                                
                                $result = $conn->query($SQL);
                                    
                                    if(!$result){
                                        echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes, uncomment when needed
                                        echo '</div>';
                                    }else{
                                        echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>De wijzigingen zijn succesvol door gevoerd!</p></div>';
                                        header('Refresh: 2; url=materiaal.php?page=edit');
                                    }
                            }else if($action == 2){
                                $naam = $conn->real_escape_string($_POST['naam']);
                                $staat = $conn->real_escape_string($_POST['staat']);
                                $werkend = $conn->real_escape_string($_POST['werkend']);
                                $gebruikt = $conn->real_escape_string($_POST['gebruikt']);
                                $type = $conn->real_escape_string($_POST['type']);
                                $opmerkingen = $conn->real_escape_string($_POST['opmerkingen']);
                                $id = $conn->real_escape_string($_POST['id']);
                                
                                //get value staat
                                if($staat == 'Goed' || $staat == 'goed'){
                                    $staat = '1';;
                                }elseif($staat == 'Matig' || $staat =='matig'){
                                    $staat = '2';
                                }elseif($staat == 'Slecht' || $staat == 'slecht'){
                                    $staat = '3';
                                }elseif($staat == 'Gebruikt' || $staat == 'gebruikt'){
                                    $staat = '4';
                                }
                                
                                //get value gebruikt
                                if($gebruikt == 'Nee' || $gebruikt == 'nee'){
                                    $gebruikt = '0';
                                }elseif($gebruikt == 'Ja' || $gebruikt=='ja'){
                                    $gebruikt = '1';
                                }
                                
                                //Insert the info
                                $SQL = "INSERT INTO materiaal (category_id,naam,staat,werkend,gebruikt,type,opmerkingen) VAlUES ('$id', '$naam', '$staat', '$werkend', '$gebruikt', '$type', '$opmerkingen')";
                                
                                $result = $conn->query($SQL);
                                header('refresh: 0; url="materiaal.php?page=table');
                                
                                 if(!$result){
                                        echo '<div class="callout callout-danger"><h4>Mislukt :(</h4><p>Er is iets mis gegaan, probeer het eens opnieuw</p>';
                                        echo $conn->error; //debugging purposes, uncomment when needed
                                        echo '</div>';
                                    }else{
                                        echo '<div class="callout callout-success"><h4>Gelukt :)</h4><p>het item is succesvol toegevoegd</p></div>';
                                 }
                            }
                        ?>

