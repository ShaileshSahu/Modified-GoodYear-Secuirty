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


          <div class="row-fluid">
            <div class="span12">
              <div class="widget no-margin">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>Payment Slip:-
                  </div>
                </div>
                <div class="widget-body">
                  <div id="dt_example" class="example_alt_pagination">
                    <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
                      <thead>


                           <tr>
                          <th >Guard Id.</th>
                          <th >ESI No.</th>
                          <th >UAN no.</th>
                          <th  >Name Of Employees</th>
                          <th >Month</th>
                          <th  >Working Days</th>
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
                          <th>SIGNATURE/THUMB</th>


                        </tr>
                      </thead>
                      <tbody>

                         <?php while($row = mysqli_fetch_array($result) )
{?>
                           <tr class="gradeX">
                          <td><?= $row['emp_id']?></td>
                          <td><?=$row['emp_esi'] ?></td>
                          <td><?=$row['emp_uan']?></td>
                          <td><?= $row['emp_name']?></td>
                          <td>26</td>
                          <td ><?= $row['working_days']?></td>
                          <td><?= $row['esi_daily_rate']?></td>
                           <td><?= $row['pf_daily_rate']?></td>
                           <td><?= $row['pf_basic']?></td>
                           <td><?= $row['misc_all']?></td>
                           <td><?= $row['gross_sal']?></td>
                           <td><?= $row['paid_basic_sal']?></td>
                           <td><?= $row['paid_gross_sal']?></td>
                           <td><?= $row['pf_3.67']?></td>
                           <td><?= $row['pf_8.33']?></td>
                           <td><?= $row['pf_12']?></td>
                           <td><?= $row['esi_1.75']?></td>
                           <td><?= $row['total_dedu']?></td>
                           <td><?= $row['net_sal']?></td>
                        <td></td>

                        </tr>
                        <?php }?>

                      </tbody>
                    </table>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>


<!.. basic table here ..>

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
