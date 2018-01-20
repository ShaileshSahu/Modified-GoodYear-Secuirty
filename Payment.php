<?php include "./Database/Connection.php";?>
<?php include "./Extra/pagination.php";?>
 <?php error_reporting(0);
 $pag = new pagination($data->Connect(),"select * from guard_info");
 $zone=$_GET['emp_site_name'];


if(isset($_GET['search'])){
  $month =$_GET['month'];
  $zone = $_GET['emp_site_name'];
  $query =" select uan_no,emp_name,emp_zone,emp_designation,emp_account_no,emp_esic_no,emp_pf_no,emp_rwages,emp_wdays,emp_odays,emp_owages from guard_info join (`$month`) on id=emp_id where emp_zone='$zone'";
  //
}
else {
  $query =" select uan_no,emp_name,emp_zone,emp_designation,emp_account_no,emp_esic_no,emp_pf_no,emp_rwages,emp_wdays,emp_odays,emp_owages from guard_info join (`2018-01`) on id=emp_id where emp_zone='$zone'";
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
          <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Basic Payment:<?="hello"?> <i class="fa fa-list-alt"></i>-
        </div>
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


          <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
            <thead>
              <tr>
                <th >Guard Id.</th>
                <th >ESI No.</th>
                <th >UAN no.</th>
                <th  class="hidden-phone">Namw Of Employees</th>
                <th class="hidden-phone">Month</th>
                <th  class="hidden-phone">Working Days</th>
                <th > ESI Daily Rate</th>
                <th > PF Daily Rate</th>
                <th >PF Basic</th>
                <th >MISC.ALL</th>
                <th >GROSS SAL</th>
                <th>PAID BASIC SAL</th>
                <th>PAID GROSS Sal</th>
                <th> PF 3.67%</th>
                <th>PF 8.33%</th>
                <th>PF 12%</th>
                <th>ESI 1.75%</th>
                <th>TOTAL DEDU</th>
                <th>NET SAL</th>
                <th>SIGN/THUMB</th>


              </tr>
            </thead>
                  <tbody>

                         <?php
                         $no=1;
                                 while($row = mysqli_fetch_array($result) )
{?>
                           <tr class="gradeX">
                          <td><?= $no?></td>
                          <td><?=$row['emp_esic_no'] ?></td>
                          <td><?=$row['uan_no']?></td>
                              <td><?= $row['emp_name']?></td>
                             <td ><?= $_GET['month']?></td>
                            <td><?= $row['emp_wdays']?></td>
                           <td><?= $row['emp_pf_no']?></td>
                           <td>26</td>

<?php

$rwages =$row['emp_rwages'];
$rdays =$row['emp_wdays'];
$odays= $row['emp_odays'];
$owages=$row['emp_owages'];
$total_payble = $rwages*$rdays;
$overtime_payble = $owages*$odays;
$complete_payble = $total_payble+$overtime_payble;
$pf_amount = round((10.6/100)*$complete_payble,2);
$esic_amount =round((1.74/100)*$complete_payble,2);
$total_deduction = $pf_amount+$esic_amount;
$payble = $complete_payble-$total_deduction;
?>
                           <td><?= $row['emp_rwages']?></td>
                           <td><?= $row['emp_wdays']?></td>
                           <td><?= $total_payble?></td>
                           <td><?=$row['emp_odays']?></td>
                           <td><?= $row['emp_owages']?></td>
                           <td><?= $overtime_payble?></td>
                           <td><?= $complete_payble?></td>
                           <td><?= $pf_amount?></td>
                           <td><?= $esic_amount?></td>
                           <td><?= $total_payble?></td>
                           <td><?= $payble?></td>
                           <td></td>

                 </tr>
                        <?php ++$no; }?>
              </tbody>
          </table>
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
