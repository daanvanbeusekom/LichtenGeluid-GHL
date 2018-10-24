<?php
$request_page = $_GET['page'];
if($request_page == "table"){
$page = 'table';
include "top.php";
check_admin();

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Materiaal
        <small>Overzicht</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-table"></i> Home</a></li>
        <li class="active">Materiaal</li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
      <div class="row">
          <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">De inventaris van het Licht & Geluid</h3>
            </div>
              
            <div class="box-body">
            <div class="box-group" id="accordion">
                
                <div class="panel box box-primary">
                    
                    <div class="box-body">  
                        <h4>Microfoons</h4>
                    </div>

                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <thead>
                        <tr> 
                            <th>Naam</th>
                            <th>Staat</th>
                            <th>Werkend</th>
                            <th>Totaal</th>
                            <th>Gebruikt</th>
                            <th>Type</th>
                            <th>Doos</th>
                            <th>Ontvanger</th>
                            <th>Opmerkingen</th>
                        </tr>
                        </thead>
                          
                        <tbody>
                            <?php
                            $SQL = "SELECT * FROM materiaal WHERE category_id='1'";
                            $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                            if(isset($_GET['naam'])){
                                if($_GET['naam'] == $row['naam']){
                                    echo '<tr style="background-color:#f5f5f5">';
                                }
                            }else{
                                echo "<tr>";
                            }
                                    echo "<td id='" . $row['naam'] . "'>" . $row['naam'] . "</td>";
                                    //Staat
                                    if ($row['staat'] == '1'){
                                        echo "<td>Goed</td>";
                                    }elseif ($row['staat'] == '2'){
                                        echo "<td>Matig</td>";
                                    }elseif ($row['staat'] == '3'){
                                        echo "<td>Slecht</td>";
                                    }
                                    //Werkend
                                    echo "<td>" . $row['werkend'] . "</td>";
                                    //Totaal
                                     echo "<td>" . $row['totaal'] . "</td>";
                                    //Gebruikt
                                    if ($row['gebruikt'] == '0'){
                                        echo "<td>Nee</td>";
                                    }elseif ($row['gebruikt'] == '1'){
                                        echo "<td>Ja</td>";
                                    }
                                    //Type
                                    echo "<td>" . $row['type'] . "</td>";
                                    //Doos
                                    echo "<td>" . $row['doos'] . "</td>";
                                    // Ontvanger
                                     echo "<td>" . $row['ontvanger'] . "</td>";
                                    // Opmerkingen
                                     echo "<td>" . $row['opmerkingen'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                          
                       </table>
                    </div>
                </div>
              
            <div class="panel box box-success"> 
                <div class="box-body">  
                    <h4>Lampen</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Houder</th>
                        <th>Vermogen</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * FROM materiaal WHERE category_id='2'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                    echo "<td>" . $row['naam'] . "</td>";
                                    //Staat
                                    if ($row['staat'] == '1'){
                                        echo "<td>Goed</td>";
                                    }elseif ($row['staat'] == '2'){
                                        echo "<td>Matig</td>";
                                    }elseif ($row['staat'] == '3'){
                                        echo "<td>Slecht</td>";
                                    }
                                    //Werkend
                                    echo "<td>" . $row['werkend'] . "</td>";
                                    //Totaal
                                     echo "<td>" . $row['totaal'] . "</td>";
                                    //Gebruikt
                                    if ($row['gebruikt'] == '0'){
                                        echo "<td>Nee</td>";
                                    }elseif ($row['gebruikt'] == '1'){
                                        echo "<td>Ja</td>";
                                    }
                                    //Type
                                    echo "<td>" . $row['type'] . "</td>";
                                    //Houder
                                    echo "<td>" . $row['houder'] . "</td>";
                                    //Vermogen
                                    echo "<td>" . $row['vermogen'] . "</td>";
                                    // Opmerkingen
                                     echo "<td>" . $row['opmerkingen'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                    </tbody>
                   </table>
                </div>
            </div>
              
            <div class="panel box box-warning"> 
                <div class="box-body">  
                    <h4>Dimmers + Versterkers</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Invoer</th>
                        <th>Uitvoer</th>
                        <th>Vermogen</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * FROM materiaal WHERE category_id='3'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                    echo "<td>" . $row['naam'] . "</td>";
                                    //Staat
                                    if ($row['staat'] == '1'){
                                        echo "<td>Goed</td>";
                                    }elseif ($row['staat'] == '2'){
                                        echo "<td>Matig</td>";
                                    }elseif ($row['staat'] == '3'){
                                        echo "<td>Slecht</td>";
                                    }
                                    //Werkend
                                    echo "<td>" . $row['werkend'] . "</td>";
                                    //Totaal
                                     echo "<td>" . $row['totaal'] . "</td>";
                                    //Gebruikt
                                    if ($row['gebruikt'] == '0'){
                                        echo "<td>Nee</td>";
                                    }elseif ($row['gebruikt'] == '1'){
                                        echo "<td>Ja</td>";
                                    }
                                    //Type
                                    echo "<td>" . $row['type'] . "</td>";
                                    //invoer
                                    echo "<td>" . $row['invoer'] . "</td>";
                                    //Uitvoer
                                    echo "<td>" . $row['uitvoer'] . "</td>";
                                    //Vermogen
                                    echo "<td>" . $row['vermogen'] . "</td>";
                                    // Opmerkingen
                                     echo "<td>" . $row['opmerkingen'] . "</td>";
                                echo "</tr>";
                            }
                            ?>  
                    </tbody>
                   </table>
                </div>
            </div>
              
        
            <div class="panel box box-danger">  
                <div class="box-body">  
                    <h4>Meng + Lichttafels</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Invoer</th>
                        <th>Uitvoer</th>
                        <th>Aux/voeding</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * FROM materiaal WHERE category_id='4'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                    echo "<td>" . $row['naam'] . "</td>";
                                    //Staat
                                    if ($row['staat'] == '1'){
                                        echo "<td>Goed</td>";
                                    }elseif ($row['staat'] == '2'){
                                        echo "<td>Matig</td>";
                                    }elseif ($row['staat'] == '3'){
                                        echo "<td>Slecht</td>";
                                    }
                                    //Werkend
                                    echo "<td>" . $row['werkend'] . "</td>";
                                    //Totaal
                                     echo "<td>" . $row['totaal'] . "</td>";
                                    //Gebruikt
                                    if ($row['gebruikt'] == '0'){
                                        echo "<td>Nee</td>";
                                    }elseif ($row['gebruikt'] == '1'){
                                        echo "<td>Ja</td>";
                                    }
                                    //Type
                                    echo "<td>" . $row['type'] . "</td>";
                                    //invoer
                                    echo "<td>" . $row['invoer'] . "</td>";
                                    //Uitvoer
                                    echo "<td>" . $row['uitvoer'] . "</td>";
                                    //Aux/voeding
                                    if ($row['aux'] == '0'){
                                        echo "<td>Nee</td>";
                                    }elseif ($row['aux'] == '1'){
                                        echo "<td>Ja</td>";
                                    }elseif ($row['aux'] == '4'){
                                        echo "<td>4 aux</td>";
                                    }
                                    // Opmerkingen
                                     echo "<td>" . $row['opmerkingen'] . "</td>";
                                echo "</tr>";
                            }
                            ?>   
                    </tbody>
                      
                   </table>
                </div>
            </div>
              
            <div class="panel box box-purple">
                <div class="box-body">  
                    <h4>CD - spelers</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Invoer</th>
                        <th>Uitvoer</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * FROM materiaal WHERE category_id='5'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                    echo "<td>" . $row['naam'] . "</td>";
                                    //Staat
                                    if ($row['staat'] == '1'){
                                        echo "<td>Goed</td>";
                                    }elseif ($row['staat'] == '2'){
                                        echo "<td>Matig</td>";
                                    }elseif ($row['staat'] == '3'){
                                        echo "<td>Slecht</td>";
                                    }
                                    //Werkend
                                    echo "<td>" . $row['werkend'] . "</td>";
                                    //Totaal
                                     echo "<td>" . $row['totaal'] . "</td>";
                                    //Gebruikt
                                    if ($row['gebruikt'] == '0'){
                                        echo "<td>Nee</td>";
                                    }elseif ($row['gebruikt'] == '1'){
                                        echo "<td>Ja</td>";
                                    }
                                    //Type
                                    echo "<td>" . $row['type'] . "</td>";
                                    //invoer
                                    echo "<td>" . $row['invoer'] . "</td>";
                                    //Uitvoer
                                    echo "<td>" . $row['uitvoer'] . "</td>";
                                    // Opmerkingen
                                     echo "<td>" . $row['opmerkingen'] . "</td>";
                                echo "</tr>";
                            }
                            ?>    
                    </tbody>
                      
                   </table>
                </div>
            </div>
              
            <div class="panel box box-primary">
                <div class="box-body">  
                    <h4>Speakers</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Invoer</th>
                        <th>Uitvoer</th>
                        <th>Vermogen</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * FROM materiaal WHERE category_id='6'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                    echo "<td>" . $row['naam'] . "</td>";
                                    //Staat
                                    if ($row['staat'] == '1'){
                                        echo "<td>Goed</td>";
                                    }elseif ($row['staat'] == '2'){
                                        echo "<td>Matig</td>";
                                    }elseif ($row['staat'] == '3'){
                                        echo "<td>Slecht</td>";
                                    }
                                    //Werkend
                                    echo "<td>" . $row['werkend'] . "</td>";
                                    //Totaal
                                     echo "<td>" . $row['totaal'] . "</td>";
                                    //Gebruikt
                                    if ($row['gebruikt'] == '0'){
                                        echo "<td>Nee</td>";
                                    }elseif ($row['gebruikt'] == '1'){
                                        echo "<td>Ja</td>";
                                    }
                                    //Type
                                    echo "<td>" . $row['type'] . "</td>";
                                    //invoer
                                    echo "<td>" . $row['invoer'] . "</td>";
                                    //Uitvoer
                                    echo "<td>" . $row['uitvoer'] . "</td>";
                                    //Vermogen
                                    echo "<td>" . $row['vermogen'] . "</td>";
                                    // Opmerkingen
                                     echo "<td>" . $row['opmerkingen'] . "</td>";
                                echo "</tr>";
                            }
                            ?>   
                    </tbody>
                      
                   </table>
                </div>
            </div>
              
            <div class="panel box box-success">  
                <div class="box-body">  
                    <h4>Kabels</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>A</th>
                        <th>B</th>
                        <th>Lengte</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * FROM materiaal WHERE category_id='7'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                    echo "<td>" . $row['naam'] . "</td>";
                                    //Staat
                                    if ($row['staat'] == '1'){
                                        echo "<td>Goed</td>";
                                    }elseif ($row['staat'] == '2'){
                                        echo "<td>Matig</td>";
                                    }elseif ($row['staat'] == '3'){
                                        echo "<td>Slecht</td>";
                                    }
                                    //Werkend
                                    echo "<td>" . $row['werkend'] . "</td>";
                                    //Totaal
                                     echo "<td>" . $row['totaal'] . "</td>";
                                    //Gebruikt
                                    if ($row['gebruikt'] == '0'){
                                        echo "<td>Nee</td>";
                                    }elseif ($row['gebruikt'] == '1'){
                                        echo "<td>Ja</td>";
                                    }
                                    //Type
                                    echo "<td>" . $row['type'] . "</td>";
                                    //A
                                    echo "<td>" . $row['A'] . "</td>";
                                    //B
                                    echo "<td>" . $row['B'] . "</td>";
                                    //lengte
                                    echo "<td>" . $row['lengte'] . "</td>";
                                    // Opmerkingen
                                     echo "<td>" . $row['opmerkingen'] . "</td>";
                                echo "</tr>";
                            }
                            ?>   
                    </tbody>
                      
                   </table>
                </div>
            </div>
              
            <div class="panel box box-warning">
                <div class="box-body">  
                    <h4>Licht toebehoren</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Diameter</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * FROM materiaal WHERE category_id='8'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                    echo "<td>" . $row['naam'] . "</td>";
                                    //Staat
                                    if ($row['staat'] == '1'){
                                        echo "<td>Goed</td>";
                                    }elseif ($row['staat'] == '2'){
                                        echo "<td>Matig</td>";
                                    }elseif ($row['staat'] == '3'){
                                        echo "<td>Slecht</td>";
                                    }
                                    //Werkend
                                    echo "<td>" . $row['werkend'] . "</td>";
                                    //Totaal
                                     echo "<td>" . $row['totaal'] . "</td>";
                                    //Gebruikt
                                    if ($row['gebruikt'] == '0'){
                                        echo "<td>Nee</td>";
                                    }elseif ($row['gebruikt'] == '1'){
                                        echo "<td>Ja</td>";
                                    }
                                    //Type
                                    echo "<td>" . $row['type'] . "</td>";
                                    //Diameter
                                    echo "<td>" . $row['diameter'] . "</td>";
                                    // Opmerkingen
                                     echo "<td>" . $row['opmerkingen'] . "</td>";
                                echo "</tr>";
                            }
                            ?>   
                    </tbody>
                      
                   </table>
                </div>
            </div>
              
            <div class="panel box box-danger"> 
                <div class="box-body">  
                    <h4>Geluid toebehoren</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>A</th>
                        <th>B</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * FROM materiaal WHERE category_id='9'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                    echo "<td>" . $row['naam'] . "</td>";
                                    //Staat
                                    if ($row['staat'] == '1'){
                                        echo "<td>Goed</td>";
                                    }elseif ($row['staat'] == '2'){
                                        echo "<td>Matig</td>";
                                    }elseif ($row['staat'] == '3'){
                                        echo "<td>Slecht</td>";
                                    }
                                    //Werkend
                                    echo "<td>" . $row['werkend'] . "</td>";
                                    //Totaal
                                     echo "<td>" . $row['totaal'] . "</td>";
                                    //Gebruikt
                                    if ($row['gebruikt'] == '0'){
                                        echo "<td>Nee</td>";
                                    }elseif ($row['gebruikt'] == '1'){
                                        echo "<td>Ja</td>";
                                    }
                                    //Type
                                    echo "<td>" . $row['type'] . "</td>";
                                    //A
                                    echo "<td>" . $row['A'] . "</td>";
                                    //B
                                    echo "<td>" . $row['B'] . "</td>";
                                    // Opmerkingen
                                     echo "<td>" . $row['opmerkingen'] . "</td>";
                                echo "</tr>";
                            }
                            ?>   
                    </tbody>
                      
                   </table>
                </div>
            </div>

            <div class="panel box box-purple">
                <div class="box-body">  
                    <h4>Consumables</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Afmetingen</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * FROM materiaal WHERE category_id='10'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                    echo "<td>" . $row['naam'] . "</td>";
                                    //Staat
                                    if ($row['staat'] == '1'){
                                        echo "<td>Goed</td>";
                                    }elseif ($row['staat'] == '2'){
                                        echo "<td>Matig</td>";
                                    }elseif ($row['staat'] == '3'){
                                        echo "<td>Slecht</td>";
                                    }elseif ($row['staat'] == '4'){
                                        echo "<td>Gebruikt</td>";
                                    }
                                    //Werkend
                                    echo "<td>" . $row['werkend'] . "</td>";
                                    //Totaal
                                     echo "<td>" . $row['totaal'] . "</td>";
                                    //Gebruikt
                                    if ($row['gebruikt'] == '0'){
                                        echo "<td>Nee</td>";
                                    }elseif ($row['gebruikt'] == '1'){
                                        echo "<td>Ja</td>";
                                    }
                                    //Type
                                    echo "<td>" . $row['type'] . "</td>";
                                    //Afmetingen
                                    echo "<td>" . $row['afmetingen'] . "</td>";
                                    // Opmerkingen
                                     echo "<td>" . $row['opmerkingen'] . "</td>";
                                echo "</tr>";
                            }
                            ?>   
                    </tbody>
                      
                   </table>
                </div>
            </div>
                
            </div>
            </div>
              
            </div>
          </div>
          
        </div>
          
      </section>
