
          <table class="table table-striped table-hover table-bordered pull-left" id="data-table">
            <thead>
              <tr>
                <th>Guard ID.</th>
                <th>Name </th>

                <th> Site Name</th>
                <th>Designation</th>
                <th>Account No.</th>
                <th> ESIC No.</th>
                <th> PF NO. </th>
                <th>Workable Days</th>
                <th>Rate of wages</th>
                <th>Total Attendace</th>
                <th>Wages Payable </th>
                <th>OT Attend</th>
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

                         <?php
                         $no=1;
                                 while($row = mysqli_fetch_array($result) )
{?>
                           <tr class="gradeX">
                          <td><?= $no?></td>
                          <td><?=$row['emp_name'] ?></td>
                          <td><?=$row['emp_zone']?></td>
                              <td><?= $row['emp_designation']?></td>
                             <td ><?= $row['emp_account_no']?></td>
                            <td><?= $row['emp_esic_no']?></td>
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
