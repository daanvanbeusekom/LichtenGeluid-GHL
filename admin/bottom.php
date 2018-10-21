<?php $version = '0.4.1'; ?>
</section>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> <?php echo $version ?>
    </div>
    <strong>Copyright &copy; 2016-<?php echo date("Y"); ?> <a href="../index.php">Licht & Geluid</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        
      </div>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>

<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="dist/js/demo.js"></script>
  <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();
  });
</script>
<?php 

activaty();

$PAGE = basename($_SERVER['PHP_SELF']); 

    if($PAGE =='calendar.php'){
        include 'JS/calendar_graph.php';
        
?>
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- fullCalendar -->
<script src="bower_components/moment/moment.js"></script>
<script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- date -->
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="JS/calendar_date.js"></script>


<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<?php
    }elseif($PAGE =='index.php'){      
?>

<script src="JS/api.js"></script>

    <script>
      $('#wrapper').SocialCounter({
        //Get Usernames
        twitter_user: 'GHL_Feesten'
        
      });
    </script>
<?php } ?>

</body>
</html>