</div>

<?php
include "bottom.php";
}elseif($request_page == "edit"){
include "top.php";
$page = 'edit';
check_admin();
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit
        <small>Materiaal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-table"></i> Home</a></li>
        <li class="active">Materiaal</li>
      </ol>
    </section>

    <!-- Main content -->
     <!-- Main content -->
      <section class="content">
      <div class="row">
          <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hier kun je de inventaris bewerken</h3>
              <p style="font-size:17px;">Druk op enter om de wijzigingen door te voeren per regel</p>
            </div>
              
            <div class="box-body">
                <p>Bij staat kun je kiezen uit 3 verschillende mogelijkheden Goed,Matig & Slecht. Bij de consumables (verbruiksartiekelen) is er ook nog de mogelijkheid om 'Gebruikt' te gebruiken bij staat.</p>
                
                <p> Wil je een item verwijderen? Neem dan contact op met de beheerder.</p>
                
                <hr style="border-top: 1px solid #d2d6de;">
            <div class="box-group" id="accordion">
                
                <div class="panel box box-primary">
                    
                    <div class="box-body">  
                        <h4>Microfoons</h4>
                    </div>

                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <thead>
                        <tr> 
                            <th>Naam</th>
                            <th>Staat</th>
                            <th>Werkend</th>
                            <th>Totaal</th>
                            <th>Gebruikt</th>
                            <th>Type</th>
                            <th>Doos</th>
                            <th>Ontvanger</th>
                            <th>Opmerkingen</th>
                        </tr>
                        </thead>
                          
                        <tbody>
                            
                            <?php
                            $SQL = "SELECT *, DATE_FORMAT(update_date,' 
                            %d%m%Y') AS date FROM materiaal WHERE category_id='1'";
                            $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                
                                
                                
                                
                                    
                                    if (date('dmY') == $row['date']){ 
                                       echo "<tr style='background-color: rgb(50,180,50);'>";
                                            echo "<td>" . $row['naam'] . "</td>";
                                            //Staat
                                            if ($row['staat'] == '1'){
                                                echo "<td>Goed</td>";
                                            }elseif ($row['staat'] == '2'){
                                                echo "<td>Matig</td>";
                                            }elseif ($row['staat'] == '3'){
                                                echo "<td>Slecht</td>";
                                            }
                                            //Werkend
                                            echo "<td>" . $row['werkend'] . "</td>";
                                            //Totaal
                                             echo "<td>" . $row['totaal'] . "</td>";
                                            //Gebruikt
                                            if ($row['gebruikt'] == '0'){
                                                echo "<td>Nee</td>";
                                            }elseif ($row['gebruikt'] == '1'){
                                                echo "<td>Ja</td>";
                                            }
                                            //Type
                                            echo "<td>" . $row['type'] . "</td>";
                                            //Doos
                                            echo "<td>" . $row['doos'] . "</td>";
                                            // Ontvanger
                                             echo "<td>" . $row['ontvanger'] . "</td>";
                                            // Opmerkingen
                                             echo "<td>" . $row['opmerkingen'] . "</td>";
                                        echo "</tr>";
                                        
                                    }else{
                                        
                                    echo "<tr>";
                                    
                                        echo '<form method="POST" action="materiaalsettings.php?action=1&categeory_id=1">';
                                        //naam
                                        echo "<td><input type='text' name='name' value='" . $row['naam'] . "'></td>";
                                        //Staat
                                        echo "<td><input type='text' name='staat' value='";
                                            if ($row['staat'] == '1'){
                                                echo "Goed";
                                            }elseif ($row['staat'] == '2'){
                                                echo "Matig";
                                            }elseif ($row['staat'] == '3'){
                                                echo "Slecht";
                                            }
                                        echo "' size='5'>";
                                        //Werkend
                                        echo "<td><input type='number' name='werkend' min='0' max='30' value='" . $row['werkend'] . "'></td>";
                                        //Totaal
                                         echo "<td><input type='number' name='totaal' min='0' max='30' value='" . $row['totaal'] . "'></td>";
                                        //Gebruikt
                                        echo "<td><input type='text' name='gebruikt' value='";
                                            if ($row['gebruikt'] == '0'){
                                                echo "Nee";
                                            }elseif ($row['gebruikt'] == '1'){
                                                echo "Ja";
                                            }
                                        echo "' size='3'>";
                                        //Type
                                        echo "<td><input type='text' name='type' value='" . $row['type'] . "'></td>";
                                        //Doos
                                        echo "<td><input type='text' name='doos' value='" . $row['doos'] . "'></td>";
                                        // Ontvanger
                                         echo "<td><input type='text' name='ontvanger' value='" . $row['ontvanger'] . "'></td>";
                                        // Opmerkingen
                                         echo "<td><input type='text' name='opmerkingen' value='" . $row['opmerkingen'] . "'></td>";
                                
                                        echo "<input type='hidden' value='" . $row['id'] . "' name='id'/>";
                                        echo "<input type='submit' style='position: absolute; left: -9999px'/>";
                                        echo "</form>";
                                    echo "</tr>";
                                    }
                            }
                            
    
                            
                            ?>
                            
                        </tbody>
                          
                       </table>
                    </div>
                </div>
              
            <div class="panel box box-success"> 
                <div class="box-body">  
                    <h4>Lampen</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Houder</th>
                        <th>Vermogen</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * ,DATE_FORMAT(update_date,' 
                            %d%m%Y') AS date FROM materiaal WHERE category_id='2'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                
                                if (date('dmY') == $row['date']){ 
                                    echo "<tr style='background-color: rgb(50,180,50);'>";
                                        echo "<td>" . $row['naam'] . "</td>";
                                        //Staat
                                        if ($row['staat'] == '1'){
                                            echo "<td>Goed</td>";
                                        }elseif ($row['staat'] == '2'){
                                            echo "<td>Matig</td>";
                                        }elseif ($row['staat'] == '3'){
                                            echo "<td>Slecht</td>";
                                        }
                                        //Werkend
                                        echo "<td>" . $row['werkend'] . "</td>";
                                        //Totaal
                                         echo "<td>" . $row['totaal'] . "</td>";
                                        //Gebruikt
                                        if ($row['gebruikt'] == '0'){
                                            echo "<td>Nee</td>";
                                        }elseif ($row['gebruikt'] == '1'){
                                            echo "<td>Ja</td>";
                                        }
                                        //Type
                                        echo "<td>" . $row['type'] . "</td>";
                                        //Houder
                                        echo "<td>" . $row['houder'] . "</td>";
                                        //Vermogen
                                        echo "<td>" . $row['vermogen'] . "</td>";
                                        // Opmerkingen
                                         echo "<td>" . $row['opmerkingen'] . "</td>";
                                    echo "</tr>";
                                    
                                }else{
                                    echo '<form method="POST" action="materiaalsettings.php?action=1&categeory_id=2">';
                                        //naam
                                        echo "<td><input type='text' name='name' value='" . $row['naam'] . "'></td>";
                                        //Staat
                                        echo "<td><input type='text' name='staat' value='";
                                            if ($row['staat'] == '1'){
                                                echo "Goed";
                                            }elseif ($row['staat'] == '2'){
                                                echo "Matig";
                                            }elseif ($row['staat'] == '3'){
                                                echo "Slecht";
                                            }
                                        echo "' size='5'>";
                                        //Werkend
                                        echo "<td><input type='number' name='werkend' min='0' max='30' value='" . $row['werkend'] . "'></td>";
                                        //Totaal
                                         echo "<td><input type='number' name='totaal' min='0' max='30' value='" . $row['totaal'] . "'></td>";
                                        //Gebruikt
                                        echo "<td><input type='text' name='gebruikt' value='";
                                            if ($row['gebruikt'] == '0'){
                                                echo "Nee";
                                            }elseif ($row['gebruikt'] == '1'){
                                                echo "Ja";
                                            }
                                        echo "' size='3'>";
                                        //Type
                                        echo "<td><input type='text' name='type' value='" . $row['type'] . "'></td>";
                                        //Houder
                                        echo "<td><input type='text' name='houder' value='" . $row['houder'] . "'></td>";
                                        //Vermogen
                                        echo "<td><input type='text' name='vermogen' value='" . $row['vermogen'] . "'></td>";
                                        //Opmerkingen
                                        echo "<td><input type='text' name='opmerkingen' value='" . $row['opmerkingen'] . "'></td>";
                                
                                        echo "<input type='hidden' value='" . $row['id'] . "' name='id'/>";
                                        echo "<input type='submit' style='position: absolute; left: -9999px'/>";
                                        echo "</form>";
                                    echo "</tr>";
                                        
                                }
                            }
                            ?>
                    </tbody>
                   </table>
                </div>
            </div>
              
            <div class="panel box box-warning"> 
                <div class="box-body">  
                    <h4>Dimmers + Versterkers</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Invoer</th>
                        <th>Uitvoer</th>
                        <th>Vermogen</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * ,DATE_FORMAT(update_date,' 
                            %d%m%Y') AS date FROM materiaal WHERE category_id='3'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                
                                if (date('dmY') == $row['date']){ 
                                    echo "<tr style='background-color: rgb(50,180,50);'>";
                                        echo "<td>" . $row['naam'] . "</td>";
                                        //Staat
                                        if ($row['staat'] == '1'){
                                            echo "<td>Goed</td>";
                                        }elseif ($row['staat'] == '2'){
                                            echo "<td>Matig</td>";
                                        }elseif ($row['staat'] == '3'){
                                            echo "<td>Slecht</td>";
                                        }
                                        //Werkend
                                        echo "<td>" . $row['werkend'] . "</td>";
                                        //Totaal
                                         echo "<td>" . $row['totaal'] . "</td>";
                                        //Gebruikt
                                        if ($row['gebruikt'] == '0'){
                                            echo "<td>Nee</td>";
                                        }elseif ($row['gebruikt'] == '1'){
                                            echo "<td>Ja</td>";
                                        }
                                        //Type
                                        echo "<td>" . $row['type'] . "</td>";
                                        //invoer
                                        echo "<td>" . $row['invoer'] . "</td>";
                                        //Uitvoer
                                        echo "<td>" . $row['uitvoer'] . "</td>";
                                        //Vermogen
                                        echo "<td>" . $row['vermogen'] . "</td>";
                                        // Opmerkingen
                                         echo "<td>" . $row['opmerkingen'] . "</td>";
                                    echo "</tr>";
                                }else{
                                    echo "<tr>";
                                         echo '<form method="POST" action="materiaalsettings.php?action=1&categeory_id=3">';
                                            //naam
                                            echo "<td><input type='text' name='name' value='" . $row['naam'] . "'></td>";
                                            //Staat
                                            echo "<td><input type='text' name='staat' value='";
                                                if ($row['staat'] == '1'){
                                                    echo "Goed";
                                                }elseif ($row['staat'] == '2'){
                                                    echo "Matig";
                                                }elseif ($row['staat'] == '3'){
                                                    echo "Slecht";
                                                }
                                            echo "' size='5'>";
                                            //Werkend
                                            echo "<td><input type='number' name='werkend' min='0' max='30' value='" . $row['werkend'] . "'></td>";
                                            //Totaal
                                             echo "<td><input type='number' name='totaal' min='0' max='30' value='" . $row['totaal'] . "'></td>";
                                            //Gebruikt
                                            echo "<td><input type='text' name='gebruikt' value='";
                                                if ($row['gebruikt'] == '0'){
                                                    echo "Nee";
                                                }elseif ($row['gebruikt'] == '1'){
                                                    echo "Ja";
                                                }
                                            echo "' size='3'>";
                                            //Type
                                            echo "<td><input type='text' name='type' value='" . $row['type'] . "'></td>";
                                            //invoer
                                            echo "<td><input type='text' name='invoer' value='" . $row['invoer'] . "'></td>";
                                            //Uitvoer
                                            echo "<td><input type='text' name='uitvoer' size='6' value='" . $row['uitvoer'] . "'></td>";
                                            //Vermogen
                                            echo "<td><input type='text' name='vermogen' size='5' value='" . $row['vermogen'] . "'></td>";
                                            // Opmerkingen
                                             echo "<td><input type='text' name='opmerkingen' value='" . $row['opmerkingen'] . "'></td>";
                                    
                                            echo "<input type='hidden' value='" . $row['id'] . "' name='id'/>";
                                            echo "<input type='submit' style='position: absolute; left: -9999px'/>";
                                    
                                        echo "</form>";
                                    echo "</tr>";
                                }
                            }
                            ?>  
                    </tbody>
                   </table>
                </div>
            </div>
              
        
            <div class="panel box box-danger">  
                <div class="box-body">  
                    <h4>Meng + Lichttafels</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Invoer</th>
                        <th>Uitvoer</th>
                        <th>Aux/voeding</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * ,DATE_FORMAT(update_date,' 
                            %d%m%Y') AS date FROM materiaal WHERE category_id='4'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                
                                if (date('dmY') == $row['date']){ 
                                    echo "<tr style='background-color: rgb(50,180,50);'>";
                                        echo "<td>" . $row['naam'] . "</td>";
                                        //Staat
                                        if ($row['staat'] == '1'){
                                            echo "<td>Goed</td>";
                                        }elseif ($row['staat'] == '2'){
                                            echo "<td>Matig</td>";
                                        }elseif ($row['staat'] == '3'){
                                            echo "<td>Slecht</td>";
                                        }
                                        //Werkend
                                        echo "<td>" . $row['werkend'] . "</td>";
                                        //Totaal
                                         echo "<td>" . $row['totaal'] . "</td>";
                                        //Gebruikt
                                        if ($row['gebruikt'] == '0'){
                                            echo "<td>Nee</td>";
                                        }elseif ($row['gebruikt'] == '1'){
                                            echo "<td>Ja</td>";
                                        }
                                        //Type
                                        echo "<td>" . $row['type'] . "</td>";
                                        //invoer
                                        echo "<td>" . $row['invoer'] . "</td>";
                                        //Uitvoer
                                        echo "<td>" . $row['uitvoer'] . "</td>";
                                        //Aux/voeding
                                        if ($row['aux'] == '0'){
                                            echo "<td>Nee</td>";
                                        }elseif ($row['aux'] == '1'){
                                            echo "<td>Ja</td>";
                                        }elseif ($row['aux'] == '4'){
                                            echo "<td>4 aux</td>";
                                        }
                                        // Opmerkingen
                                         echo "<td>" . $row['opmerkingen'] . "</td>";
                                    echo "</tr>";
                                }else{
                                    echo "<tr>";
                                         echo '<form method="POST" action="materiaalsettings.php?action=1&categeory_id=4">';
                                            //naam
                                            echo "<td><input type='text' name='name' value='" . $row['naam'] . "'></td>";
                                            //Staat
                                            echo "<td><input type='text' name='staat' value='";
                                                if ($row['staat'] == '1'){
                                                    echo "Goed";
                                                }elseif ($row['staat'] == '2'){
                                                    echo "Matig";
                                                }elseif ($row['staat'] == '3'){
                                                    echo "Slecht";
                                                }
                                            echo "' size='5'>";
                                            //Werkend
                                            echo "<td><input type='number' name='werkend' min='0' max='30' size='3' value='" . $row['werkend'] . "'></td>";
                                            //Totaal
                                             echo "<td><input type='number' name='totaal' min='0' max='30' value='" . $row['totaal'] . "'></td>";
                                            //Gebruikt
                                            echo "<td><input type='text' name='gebruikt' value='";
                                                if ($row['gebruikt'] == '0'){
                                                    echo "Nee";
                                                }elseif ($row['gebruikt'] == '1'){
                                                    echo "Ja";
                                                }
                                            echo "' size='3'>";
                                            //Type
                                            echo "<td><input type='text' name='type' size='6' value='" . $row['type'] . "'></td>";
                                            //invoer
                                            echo "<td><input type='text' name='invoer' value='" . $row['invoer'] . "'></td>";
                                            //Uitvoer
                                            echo "<td><input type='text' name='uitvoer' value='" . $row['uitvoer'] . "'></td>";
                                            //Aux
                                            echo "<td><input type='text' name='aux' size ='5' value='";
                                                if ($row['aux'] == '0'){
                                                    echo "Nee";
                                                }elseif ($row['aux'] == '1'){
                                                    echo "Ja";
                                                }elseif ($row['aux'] == '4'){
                                                    echo "4 aux";
                                                }
                                            echo "'></td>";
                                            // Opmerkingen
                                             echo "<td><input type='text' name='opmerkingen' value='" . $row['opmerkingen'] . "'></td>";
                                    
                                            echo "<input type='hidden' value='" . $row['id'] . "' name='id'/>";
                                            echo "<input type='submit' style='position: absolute; left: -9999px'/>";
                                    
                                        echo "</form>";
                                    echo "</tr>";
                                }
                            }
                            ?>   
                    </tbody>
                      
                   </table>
                </div>
            </div>
              
            <div class="panel box box-purple">
                <div class="box-body">  
                    <h4>CD - spelers</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Invoer</th>
                        <th>Uitvoer</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * ,DATE_FORMAT(update_date,' 
                            %d%m%Y') AS date FROM materiaal WHERE category_id='5'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                
                                if (date('dmY') == $row['date']){ 
                                    echo "<tr style='background-color: rgb(50,180,50);'>";
                                            echo "<td>" . $row['naam'] . "</td>";
                                            //Staat
                                            if ($row['staat'] == '1'){
                                                echo "<td>Goed</td>";
                                            }elseif ($row['staat'] == '2'){
                                                echo "<td>Matig</td>";
                                            }elseif ($row['staat'] == '3'){
                                                echo "<td>Slecht</td>";
                                            }
                                            //Werkend
                                            echo "<td>" . $row['werkend'] . "</td>";
                                            //Totaal
                                             echo "<td>" . $row['totaal'] . "</td>";
                                            //Gebruikt
                                            if ($row['gebruikt'] == '0'){
                                                echo "<td>Nee</td>";
                                            }elseif ($row['gebruikt'] == '1'){
                                                echo "<td>Ja</td>";
                                            }
                                            //Type
                                            echo "<td>" . $row['type'] . "</td>";
                                            //invoer
                                            echo "<td>" . $row['invoer'] . "</td>";
                                            //Uitvoer
                                            echo "<td>" . $row['uitvoer'] . "</td>";
                                            // Opmerkingen
                                             echo "<td>" . $row['opmerkingen'] . "</td>";
                                        echo "</tr>";
                                    }else{
                                    echo "<tr>";
                                         echo '<form method="POST" action="materiaalsettings.php?action=1&categeory_id=5">';
                                            //naam
                                            echo "<td><input type='text' name='name' value='" . $row['naam'] . "'></td>";
                                            //Staat
                                            echo "<td><input type='text' name='staat' value='";
                                                if ($row['staat'] == '1'){
                                                    echo "Goed";
                                                }elseif ($row['staat'] == '2'){
                                                    echo "Matig";
                                                }elseif ($row['staat'] == '3'){
                                                    echo "Slecht";
                                                }
                                            echo "' size='5'>";
                                            //Werkend
                                            echo "<td><input type='number' name='werkend' min='0' max='30' size='3' value='" . $row['werkend'] . "'></td>";
                                            //Totaal
                                             echo "<td><input type='number' name='totaal' min='0' max='30' value='" . $row['totaal'] . "'></td>";
                                            //Gebruikt
                                            echo "<td><input type='text' name='gebruikt' value='";
                                                if ($row['gebruikt'] == '0'){
                                                    echo "Nee";
                                                }elseif ($row['gebruikt'] == '1'){
                                                    echo "Ja";
                                                }
                                            echo "' size='3'>";
                                            //Type
                                            echo "<td><input type='text' name='type' value='" . $row['type'] . "'></td>";
                                            //invoer
                                            echo "<td><input type='text' name='invoer' value='" . $row['invoer'] . "'></td>";
                                            //Uitvoer
                                            echo "<td><input type='text' name='uitvoer' value='" . $row['uitvoer'] . "'></td>";
                                            // Opmerkingen
                                             echo "<td><input type='text' name='opmerkingen' value='" . $row['opmerkingen'] . "'></td>";
                                    
                                            echo "<input type='hidden' value='" . $row['id'] . "' name='id'/>";
                                            echo "<input type='submit' style='position: absolute; left: -9999px'/>";
                                    
                                        echo "</form>";
                                    echo "</tr>";
                                }
                            }
                            ?>    
                    </tbody>
                      
                   </table>
                </div>
            </div>
              
            <div class="panel box box-primary">
                <div class="box-body">  
                    <h4>Speakers</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Invoer</th>
                        <th>Uitvoer</th>
                        <th>Vermogen</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * ,DATE_FORMAT(update_date,' 
                            %d%m%Y') AS date FROM materiaal WHERE category_id='6'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                
                            if (date('dmY') == $row['date']){ 
                                    echo "<tr style='background-color: rgb(50,180,50);'>";
                                        echo "<td>" . $row['naam'] . "</td>";
                                        //Staat
                                        if ($row['staat'] == '1'){
                                            echo "<td>Goed</td>";
                                        }elseif ($row['staat'] == '2'){
                                            echo "<td>Matig</td>";
                                        }elseif ($row['staat'] == '3'){
                                            echo "<td>Slecht</td>";
                                        }
                                        //Werkend
                                        echo "<td>" . $row['werkend'] . "</td>";
                                        //Totaal
                                         echo "<td>" . $row['totaal'] . "</td>";
                                        //Gebruikt
                                        if ($row['gebruikt'] == '0'){
                                            echo "<td>Nee</td>";
                                        }elseif ($row['gebruikt'] == '1'){
                                            echo "<td>Ja</td>";
                                        }
                                        //Type
                                        echo "<td>" . $row['type'] . "</td>";
                                        //invoer
                                        echo "<td>" . $row['invoer'] . "</td>";
                                        //Uitvoer
                                        echo "<td>" . $row['uitvoer'] . "</td>";
                                        //Vermogen
                                        echo "<td>" . $row['vermogen'] . "</td>";
                                        // Opmerkingen
                                         echo "<td>" . $row['opmerkingen'] . "</td>";
                                    echo "</tr>";
                                }else{
                                    echo '<form method="POST" action="materiaalsettings.php?action=1&categeory_id=6">';
                                        //naam
                                        echo "<td><input type='text' name='name' value='" . $row['naam'] . "'></td>";
                                        //Staat
                                        echo "<td><input type='text' name='staat' value='";
                                            if ($row['staat'] == '1'){
                                                echo "Goed";
                                            }elseif ($row['staat'] == '2'){
                                                echo "Matig";
                                            }elseif ($row['staat'] == '3'){
                                                echo "Slecht";
                                            }
                                        echo "' size='5'>";
                                        //Werkend
                                        echo "<td><input type='number' name='werkend' min='0' max='30' value='" . $row['werkend'] . "'></td>";
                                        //Totaal
                                         echo "<td><input type='number' name='totaal' min='0' max='30' value='" . $row['totaal'] . "'></td>";
                                        //Gebruikt
                                        echo "<td><input type='text' name='gebruikt' value='";
                                            if ($row['gebruikt'] == '0'){
                                                echo "Nee";
                                            }elseif ($row['gebruikt'] == '1'){
                                                echo "Ja";
                                            }
                                        echo "' size='3'>";
                                        //Type
                                        echo "<td><input type='text' name='type' value='" . $row['type'] . "'></td>";
                                        //Invoer
                                        echo "<td><input type='text' name='invoer' value='" . $row['invoer'] . "'></td>";
                                        //Uitvoer
                                        echo "<td><input type='text' name='uitvoer' value='" . $row['uitvoer'] . "'></td>";
                                        //Vermogen
                                        echo "<td><input type='text' name='vermogen' value='" . $row['vermogen'] . "'></td>";
                                        //Opmerkingen
                                        echo "<td><input type='text' name='opmerkingen' value='" . $row['opmerkingen'] . "'></td>";
                                
                                        echo "<input type='hidden' value='" . $row['id'] . "' name='id'/>";
                                        echo "<input type='submit' style='position: absolute; left: -9999px'/>";
                                        echo "</form>";
                                    echo "</tr>";
                                }
                            }
                            ?>   
                    </tbody>
                      
                   </table>
                </div>
            </div>
              
            <div class="panel box box-success">  
                <div class="box-body">  
                    <h4>Kabels</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>A</th>
                        <th>B</th>
                        <th>Lengte</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * ,DATE_FORMAT(update_date,' 
                            %d%m%Y') AS date FROM materiaal WHERE category_id='7'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                 if (date('dmY') == $row['date']){ 
                                    echo "<tr style='background-color: rgb(50,180,50);'>";
                                        echo "<td>" . $row['naam'] . "</td>";
                                        //Staat
                                        if ($row['staat'] == '1'){
                                            echo "<td>Goed</td>";
                                        }elseif ($row['staat'] == '2'){
                                            echo "<td>Matig</td>";
                                        }elseif ($row['staat'] == '3'){
                                            echo "<td>Slecht</td>";
                                        }elseif ($row['staat'] == '4'){
                                                echo "<td>Gebruikt</td>";
                                            }
                                        //Werkend
                                        echo "<td>" . $row['werkend'] . "</td>";
                                        //Totaal
                                         echo "<td>" . $row['totaal'] . "</td>";
                                        //Gebruikt
                                        if ($row['gebruikt'] == '0'){
                                            echo "<td>Nee</td>";
                                        }elseif ($row['gebruikt'] == '1'){
                                            echo "<td>Ja</td>";
                                        }
                                        //Type
                                        echo "<td>" . $row['type'] . "</td>";
                                        //A
                                        echo "<td>" . $row['A'] . "</td>";
                                        //B
                                        echo "<td>" . $row['B'] . "</td>";
                                        //lengte
                                        echo "<td>" . $row['lengte'] . "</td>";
                                        // Opmerkingen
                                         echo "<td>" . $row['opmerkingen'] . "</td>";
                                    echo "</tr>";
                                 }else{
                                    echo '<form method="POST" action="materiaalsettings.php?action=1&categeory_id=7">';
                                        //naam
                                        if(!empty($row['naam'])){
                                            echo "<td><input type='text' name='name' value='" . $row['naam'] . "'></td>";
                                        }else{
                                            echo "<td>" . $row['naam'] . "</td>";
                                        }
                                        
                                        //Staat
                                        echo "<td><input type='text' name='staat' value='";
                                            if ($row['staat'] == '1'){
                                                echo "Goed";
                                            }elseif ($row['staat'] == '2'){
                                                echo "Matig";
                                            }elseif ($row['staat'] == '3'){
                                                echo "Slecht";
                                            }elseif ($row['staat'] == '4'){
                                                echo "Gebruikt";
                                            }
                                        echo "' size='5'>";
                                        //Werkend
                                        echo "<td><input type='number' name='werkend' min='0' max='30' value='" . $row['werkend'] . "'></td>";
                                        //Totaal
                                         echo "<td><input type='number' name='totaal' min='0' max='30' value='" . $row['totaal'] . "'></td>";
                                        //Gebruikt
                                        echo "<td><input type='text' name='gebruikt' value='";
                                            if ($row['gebruikt'] == '0'){
                                                echo "Nee";
                                            }elseif ($row['gebruikt'] == '1'){
                                                echo "Ja";
                                            }
                                        echo "' size='3'>";
                                        //Type
                                        echo "<td><input type='text' name='type' value='" . $row['type'] . "'></td>";  
                                        //A
                                        echo "<td><input type='text' name='A' value='" . $row['A'] . "'></td>";
                                        //B
                                        echo "<td><input type='text' name='B' value='" . $row['B'] . "'></td>";
                                        //lengte
                                        echo "<td><input type='text' name='lengte' value='" . $row['lengte'] . "'></td>";
                                        //Opmerkingen
                                        echo "<td><input type='text' name='opmerkingen' value='" . $row['opmerkingen'] . "'></td>";
                                
                                        echo "<input type='hidden' value='" . $row['id'] . "' name='id'/>";
                                        echo "<input type='submit' style='position: absolute; left: -9999px'/>";
                                        echo "</form>";
                                    echo "</tr>";
                                 }
                            }
                            ?>   
                    </tbody>
                      
                   </table>
                </div>
            </div>
              
            <div class="panel box box-warning">
                <div class="box-body">  
                    <h4>Licht toebehoren</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Diameter</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * ,DATE_FORMAT(update_date,' 
                            %d%m%Y') AS date FROM materiaal WHERE category_id='8'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                
                                if (date('dmY') == $row['date']){ 
                                    echo "<tr style='background-color: rgb(50,180,50);'>";
                                        echo "<td>" . $row['naam'] . "</td>";
                                        //Staat
                                        if ($row['staat'] == '1'){
                                            echo "<td>Goed</td>";
                                        }elseif ($row['staat'] == '2'){
                                            echo "<td>Matig</td>";
                                        }elseif ($row['staat'] == '3'){
                                            echo "<td>Slecht</td>";
                                        }elseif ($row['staat'] == '4'){
                                            echo "<td>Gebruikt</td>";
                                        }
                                        //Werkend
                                        echo "<td>" . $row['werkend'] . "</td>";
                                        //Totaal
                                         echo "<td>" . $row['totaal'] . "</td>";
                                        //Gebruikt
                                        if ($row['gebruikt'] == '0'){
                                            echo "<td>Nee</td>";
                                        }elseif ($row['gebruikt'] == '1'){
                                            echo "<td>Ja</td>";
                                        }
                                        //Type
                                        echo "<td>" . $row['type'] . "</td>";
                                        //Diameter
                                        echo "<td>" . $row['diameter'] . "</td>";
                                        // Opmerkingen
                                         echo "<td>" . $row['opmerkingen'] . "</td>";
                                    echo "</tr>";
                                
                                }else{
                                    echo '<form method="POST" action="materiaalsettings.php?action=1&categeory_id=8">';
                                        //naam
                                        //naam
                                        if(!empty($row['naam'])){
                                            echo "<td><input type='text' name='name' value='" . $row['naam'] . "'></td>";
                                        }else{
                                            echo "<td>" . $row['naam'] . "</td>";
                                        }
                                        //Staat
                                        echo "<td><input type='text' name='staat' value='";
                                            if ($row['staat'] == '1'){
                                                echo "Goed";
                                            }elseif ($row['staat'] == '2'){
                                                echo "Matig";
                                            }elseif ($row['staat'] == '3'){
                                                echo "Slecht";
                                            }elseif ($row['staat'] == '4'){
                                                echo "Gebruikt";
                                            }
                                        echo "' size='5'>";
                                        //Werkend
                                        echo "<td><input type='number' name='werkend' min='0' max='30' value='" . $row['werkend'] . "'></td>";
                                        //Totaal
                                         echo "<td><input type='number' name='totaal' min='0' max='30' value='" . $row['totaal'] . "'></td>";
                                        //Gebruikt
                                        echo "<td><input type='text' name='gebruikt' value='";
                                            if ($row['gebruikt'] == '0'){
                                                echo "Nee";
                                            }elseif ($row['gebruikt'] == '1'){
                                                echo "Ja";
                                            }
                                        echo "' size='3'>";
                                        //Type
                                        echo "<td><input type='text' name='type' value='" . $row['type'] . "'></td>";
                                        //Diameter
                                        echo "<td><input type='text' name='diameter' value='" . $row['diameter'] . "'></td>";
                                        //Opmerkingen
                                        echo "<td><input type='text' name='opmerkingen' value='" . $row['opmerkingen'] . "'></td>";
                                
                                        echo "<input type='hidden' value='" . $row['id'] . "' name='id'/>";
                                        echo "<input type='submit' style='position: absolute; left: -9999px'/>";
                                        echo "</form>";
                                    echo "</tr>";
                                        
                                }
                            }
                            ?>   
                    </tbody>
                      
                   </table>
                </div>
            </div>
              
            <div class="panel box box-danger"> 
                <div class="box-body">  
                    <h4>Geluid toebehoren</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>A</th>
                        <th>B</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * ,DATE_FORMAT(update_date,' 
                            %d%m%Y') AS date FROM materiaal WHERE category_id='9'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                
                                if (date('dmY') == $row['date']){ 
                                    echo "<tr style='background-color: rgb(50,180,50);'>";
                                        echo "<td>" . $row['naam'] . "</td>";
                                        //Staat
                                        if ($row['staat'] == '1'){
                                            echo "<td>Goed</td>";
                                        }elseif ($row['staat'] == '2'){
                                            echo "<td>Matig</td>";
                                        }elseif ($row['staat'] == '3'){
                                            echo "<td>Slecht</td>";
                                        }elseif ($row['staat'] == '4'){
                                            echo "<td>Gebruikt</td>";
                                        }
                                        //Werkend
                                        echo "<td>" . $row['werkend'] . "</td>";
                                        //Totaal
                                         echo "<td>" . $row['totaal'] . "</td>";
                                        //Gebruikt
                                        if ($row['gebruikt'] == '0'){
                                            echo "<td>Nee</td>";
                                        }elseif ($row['gebruikt'] == '1'){
                                            echo "<td>Ja</td>";
                                        }
                                        //Type
                                        echo "<td>" . $row['type'] . "</td>";
                                        //A
                                        echo "<td>" . $row['A'] . "</td>";
                                        //B
                                        echo "<td>" . $row['B'] . "</td>";
                                        // Opmerkingen
                                         echo "<td>" . $row['opmerkingen'] . "</td>";
                                    echo "</tr>";
                                }else{
                                    echo '<form method="POST" action="materiaalsettings.php?action=1&categeory_id=9">';
                                        //naam
                                        //naam
                                        if(!empty($row['naam'])){
                                            echo "<td><input type='text' name='name' value='" . $row['naam'] . "'></td>";
                                        }else{
                                            echo "<td>" . $row['naam'] . "</td>";
                                        }
                                        //Staat
                                        echo "<td><input type='text' name='staat' value='";
                                            if ($row['staat'] == '1'){
                                                echo "Goed";
                                            }elseif ($row['staat'] == '2'){
                                                echo "Matig";
                                            }elseif ($row['staat'] == '3'){
                                                echo "Slecht";
                                            }elseif ($row['staat'] == '4'){
                                                echo "Gebruikt";
                                            }
                                        echo "' size='5'>";
                                        //Werkend
                                        echo "<td><input type='number' name='werkend' min='0' max='30' value='" . $row['werkend'] . "'></td>";
                                        //Totaal
                                         echo "<td><input type='number' name='totaal' min='0' max='30' value='" . $row['totaal'] . "'></td>";
                                        //Gebruikt
                                        echo "<td><input type='text' name='gebruikt' value='";
                                            if ($row['gebruikt'] == '0'){
                                                echo "Nee";
                                            }elseif ($row['gebruikt'] == '1'){
                                                echo "Ja";
                                            }
                                        echo "' size='3'>";
                                        //Type
                                        echo "<td><input type='text' name='type' value='" . $row['type'] . "'></td>";
                                         //A
                                        echo "<td><input type='text' name='A' value='" . $row['A'] . "'></td>";
                                        //B
                                        echo "<td><input type='text' name='B' value='" . $row['B'] . "'></td>";
                                        //Opmerkingen
                                        echo "<td><input type='text' name='opmerkingen' value='" . $row['opmerkingen'] . "'></td>";
                                
                                        echo "<input type='hidden' value='" . $row['id'] . "' name='id'/>";
                                        echo "<input type='submit' style='position: absolute; left: -9999px'/>";
                                        echo "</form>";
                                    echo "</tr>";
                                }
                            }
                            ?>   
                    </tbody>
                      
                   </table>
                </div>
            </div>

            <div class="panel box box-purple">
                <div class="box-body">  
                    <h4>Consumables</h4>
                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Staat</th>
                        <th>Werkend</th>
                        <th>Totaal</th>
                        <th>Gebruikt</th>
                        <th>Type</th>
                        <th>Afmetingen</th>
                        <th>Opmerkingen</th>
                    </tr>
                    </thead>
                      
                    <tbody>
                        <?php 
                        $SQL = "SELECT * ,DATE_FORMAT(update_date,' 
                            %d%m%Y') AS date FROM materiaal WHERE category_id='10'";
                        $result = $conn->query($SQL);
        
                            while($row = $result->fetch_assoc()){
                                
                                if (date('dmY') == $row['date']){ 
                                    echo "<tr style='background-color: rgb(50,180,50);'>";
                                        echo "<td>" . $row['naam'] . "</td>";
                                        //Staat
                                        if ($row['staat'] == '1'){
                                            echo "<td>Goed</td>";
                                        }elseif ($row['staat'] == '2'){
                                            echo "<td>Matig</td>";
                                        }elseif ($row['staat'] == '3'){
                                            echo "<td>Slecht</td>";
                                        }elseif ($row['staat'] == '4'){
                                            echo "<td>Gebruikt</td>";
                                        }
                                        //Werkend
                                        echo "<td>" . $row['werkend'] . "</td>";
                                        //Totaal
                                         echo "<td>" . $row['totaal'] . "</td>";
                                        //Gebruikt
                                        if ($row['gebruikt'] == '0'){
                                            echo "<td>Nee</td>";
                                        }elseif ($row['gebruikt'] == '1'){
                                            echo "<td>Ja</td>";
                                        }
                                        //Type
                                        echo "<td>" . $row['type'] . "</td>";
                                        //Afmetingen
                                        echo "<td>" . $row['afmetingen'] . "</td>";
                                        // Opmerkingen
                                         echo "<td>" . $row['opmerkingen'] . "</td>";
                                    echo "</tr>";
                                }else{
                                    echo '<form method="POST" action="materiaalsettings.php?action=1&categeory_id=10">';
                                        //naam
                                        //naam
                                        if(!empty($row['naam'])){
                                            echo "<td><input type='text' name='name' value='" . $row['naam'] . "'></td>";
                                        }else{
                                            echo "<td>" . $row['naam'] . "</td>";
                                        }
                                        //Staat
                                        echo "<td><input type='text' name='staat' value='";
                                            if ($row['staat'] == '1'){
                                                echo "Goed";
                                            }elseif ($row['staat'] == '2'){
                                                echo "Matig";
                                            }elseif ($row['staat'] == '3'){
                                                echo "Slecht";
                                            }elseif ($row['staat'] == '4'){
                                                echo "Gebruikt";
                                            }
                                        echo "' size='5'>";
                                        //Werkend
                                        echo "<td><input type='number' name='werkend' min='0' max='30' value='" . $row['werkend'] . "'></td>";
                                        //Totaal
                                         echo "<td><input type='number' name='totaal' min='0' max='30' value='" . $row['totaal'] . "'></td>";
                                        //Gebruikt
                                        echo "<td><input type='text' name='gebruikt' value='";
                                            if ($row['gebruikt'] == '0'){
                                                echo "Nee";
                                            }elseif ($row['gebruikt'] == '1'){
                                                echo "Ja";
                                            }
                                        echo "' size='3'>";
                                        //Type
                                        echo "<td><input type='text' name='type' value='" . $row['type'] . "'></td>";
                                        //afmetingen
                                        echo "<td><input type='text' name='afmetingen' value='" . $row['afmetingen'] . "'></td>";
                                        //Opmerkingen
                                        echo "<td><input type='text' name='opmerkingen' value='" . $row['opmerkingen'] . "'></td>";
                                
                                        echo "<input type='hidden' value='" . $row['id'] . "' name='id'/>";
                                        echo "<input type='submit' style='position: absolute; left: -9999px'/>";
                                        echo "</form>";
                                    echo "</tr>";
                                }
                            }
                            ?>   
                    </tbody>
                      
                   </table>
                </div>
            </div>
                
            </div>
            </div>
              </div>
          </div>
          </div>
      <div class="row">
          
        </div>
          
      </section>
