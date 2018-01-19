<style>
  table
    {
        font-size: 8px;
    }

    .master-login
    {
        position: relative;
        top:100px;
    }
  </style>
  <?php include "./Extra/Header.php";?>

  <div class="dashboard-wrapper">
    <div class="main-container">
      <div class="navbar hidden-desktop">
        <div class="navbar-inner">
          <div class="container">
            <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse navbar-responsive-collapse">
              <ul class="nav">
                <li>
                  <a href="index.html">Dashboard</a>
                </li>
                <li>
                  <a href="graphs.html">Payment</a>
                </li>
                <li>
                  <a href="timeline.html">Timeline</a>
                </li>
                <li>
                  <a href="tables.html">Tables</a>
                </li>
                <li>
                  <a href="forms.html">Forms</a>
                </li>
                <li>
                  <a href="ui-elements.html">UI Elements</a>
                </li>
                <li>
                  <a href="grid.html">Grid</a>
                </li>
                <li>
                  <a href="gallery.html">Gallery</a>
                </li>
                <li>
                  <a href="typography.html">Typography</a>
                </li>
                <li>
                  <a href="icons.html">Icons</a>
                </li>
                <li>
                  <a href="MasterLogin.html">MasterLogin</a>
                </li>
                <li>
                  <a href="error.html">404</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row-fluid">
        <div class="span12">
          <ul class="breadcrumb-beauty">
            <li>
              <a href="index.html"><span class="fs1" aria-hidden="true" data-icon="&#xe002;"></span> Dashboard</a>
            </li>
            <li>
              <a href="#">Dashboard</a>
            </li>
          </ul>
        </div>
      </div>

      <br>
       <div class="container-fluid master-login">
  <div class="row-fluid">
    <div class="span4 offset4">
      <div class="signin">
        <h1 class="center-align-text" style="color:rgba(255,255,255,.4);font-size:3em;">Good Year Security</h1>
        <h1 class="center-align-text text-inverse" style="color:rgba(0,0,0,.6);">Login</h1>
        <form action="Master.php" class="signin-wrapper" method="post">
          <div class="content">
            <input class="input input-block-level" placeholder="Email" type="email" value="">
            <input class="input input-block-level" placeholder="Password" type="password">
          </div>
          <div class="actions">
            <input class="btn btn-info pull-right" type="submit" value="Login">
            <span class="checkbox-wrapper">
              <a href="index.html" class="pull-left">Forgot Password</a>
            </span>
            <div class="clearfix"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>







<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-ui-1.8.23.custom.min.js"></script>

<!-- morris Payment -->
<script src="js/morris/morris.js"></script>
<script src="js/morris/raphael-min.js"></script>

<!-- Flot Payment -->
<script src="js/flot/jquery.flot.js"></script>
<script src="js/flot/jquery.flot.resize.min.js"></script>

<!-- Calendar Js -->
<script src="js/fullcalendar.js"></script>

<!-- Tiny Scrollbar JS -->
<script src="js/tiny-scrollbar.js"></script>

<!-- custom Js -->
<script src="js/custom-index.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
