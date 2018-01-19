<?php include "./Database/Connection.php";?>
 <?php
$query =$_GET["query"];

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
                  <a href="#"> Payment</a>
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
          <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Basic Payment: <i class="fa fa-list-alt"></i>-
        </div>
      </div>
      <div class="widget-body">
        <div id="dt_example" class="example_alt_pagination">
          <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
            <thead>
              <tr>
                <th >Guard ID.</th>
                <th >Name </th>

                <th> Site Name</th>
                <th>Designation</th>
                <th>Account No.</th>
                <th > ESIC No.</th>
                <th > PF NO. </th>
                <th >Workable Days</th>
                <th >Rate of wages</th>
                <th >Total Attendace</th>
                <th>Wages Payable </th>
                <th>OT Attendance</th>
                <th>OT Rate per Day</th>
                <th>OT Amount</th>
                <th>Total Amount</th>
                <th>P.F</th>
                <th>ESIC </th>
                <th>Total deduction </th>
                <th> Net Payable</th>
                <th>Sign Of Employee</th>

              </tr>
            </thead>
                              <tbody>

                         <?php while($row = mysqli_fetch_array($result) )
{?>
                           <tr class="gradeX">
                          <td><?= $row['emp_id']?></td>
                          <td><?=$row['emp_name'] ?></td>
                          <td><?=$row['site_name']?></td>
                              <td><?= $row['designation']?></td>
                             <td ><?= $row['account_no']?></td>
                            <td><?= $row['emp_esic']?></td>
                           <td><?= $row['pf_no']?></td>
                           <td>26</td>

                           <td><?= $row['rate_wages']?></td>
                           <td><?= $row['total_att']?></td>
                           <td><?= $row['wages_payable']?></td>
                           <td><?= $row['overtime_attend']?></td>
                           <td><?= $row['ot_rate']?></td>
                           <td><?= $row['ot_amt']?></td>
                           <td><?= $row['total_amt']?></td>
                           <td><?= $row['pf']?></td>
                           <td><?= $row['esic']?></td>
                           <td><?= $row['total_ded']?></td>
                           <td><?= $row['net_pay']?></td>
                           <td></td>
                        <td></td>

                        </tr>
                        <?php }?>
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
            <li class="disabled">
              <a href="#">
                Prev
              </a>
            </li>
            <li class="active">
              <a href="#">
                1
              </a>
            </li>
            <li>
              <a href="#">
                2
              </a>
            </li>
            <li>
              <a href="#">
                3
              </a>
            </li>
            <li>
              <a href="#">
                4
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                5
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                6
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                7
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                8
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                9
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                10
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                11
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                12
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                Next
              </a>
            </li>
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
