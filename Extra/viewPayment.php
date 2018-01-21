<table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
  <thead>
    <tr>
      <th >Guard Id.</th>
      <th >ESI No.</th>
      <th >UAN no.</th>
      <th  class="hidden-phone">Name Of Employees</th>
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
