<?php include "./Extra/Header.php" ;?>
<?php include "./Database/Connection.php"?>
<style>

.span4
{
  position: relative;
  top:100px;
}
</style>
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
            <h1 class="center-align-text" style="color:rgba(255,255,255,.4);transform:translateY(-100px);font-size:3em;">Good Year Security</h1>
            <h1 class="center-align-text text-inverse" style="color:rgba(0,0,0,.6);">Login</h1>
            <form action="Choose.php" class="signin-wrapper" method="post">
              <div class="content">
                <input class="input input-block-level" placeholder="Username" type="text" value="" name='username'>
                <input class="input input-block-level" placeholder="Password" type="password" name='password'>
                <select class="input input-block-level success"  name="emp_site_name" >
                 <?php include "./Extra/Sitename_option.php"?>
                  </select>

               </div>


              <div class="actions">
                <input class="btn btn-info pull-right" type="submit" name="view">
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

    <!-- morris charts -->
    <script src="js/morris/morris.js"></script>
    <script src="js/morris/raphael-min.js"></script>

    <!-- Flot charts -->
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
