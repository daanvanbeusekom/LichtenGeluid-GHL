<?php
include "top.php";
check_admin();
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Social Media
        <small>Overzicht</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-link"></i> Home</a></li>
        <li class="active">Social Media</li>
      </ol>
    </section>
      
    <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
              <div class="col-md-12">
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-link"></i>
                        <h3 class="box-title">Social Media</h3>
                    </div>
                    <div class="box-body">
                        <p>Hier zijn de verschillende social media accounts van het licht & geluid te vinden. Er is te zien hoeveel volgers er zijn en de verschillende wachtwoorden staan aangegeven.</p>
                    </div>
                </div>
              </div>
              
              <div class="col-md-4">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <i class="fa fa-facebook-square txt-white"></i>
                        <h3 class="box-title">Facebook</h3>
                    </div>
                    <div class="box-body">
                        <p>Hier zijn de gegevens van het facebook account te vinden. Je kunt ook foto's uploaden op facebook.</p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                              <b>Volgers</b> <a class="pull-right"><script src="JS/facebookcount.js" type='text/javascript'></script><p class="facebookcount"></p></a>
                            </li>
                            <li class="list-group-item">
                              <b>Email</b> <a href="mailto:admin@admin.nl" class="pull-right">admin@admin.nl</a>
                            </li>
                            <li class="list-group-item">
                              <b>Wachtwoord</b> <a class="pull-right">543</a>
                            </li>
                        </ul>
                        
                        
                        <p>Het is niet de bedoeling dat er misbruik gemaakt wordt van deze gegevens.</p>
                    </div>
                </div>
              </div>
              
              <div class="col-md-4">
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <i class="fa fa-instagram"></i>
                        <h3 class="box-title">Instagram</h3>
                    </div>
                    <div class="box-body">
                        <p>Hier zijn de gegevens van het instagram account te vinden. Je kunt foto's van een evenement uploaden met een passende tekst.</p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                              <b>Volgers</b> <a class="pull-right"><script src="JS/instagramcount.js" type='text/javascript'></script>
                              <p class="instagramcount" id="channelFollowers"></p></a>
                            </li>
                            <li class="list-group-item">
                              <b>Email</b> <a href="mailto:admin@admin.nl" class="pull-right">admin@admin.nl</a>
                            </li>
                            <li class="list-group-item">
                              <b>Wachtwoord</b> <a class="pull-right">543</a>
                            </li>
                        </ul>
                        
                        
                        <p>Het is niet de bedoeling dat er misbruik gemaakt wordt van deze gegevens.</p>
                    </div>
                </div>
              </div>
              
              <div class="col-md-4">
                  <div class="box box-warning">
                    <div class="box-header with-border">
                      <i class="fa fa-twitter"></i>
                        <h3 class="box-title">Twitter</h3>
                    </div>
                    <div class="box-body">
                        <p>Hier zijn de gegevens van het twitter account te vinden. Je kunt de volgers op de hoogte houden van de evenementen.</p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                              <b>Volgers</b> <a class="pull-right"><p class=" twittercount"></p></a>
                            </li>
                            <li class="list-group-item">
                              <b>Email</b> <a href="mailto:admin@admin.nl" class="pull-right">admin@admin.nl</a>
                            </li>
                            <li class="list-group-item">
                              <b>Wachtwoord</b> <a class="pull-right">543</a>
                            </li>
                        </ul>
                        
                        
                        <p>Het is niet de bedoeling dat er misbruik gemaakt wordt van deze gegevens.</p>
                    </div>
                </div>
              </div>
              
          </div>
       </section>

      
</div>
  <!-- /.content-wrapper -->
<?php
include "bottom.php";
?>