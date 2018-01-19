<?php include("./Database/Connection.php"); ?>
    </script>

    <style>
      table
        {
            font-size: 8px;
        }
      </style>
      <?php include "./Extra/Header.php" ;?>

          <div class="ses-fluid">
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

   <section class="main-container">
       <h3 class="pull-right text-info" style="opacity:.24;">Master Table</h3>
       <br>   <br><hr>

       <div class="span12">
           <div class="widget">
               <div class="widget-header">
                   <div class="title">
                      <b class="text-success">Search</b>
                   </div>

               </div>
               <div class="widget-body">
                 <form action="master.php" class="form form-horizontal" method="post">
                      <div class="widget-body">
                     <div class="input-append">
                       <input class="span4 form-control" id="appendedInputButtons" type="text" name="info"  placeholder="Search by name, esic, month.........">
                       <select class=" controls form-control span-2" name="field"><option>Select</option><option value="month">By Month</option><option value ="esic">By Esic Number</option>
                       <option value="name">By Name</option>
                       </select>
                       <select class=" controls form-control span-2" name="z"><option>Zone</option><option value="south">South</option><option value ="east">East</option>
                       <option value="west">West</option> <option value="north">North </option>
                       </select>
                       <input class="btn btn-sm btn-inverse span-2" type="submit" name="search" value="Search" />

                     </div>
                   </div>

                 </form>
               </div>




           </div>

       </div>

       <table class="table table-striped table-hover table-bordered ">

           <thead>
               <tr>
                    <th>S.no</th>
                <th>UAN</th>
                <th>Employe</th>
                <th>Father's Name</th>
                <th>Designation</th>
                <th>Account/Cheque No.</th>
                <th>PF No.</th>
                <th>Attendence</th>
                <th>Rate of Wages</th>
                <th>Overtime Rate</th>
                <th>Overtime Attendence</th>
                <th>ESIC</th>
                <th>Site Name</th>
                <th>Payable Wages</th>
                <th>Overtime Amount</th>
                <th>Total Amount</th>
                <th>EPF</th>
                <th>EPSIC AMOUNT</th>
                <th>TOTAL DEDUCTION</th>
                <th>TOTAL Payble</th>
                <th>Signature</th>
                <th>Update</th>
                <th>Delete</th>
               </tr>

           </thead>

           <tbody>



               <?php
               if(isset($_POST['search']))

                {


                  $info = $_POST['info'];
                  $z =$_POST['z'];
                //  $z = mysql_real_escape_string($z);
                  echo $z;
                  if($_POST['field'] =='name')
                  {
                  $query= "select * from  guard_info  join  (Select * from basic_slip_$z where emp_name like '%$info%')  as a on guard_info.emp_id = a.emp_id ";

                  }
                  else if( $_POST['field'] =='esic')
                  {
                      $query = "select * from  guard_info join  (Select * from basic_slip_" .$z."where emp_esic_no like '%$info%') as a on guard_info.emp_id = a.emp_id";
                  }else
                  {
                      $query = "Select * from guard_info join (Select * from basic_slip_".$z."where emp_zone like '%$info%') as a on guard_info.emp_id = a.emp_id";
                  }


                  $result = mysqli_query($data->connect(),$query);
                //  $n =  mysqli_num_rows($result);
                  if($result == null)
                    {

                        ?>  <h3 style="transform:translate(-800px, 250px);"> <?php  echo("No Matching Content Found"); ?> </h3>
                        <?php
                    }


                else{
                      while($ses = mysqli_fetch_array($result))
                  {
                      ?>
                         <tr>
                      <td> <?= $ses['uan_no']; ?> </td>
                      <td> <?= $ses['emp_name']; ?> </td>
                      <td> <?= $ses['emp_father_name']; ?> </td>
                      <td> <?= $ses['emp_designation']; ?> </td>
                      <td> <?= $ses['emp_account_no']; ?> </td>
                      <td> <?= $ses['emp_pf_no']; ?> </td>
                      <td> <?= $ses['total_att']; ?> </td>
                      <td> <?= $ses['rate_wages']; ?> </td>
                      <td> <?= $ses['ot_rate']; ?> </td>
                      <td> <?= $ses['overtime_attend']; ?> </td>
                      <td> <?= $ses['emp_esic']; ?> </td>
                      <td> <?= $ses['site_name']; ?> </td>
                      <td> <?= $ses['wages_payable']; ?> </td>
                      <td> <?= $ses['ot_amt']; ?> </td>
                      <td> <?= $ses['total_amt']; ?> </td>
                      <td> <?= $ses['pf']; ?> </td>
                      <td> <?= $ses['total_ded']; ?> </td>
                      <td> <?= $ses['net_pay']; ?> </td>

                    </tr>

<?php
                }

               }
}
               else{
                 $no =1 ;

                $query2 = "select  * from guard_info join basic_slip_east on guard_info.emp_id = basic_slip_east.emp_id union
                select  * from guard_info join basic_slip_west on guard_info.emp_id = basic_slip_west.emp_id   union
                select  * from guard_info join basic_slip_south on guard_info.emp_id = basic_slip_south.emp_id union
                select  * from guard_info join basic_slip_north on guard_info.emp_id = basic_slip_north.emp_id" ;

                      $res = mysqli_query($data->connect(),$query2);
                      echo "In else";

                 while($ses = mysqli_fetch_array($res))
             {
                 ?>
                 <tr>
                  <td> <?= $no; ?>
                 <td> <?= $ses['uan_no']; ?> </td>
                 <td> <?= $ses['emp_name']; ?> </td>
                 <td> <?= $ses['emp_father_name']; ?> </td>
                 <td> <?= $ses['emp_designation']; ?> </td>
                 <td> <?= $ses['emp_account_no']; ?> </td>
                 <td> <?= $ses['emp_pf_no']; ?> </td>
                 <td> <?= $ses['total_att']; ?> </td>
                 <td> <?= $ses['rate_wages']; ?> </td>
                 <td> <?= $ses['ot_rate']; ?> </td>
                 <td> <?= $ses['overtime_attend']; ?> </td>
                 <td> <?= $ses['emp_esic']; ?> </td>
                 <td> <?= $ses['site_name']; ?> </td>
                 <td> <?= $ses['wages_payable']; ?> </td>
                 <td> <?= $ses['ot_amt']; ?> </td>
                 <td> <?= $ses['total_amt']; ?> </td>
                 <td> <?= $ses['pf']; ?> </td>
                 <td> <?= $ses['total_ded']; ?> </td>
                 <td> <?= $ses['net_pay']; ?> </td>
                    </tr>
<?php
  $no++;
           }







                }


                  ?>





           </tbody>

       </table>




   </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-ui-1.8.23.custom.min.js"></script>

  </body>
</html>
