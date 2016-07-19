<footer>
  <div class="container info wrapper" id="info">
    <div class="row icono">
      <div class="col-xs-4">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        <hr>
      </div>
      <div class="col-xs-4">
        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
        <hr>
      </div>
      <div class="col-xs-4">
        <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
        <hr>
      </div>
    </div>
    <div class="row">

      <div class="col-xs-4">
        <p>About Us</p>
      <p>	Establishments primarily engaged in the retail sale of household furniture. These stores may also sell home furnishings, major appliances, and floor coverings.
      </p>
      <a>Read more..</a>
      </div>
      <div class="col-xs-4">
        <p>500 NE 185th St. Miami, FL. 33179</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2707.792914175818!2d-66.87145266086156!3d10.466309556093748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xdedec062827e1cd0!2sCentro+Comercial+Santa+F%C3%A9!5e0!3m2!1ses!2sve!4v1447210628403"
          width="350" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-xs-4">
        <div class="row">
            <div class="col-xs-4">
                  <p>info@trendloft.net</p>
            </div>
        </div>
        <div class="row">
          <div class ="col-xs-6">
            <ul class="redesFoot">
            <li><a href="http://facebook.com/trendloft"><img src="resources/images/LogoMakrBeigeFb.png" alt=""></a></li>
          </ul>
          </div>
          <div class ="col-xs-6">
            <ul class="redesFoot">
              <li><a href="http://twitter.com/trendloft"><img src="resources/images/LogoMakrBeigeTw.png" alt=""></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class ="col-xs-6">
            <ul class="redesFoot">
              <li><a href="http://instagram.com/trend_loft"><img src="resources/images/LogoMakrBeigeIg.png" alt=""></a></li>
              </ul>
          </div>
          <div class ="col-xs-6">
            <ul class="redesFoot">
                <li><a href="http://pintrest.com/trendloft"><img src="resources/images/LogoMakrBeigePin.png" alt=""></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
      <?php
        if(isset($_SESSION['logueado']) and $_SESSION['logueado']){
           $nombre = $_SESSION['userid'];
           echo "  <div class=''>
               <p>
                 Welcome $nombre!
               </p>
             </div>
             <a href='Logout.php'>Logout</a>
             ";
        }
         ?>
      </div>


    </div>
  </div>
</footer>
</div>


</body>

</html>
