<?php include "./Database/Connection.php";?>
<?php include "./Extra/pagination.php";?>
 <?php error_reporting(1);
session_start();
 $pag = new pagination($data->Connect(),"select * from guard_info");
 $zone=$_GET['emp_site_name'];


if(isset($_GET['search'])){
  $month =$_GET['month'];
  $zone = $_GET['emp_site_name'];
  $query =" select emp_name,emp_zone,emp_designation,emp_pwages,emp_pdays,emp_addition from guard_info join (`$month`) on id=emp_id where emp_zone='$zone'";
$_SESSION['query'] = $query;
$_SESSION['month']=$month;
$_SESSION['emp_site_name']=$zone;

  //
}
else if(isset($_GET['sort']))
{
  $count =1;
$id =  $_GET['id'];

$sortbymonth =  $_GET['sortbymonth'];
$query ="";
$year = date('Y');
$month = 12;//date('m');


 while($count<$sortbymonth)
 {
   $date = join("-",array($year,$month));
  $query .="select emp_days,emp_name,emp_zone,emp_designation,emp_pwages,emp_pdays,emp_addition from guard_info join (`$date`) on id=emp_id where emp_id=$id union ";
   $count++;
$month--;
if(10>$month)
{
$month = "0". $month;
}
echo $month;

 }
 $date = join("-",array($year,$month));
echo $date;
    $query .="select emp_days,emp_name,emp_zone,emp_designation,emp_pwages,emp_pdays,emp_addition from guard_info join (`$date`) on id=emp_id where emp_id=$id ";


}
else {
  $query ="  select emp_days, emp_name,emp_zone,emp_designation,emp_pwages,emp_pdays,emp_addition from guard_info join (`2018-01`) on id=emp_id where emp_zone='$zone'";
  $_SESSION['query'] = $query;
  $_SESSION['month']='2018-01';
  $_SESSION['emp_site_name']=$zone;


  //
} //emp_name,emp_zone,emp_designation,emp_account_no,emp_esic_no,emp_pf_no,emp_rwages,emp_wdays,emp_odays,emp_owages


$result = mysqli_query($data->Connect(),$query);

if($result==null)
die("not obtained");
?>




<?php include "./Extra/Header.php" ;?>
          <div class="row-fluid">
            <div class="span12">
              <ul class="breadcrumb-beauty">
                <li>
                  <a href="Payment.php"><span class="fs1" aria-hidden="true" data-icon="&#xe002;"></span> Dashboard</a>
                </li>
                <li>
                  <a href="#"> Payment <?=$zone?></a>
                </li>
              </ul>
            </div>
          </div>

          <br>

          <!.. here Payment table ..>



<!.. basic table here ..>
<div class="row-fluid">


  <div class="span12">
    <div class="widget no-margin">
      <div class="widget-header">
        <div class="title">
          <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>Payment:<a href="Print/print.php?print=3" class="btn btn-info pull-right">print</a> <i class="fa fa-list-alt"></i>-
        </div>
      </div>
      <div class="widget-body">
        <div id="dt_example" class="example_alt_pagination">

          <div class='widget'>

          <div class='widget-header'>
          <div class='title '>Search  database for this month</div>
          </div>

          <div class='widget-body' style="position:relative;top:-22px;left:120px;">
                    <form action='' method='' class="span4 form-horizontal">
          <div class="control-group inverse input-append">
          <br>
          &nbsp;<input type='month' min="2018-01" max="2030-01" class='input-xlarge' name='month' placeholder='june-18'>
          <input type="hidden" name="emp_site_name" value="<?=$zone?>">
          <input type='submit' class='btn btn-inverse' name="search">Search</button>
          </div>

                      </form>
&nbsp;
                      <form action='' method='' class="span4 form-horizontal">
            <div class="control-group inverse input-append">
            <br>
            &nbsp;

            <input type="text" name="id" placeholder="Emp Id">
            <select name="sortbymonth" class="has primary">
              <option value="1">1 Month</option>
              <option value="3">3 Month</option>
              <option value="6">6 Month</option>
              <option value="12">12 Month</option>
            </select>
            <input type='submit' class='btn btn-info' name="sort" value="Sort">Sort</button>
            </div>

                        </form>



          </div>
        </div>

<?php include "Extra/viewModifiedPayment.php"?>

          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>








<!.. Pagination here        -->
<div class="row-fluid">
  <div class="span12">
    <div class="widget">

      <div class="widget-body">
        <div class="pagination no-margin">

        <ul>
          <?php
        $limits=    $pag->limitation();
        for($i=1;$i<=$limits;$i++)
        {
        ?>
            <li class="">
              <a href="?pagination=<?=$i?>&emp_site_name=<?=$zone?>">
                <?=$i?>
              </a>
            </li>
<?php }?>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>





        </div>
      </div>
    </div>
    <footer>
      <p class="copyright">&copy; Black Label Admin 2013</p>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Flot Payment -->

  </body>
</html>
