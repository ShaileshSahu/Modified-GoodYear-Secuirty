<?php include("./Database/Connection.php");

 if(isset($_POST['submit']))
 {
   $nm = $_REQUEST['nm'];
   $con = $data->connect();
   extract($_POST);
   $empid    = $nm;
   echo "here is the value of id".$empid;
   $query  = "select * from guard_info where emp_id = '$nm'";
   $result = mysqli_query($con, $query);
   $ginfo  = mysqli_fetch_array($result);

    //for payment tables
    $name =  $ginfo['emp_name'];
    $esi =  $ginfo['emp_esic_no'];
    $uan =  $ginfo['uan_no'];
    $name = $ginfo['emp_name'];
    $desg = $ginfo['emp_designation'];
    $acc  = $ginfo['emp_account_no'];
    echo "id is ".$nm;
    echo "name is ".$name;



    //for basic tables





    if($zone == "east")
    {
        //echo $empid;
          $query2 ="INSERT INTO `basic_slip_east` (`emp_id`, `emp_name`, `site_name`, `designation`, `account_no`, `emp_esic`, `pf_no`, `work_days`, `rate_wages`, `total_att`, `wages_payable`, `overtime_attend`, `ot_rate`, `ot_amt`, `total_amt`, `pf`, `esic`, `total_ded`, `net_pay`, `sign`) VALUES('$empid','$name','null','$desg'
          ,'$acc','$esi','1213','26','250','$wdays','250','$overtime','250','123','132','123','213','123','132', 'hellothere')";

          $result1 = mysqli_query($con, $query2);

          $query3 =" INSERT INTO `pay_slip_east`(`emp_id`, `emp_esi`, `emp_uan`, `emp_name`, `total_days`, `working_days`, `esi_daily_rate`, `pf_daily_rate`, `pf_basic`, `misc_all`, `gross_sal`, `paid_basic_sal`, `paid_gross_sal`, `pf_3.67`, `pf_8.33`, `pf_12`, `esi_1.75`, `total_dedu`, `net_sal`) VALUES ('$empid','$esi','$uan','$name',26.66,'$wdays',556,556,556,488,45,555,887,55,55,787,555,88,899)" ;

          $result2 = mysqli_query($con, $query3);







    }
    else if($zone == "west"){
      $query4 ="INSERT INTO `basic_slip_west`(`emp_id`, `emp_name`, `site_name`, `designation`, `account_no`, `emp_esic`, `pf_no`, `work_days`, `rate_wages`, `total_att`, `wages_payable`, `overtime_attend`, `ot_rate`, `ot_amt`, `total_amt`, `pf`, `esic`, `total_ded`, `net_pay`, `sign`) VALUES('$empid','$name','null','$desg'
      ,'$acc','$esi','1213','26','250','$wdays','250','$overtime','250','123','132','123','213','123','132', 'hellothere')";

      $result3 = mysqli_query($con, $query4);
      echo "done";
      $query5 =" INSERT INTO `pay_slip_west`(`emp_id`, `emp_esi`, `emp_uan`, `emp_name`, `total_days`, `working_days`, `esi_daily_rate`, `pf_daily_rate`, `pf_basic`, `misc_all`, `gross_sal`, `paid_basic_sal`, `paid_gross_sal`, `pf_3.67`, `pf_8.33`, `pf_12`, `esi_1.75`, `total_dedu`, `net_sal`) VALUES ('$empid','$esi','$uan','$name',26.66,'$wdays',556,556,556,488,45,555,887,55,55,787,555,88,899)" ;

      $result4 = mysqli_query($con, $query5);

    }
    else if($zone == "south")
    {
      $query6 ="INSERT INTO `basic_slip_south` (`emp_id`, `emp_name`, `site_name`, `designation`, `account_no`, `emp_esic`, `pf_no`, `work_days`, `rate_wages`, `total_att`, `wages_payable`, `overtime_attend`, `ot_rate`, `ot_amt`, `total_amt`, `pf`, `esic`, `total_ded`, `net_pay`, `sign`) VALUES('$empid','$name','null','$desg'
      ,'$acc','$esi','1213','26','250','$wdays','250','$overtime','250','123','132','123','213','123','132', 'hellothere')";

      $result5 = mysqli_query($con,$query6);

      $query7 =" INSERT INTO `pay_slip_south`(`emp_id`, `emp_esi`, `emp_uan`, `emp_name`, `total_days`, `working_days`, `esi_daily_rate`, `pf_daily_rate`, `pf_basic`, `misc_all`, `gross_sal`, `paid_basic_sal`, `paid_gross_sal`, `pf_3.67`, `pf_8.33`, `pf_12`, `esi_1.75`, `total_dedu`, `net_sal`) VALUES ('$empid','$esi','$uan','$name',26.66,'$wdays',556,556,556,488,45,555,887,55,55,787,555,88,899)" ;

      $result6 = mysqli_query($con,$query7);
    }

    else{

      $query8 ="INSERT INTO `basic_slip_north` (`emp_id`, `emp_name`, `site_name`, `designation`, `account_no`, `emp_esic`, `pf_no`, `work_days`, `rate_wages`, `total_att`, `wages_payable`, `overtime_attend`, `ot_rate`, `ot_amt`, `total_amt`, `pf`, `esic`, `total_ded`, `net_pay`, `sign`) VALUES('$empid','$name','null','$desg'
      ,'$acc','$esi','1213','26','250','$wdays','250','$overtime','250','123','132','123','213','123','132', 'hellothere')";

      $result7 = mysqli_query($con,$query8);

      $query9 =" INSERT INTO `pay_slip_north`(`emp_id`, `emp_esi`, `emp_uan`, `emp_name`, `total_days`, `working_days`, `esi_daily_rate`, `pf_daily_rate`, `pf_basic`, `misc_all`, `gross_sal`, `paid_basic_sal`, `paid_gross_sal`, `pf_3.67`, `pf_8.33`, `pf_12`, `esi_1.75`, `total_dedu`, `net_sal`) VALUES ('$empid','$esi','$uan','$name',26.66,'$wdays',556,556,556,488,45,555,887,55,55,787,555,88,899)" ;

      $result8= mysqli_query($con,$query9);

    }


    $newURL= "viewSearch.php";

    header('Location: '.$newURL);




 }
else{

  $newURL= "viewSearch.php";

  header('Location: '.$newURL);




}


?>
