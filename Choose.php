<style>
  table
    {
        font-size: 8px;
    }

    .master-login
    {
        position: relative;
        top:115px;
    }
  </style>
<?php include "./Extra/Header.php"?>
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

   <?php
        if(isset($_POST["view"]))

        {

$username =      $_POST['username'];
$password =      $_POST['password'];

      if($username==$password)
      {
$emp_site_name =      $_POST['emp_site_name'];

      }
else {

  echo "username/password is not correct try again.........";
}

}?>



        <div class="container">

          <h3 class="text-center text-info" style="position:relative;left:370px;padding-bottom:60px;">Data Can be viewed by following:-</h3>
           <div class="span2"></div>
             <div class="span3"
            >

            <a href="Basic.php?emp_site_name=<?=$emp_site_name?>" class="btn btn-info btn-large">Basic1</a></div>


                  <div class="span3">
                    <a href="Payment.php?emp_site_name=<?=$emp_site_name;?>" class="btn btn-primary btn-large">Basic2</a></div>

                    <div class="span3">
                      <a href="ModifiedPayment.php?emp_site_name=<?=$emp_site_name;?>" class="btn btn-danger btn-large">Payment</a></div>
        </div>



</div>







      <?php
        ?>








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
      </div>
    </div>
  </div>
</body>
</html>