</div>

<?php
include "bottom.php";
}elseif($request_page == "enter"){
include "top.php";
$page = 'enter';
check_admin();
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoeren
        <small>Materiaal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-table"></i> Home</a></li>
        <li class="active">Materiaal</li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
      <div class="row">
          <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Hier kun je een item aan de inventaris toevoegen</h3>
                </div>

                <div class="box-body">
                    <form class="form-horizontal" action="materiaalsettings.php?action=2" method="POST">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Naam</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputTitle" placeholder="Naam van het item" name="naam" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Staat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputTitle" placeholder="Staat van item" value="" name="staat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputNumber" class="col-sm-2 control-label">Werkend</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="inputNumber" placeholder="Werkend" value="" name="werkend" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputlocation" class="col-sm-2 control-label">Gebruikt</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputTitle" placeholder="Gebruikt" value="" name="gebruikt" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Type</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputTitle" placeholder="Type" value="" name="type" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputlocation" class="col-sm-2 control-label">Opmerkingen</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputTitle" placeholder="Opmerking" value="" name="opmerkingen">
                                </div>
                            </div>
                            
                        </div>
                        
                        <br><br/>
                        
                        <div class="col-sm-offset-1 col-sm-11">
                            <p>Hier boven kun je de standaard informatie voor een item invoeren. Later kun je de details toevoegen dit kan via de 'bewerken' pagina (te vinden onder het knopje materiaal). </p><p>Kies hier onder de caterogrie waarin het item valt. Dit is verplicht.</p>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputType" class="col-sm-2 control-label">Categorie</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="inputType" name="id" required>
                                        <?php                                                       $SQL = "SELECT * FROM materiaal_categories";
                                            $result = $conn->query($SQL);
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo "<option value='" . $row['cat_id'] . "'";
                                                echo ">" . $row['cat_name'] . "</option>";
                                              }
                                          ?>
                                      </select>
                                </div>
                            </div>
                        </div>
                            
                        <div class="col-sm-offset-6 col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-9">
                                    <button type="submit" class="btn btn-flat btn-primary pull-right">Toepassen</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
          </div>
        </div>
      </section>
</div>

<?php
include "bottom.php";
}
?>
      
          