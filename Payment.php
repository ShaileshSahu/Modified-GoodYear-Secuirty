<?php include "./Database/Connection.php";?>
 <?php
$query =$_GET["query"];
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
                          <th>SIGNATURE/THUMB</th>
                          <th>ACTION</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr class="gradeX">
                          <td> <?php echo $_GET['query'];?></td>
                          <td>1012655665</td>
                          <td>10005664565</td>
                          <td>SHAILENDER SHARMA</td>
                          <td >26</td>
                          <td >0</td>
                          <td>565</td>
                          <td>565</td>
                          <td>14698</td>
                          <td>0</td>
                          <td>14698</td>
                          <td>0</td>
                          <td>14698</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>

                          <td class="hidden-ph">

                            <a href="#accSettings1" role="button" class="btn btn-small btn-primary hidden-tablet hidden-phone" data-toggle="modal" data-original-title="">
                              edit
                            </a>
                              <div id="accSettings1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                  ×
                                </button>
                                <h4 id="myModalLabel1">
                                  Edit client details
                                </h4>
                              </div>
                              <div class="modal-Regsbody">
                                <div class="row-fluid">
                                  <div class="span4">
                                    <input type="text" class="span12" placeholder="ESIC no">
                                  </div>
                                  <div class="span4">
                                    <input type="text" class="span12" placeholder="Account no.">
                                  </div>
                                  <div class="span4">
                                    <input type="text" class="span12" placeholder="Zone">
                                  </div>
                                </div>

                              </div>
                              <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">
                                  Close
                                </button>
                                <button class="btn btn-primary">
                                  Save changes
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>


<!.. basic table here ..>
<div class="row-fluid">
  <div class="span12">
    <div class="widget no-margin">
      <div class="widget-header">
        <div class="title">
          <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Basic Payment:-
        </div>
      </div>
      <div class="widget-body">
        <div id="dt_example" class="example_alt_pagination">
          <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
            <thead>
              <tr>
                <th >Guard ID.</th>
                <th >Name </th>
                <th >Father Name</th>
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
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="gradeX">
                <td>bablu rajak</td>
                <td>Ashok Kumar</td>
                <td>Sundar -vihar d 182</td>
                <td></td>
                <td class="hidden-phone">s/g</td>
                <td class="hidden-phone">456654565</td>
                <td>96502266</td>
                <td>5988866645</td>
                <td>89898989</td>
                <td>Security Guard</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="hidden-ph">
                  <a href="#accSettings1" role="button" class="btn btn-small btn-primary hidden-tablet hidden-phone" data-toggle="modal" data-original-title="">
                    edit
                  </a>
                    <div id="accSettings1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                      </button>
                      <h4 id="myModalLabel1">
                        Edit client details
                      </h4>
                    </div>
                    <div class="modal-body">
                      <div class="row-fluid">
                        <div class="span4">
                          <input type="text" class="span12" placeholder="Frist name">
                        </div>
                        <div class="span4">
                          <input type="text" class="span12" placeholder="Last name">
                        </div>
                        <div class="span4">
                          <input type="text" class="span12" placeholder="Account no.">
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="span4">
                          <input type="text" class="span12" placeholder="ESIC">
                        </div>
                        <div class="span8">
                          <input type="text" class="span12" placeholder="Address">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn" data-dismiss="modal" aria-hidden="true">
                        Close
                      </button>
                      <button class="btn btn-primary">
                        Save changes
                      </button>
                    </div>
                  </div>
                </td>
              </tr>

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
