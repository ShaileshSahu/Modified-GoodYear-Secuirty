<table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
  <thead>
    <tr>
      <th >Guard S.No</th>
      <th  class="hidden-phone">Name Of Employees</th>
      <th  class="hidden-phone">Site Name</th>
      <th > Desingation </th>
      <th >Rate</th>
      <th >Days</th>
      <th >Attendence</th>
      <th >Amount</th>
      <th>Net. Amount</th>
      <th>Security Deposit</th>
      <th>Deduction</th>
      <th>Advance Payment</th>
      <th>OT. Deduction</th>
      <th>Net Amount</th>
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
                    <td><?= $row['emp_name']?></td>

                  <td><?= $row['emp_zone']?></td>
                 <td><?= $row['emp_designation']?></td>

<?php
$split =explode("-",$month);
$day =cal_days_in_month(CAL_GREGORIAN,$split[1],$split[0]);
     $rate =$row['emp_pwages']*$day;
            $amount=$row['emp_pdays']*$row['emp_pwages'];
$additonal = $row["emp_addition"];
$net = $amount-$additonal;
 ?>

                 <td><?=$rate ?></td>
                 <td><?=$day?></td>
                 <td><?= $row['emp_pdays']?></td>
                 <td><?=$amount?></td>
                 <td><?=$amount?></td>
                 <td></td>
                 <td><?= $row['emp_addition']?></td>
<td>0</td>
<td></td>
                 <td><?=$net?></td>

       </tr>
              <?php ++$no; }?>
    </tbody>
</table>
