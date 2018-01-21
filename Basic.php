<?php include "./Database/Connection.php";?>
<?php include "./Extra/pagination.php";?>
 <?php error_reporting(0);
 session_start();
 $pag = new pagination($data->Connect(),"select * from guard_info");
 $zone=$_GET['emp_site_name'];

$_SESSION['emp_site_name'] = $_GET['emp_site_name'];
if(isset($_GET['search'])){
  $month =$_GET['month'];
  $zone = $_GET['emp_site_name'];
$_SESSION['emp_site_name']=$zone;
$_SESSION['month'] =$month;
  $query =" select emp_name,emp_zone,emp_designation,emp_account_no,emp_esic_no,emp_pf_no,emp_rwages,emp_wdays,emp_odays,emp_owages from guard_info join (`$month`) on id=emp_id where emp_zone='$zone'";
$_SESSION['query']=$query;
}
else {
  $SESSION['month'] ="2018-01"; 
  $query ="select emp_name,emp_zone,emp_designation,emp_account_no,emp_esic_no,emp_pf_no,emp_rwages,emp_wdays,emp_odays,emp_owages from guard_info join (`2018-01`) on id=emp_id where emp_zone='$zone'";
$SESSION['query']=$query;

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
          <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Basic Payment:<?="hello"?> <i class="fa fa-list-alt"></i>-
<a href="./Print/print.php?print=2" class="btn btn-small btn-info pull-right">print</a> </div>
      </div>
      <div class="widget-body">
        <div id="dt_example" class="example_alt_pagination">

          <div class='widget'>

          <div class='widget-header'>
          <div class='title '>Search  database for this month</div>
          </div>

          <div class='widget-body'>
                    <form action='' method='' class="form-horizontal">
          <div class="control-group inverse input-append">
          <br>
          &nbsp;<input type='month' min="2018-01" max="2030-01" class='input-xlarge' name='month' placeholder='june-18'>
          <input type="hidden" name="emp_site_name" value="<?=$zone?>">
          <input type='submit' class='btn btn-inverse' name="search">Search</button>
          </div>

                      </form>

          </div>
          </div>
<?php include "Extra/viewBasic.php"?>

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
