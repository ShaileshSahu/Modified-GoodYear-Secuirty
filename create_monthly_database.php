

<?php include "./Extra/Header.php" ;?>
<?php include "./Database/Connection.php";?>
<?php
if(isset($_GET['create']))
{
  $month =$_GET['month'];
  //$query ="create table ".$month."(id int,emp_wdays int,emp_rwages float,emp_odays int,emp_owages float)";
  $query ="CREATE TABLE `security`.`$month` ( `id` INT NOT NULL , `emp_wdays` INT NOT NULL , `emp_rwages` DOUBLE NOT NULL , `emp_odays` INT NOT NULL , `emp_owages` DOUBLE NOT NULL , `emp_pdays` INT NOT NULL , `emp_pwages` DOUBLE NOT NULL , `emp_addition` DOUBLE NOT NULL , `emp_days` INT NOT NULL,UNIQUE `id` (`id`))";
$result =  mysqli_query($data->Connect(),$query);
  if($result==null)
  {
//    die("<hr><br><h1 style='text-align:center' class='text text-success'>It is already exist</h1>");
die("it already exist");
  }
  else {
    echo "Monthly database has been created";
  }
}


if(isset($_GET['delete']))
{
  $month =$_GET['month'];
  //$query ="create table ".$month."(id int,emp_wdays int,emp_rwages float,emp_odays int,emp_owages float)";
  $query ="drop table `security`.`$month` ";
$result =  mysqli_query($data->Connect(),$query);
  if($result==null)
  {
//    die("<hr><br><h1 style='text-align:center' class='text text-success'>It is already exist</h1>");
die("Not existed");
  }
  else {
    echo "Deleted";
  }
}


?>

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

<h3 class='text-warning'style='opacity:.5;text-align:center'>Create/Delete for this month</h3>
          <hr>
          <a href="create_monthly_database.php" class="btn btn-success">Reset</a>
<div class='row-fluid'>
<div class='span2'></div>
<div class='span4 '>
  <div class='widget'>

  <div class='widget-header'>
<div class='title '>Create database for this month</div>
  </div>

  <div class='widget-body'>
            <form action='' method='get' class="form-horizontal">
<div class="control-group warning input-append">
<br>
&nbsp;<input type='month' min="2018-01" max="2030-01" class='input-xlarge' name='month' placeholder='june-18'>
<button type='submit' class='btn btn-warning' name='create'>create</button>
</div>

              </form>

</div>
</div>
</div>

<div class='span4 '>
  <div class='widget'>

  <div class='widget-header'>
<div class='title '>Delete  database for this month</div>
  </div>

  <div class='widget-body'>
            <form action='' method='get' class="form-horizontal">
<div class="control-group info input-append">
<br>
&nbsp;<input type='month' min="2018-01" max="2030-01" class='input-xlarge' name='month' placeholder='june-18'>
<button type='submit' class='btn btn-info' name='delete'>delete</button>
</div>

              </form>

</div>
</div>  </div>
<div class='span2'></div>
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
