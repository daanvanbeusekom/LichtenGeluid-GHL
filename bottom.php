    <footer class="page-footer teal">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Waar staan wij voor?</h5>
              <p class="grey-text text-lighten-4">Wij zijn enthousiaste leerlingen van het Groene Hart Lyceum. Wij hebben allemaal een passie voor Licht & Geluid. De een is DJ, de andere is Geluidstechnicus of Lichtechnicus. Al met al vormen we een leuke en gezellige groep!</p>


            </div>
            <div class="col l3 s12">
              <h5 class="white-text">Instellingen</h5>
              <ul>
                <li><a class="white-text" href="admin">Inloggen</a></li>
                <li><a class="white-text" href="materiaal.php">Materiaal</a></li>
                <li><a class="white-text" href="cookies.php">Cookie's</a></li>
              </ul>
            </div>
            <div class="col l3 s12">
              <h5 class="white-text">Social Media</h5>
              <ul>
                <li><a class="white-text" href="admin">Inloggen</a></li>
                <li><a class="white-text" href="https://www.facebook.com/GHLyceumFeesten/">Facebook</a></li>
                <li><a class="white-text" href="https://twitter.com/GHL_Feesten">Twitter</a></li>
                <li><a class="white-text" href="https://www.instagram.com/groenehartlyceum/">Instagram</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          Made by <a class="brown-text text-lighten-3" href="http://daanvanbeusekom.tk">Daan van Beusekom</a>
          </div>
        </div>
      </footer>


      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
      <script src="JS/materialize.js"></script>
      <script src="JS/init.js"></script>
      <script src="JS/lightbox-plus-jquery.min.js"></script>
      <script type="text/javascript">
			var jQuery_2_1_4 = $.noConflict(true);
      </script>
      <script src="JS/<?php if(isset($_COOKIE['COOKIE_WALL']) && !empty($_COOKIE['COOKIE_WALL'])){ echo"cookie"; }else{ echo "modal"; } ?>.js"></script>
      

  </body>
</html>
