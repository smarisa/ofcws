    </div>

    <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div style="text-align: center;">
        <small>
          Created 2013-02-07, Modified 2018-03-30 <br/>
          All Rights Reserved / Otaniemi Fight Club
        </small>
      </div>
    </nav>

    <div id="javascripts">
      <script src="/static/js/jquery.min.js"></script>
      <script src="/static/js/bootstrap.min.js"></script>
      <script src="/static/js/ofc.js"></script>
      <?php
        foreach ( $vpfjs as $pfjs )
        {
          echo '<script src="' . $pfjs . '"></script>';
        }
      ?>
    </div>

  </body>

</html>
