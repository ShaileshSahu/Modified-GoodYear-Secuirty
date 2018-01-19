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
          $basic ='select * from basic_slip_';
          $payment_slip ='select * from pay_slip_';
        global    $basic_zone;$payment_zone;
$username =      $_POST['username'];
$password =      $_POST['password'];
$field =      $_POST['field'];
      if($username=='north'&&$password=='north')
      {
          if($field =='north')
          {
             $basic_zone ='north';
              $payment_zone='north';
          }
      }

            else
            if($username=='south'&&$password=='south')
      {
          if($field =='south')
          {
             $basic_zone ='south';
              $payment_zone='south';
          }
      }

            else
            if($username=='east'&&$password=='east')
      {
          if($field =='east')
          {
             $basic_zone ='east';
              $payment_zone='east';
          }
      }


            else
            if($username=='west'&&$password=='west')
      {
          if($field =='west')
          {
             $basic_zone ='west';
              $payment_zone='west';
          }
      }


            else
            {
                 $basic_zone ='';
              $payment_zone='';
            }

          $basic = $basic.$basic_zone;
              $payment_slip = $payment_slip.$payment_zone;



        ?>



        <div class="container">

          <h3 class="text-center text-info" style="position:relative;left:370px;padding-bottom:60px;">Data Can be viewed by following:-</h3>
           <div class="span3"></div>
             <div class="span4"
            >


                  <a href="Basic.php?query=<?=$basic;?>" class="btn btn-info btn-large">Basic</a></div>

                  <div class="span4">
                    <a href="Payment_slip.php?query=<?=$payment_slip;?>" class="btn btn-danger btn-large">Payment</a></div>

        </div>







      <?php
        }?>








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
