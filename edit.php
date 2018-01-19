<?php
 include("./Database/Connection.php");

$con = $data->Connect();

$nm = $_REQUEST['nm'];
echo "we are here";
if(isset($_POST['submit']))
{
  extract($_POST);

      $query = "UPDATE `guard_info` SET `emp_name`='$name','emp_dob`='$dob',`emp_account_no`='$account',`emp_esic_no`='$esic',`emp_pf_no`='$pf',`emp_gender`='$gender',`uan_no`='$uan',`emp_address`='$address',`emp_phn`='$phn','emp_zone`='$zone' WHERE emp_id = '$nm'";
            $res = mysqli_query($con, $query);

  if($zone == 'west'){



      $query2 = " UPDATE `basic_slip_west` SET `emp_name`='$name',`account_no`='$account',`emp_esic`='$esic',`pf_no`='$pf' WHERE emp_id = '$nm'";

      $res = mysqli_query($con , $query2);

      $query3 = " UPDATE `pay_slip_west` SET `emp_esi`='$esic',`emp_uan`='$uan',`emp_name`='$name' WHERE emp_id = '$nm'";
      $res = mysqli_query($con , $query3);

      echo "done updated";

  }
else if($zone == 'east'){

        $query2 = " UPDATE `basic_slip_east` SET `emp_name`=[value-2],`account_no`='$account',`emp_esic`='$esic',`pf_no`='$pf' WHERE emp_id = '$nm'";

        $res = mysqli_query($con , $query2);

        $query3 = " UPDATE `pay_slip_east` SET `emp_esi`='$esic',`emp_uan`='$uan',`emp_name`='$name' WHERE emp_id = '$nm'";
        $res = mysqli_query($con , $query3);


}
else if($zone = 'north'){


        $query2 = " UPDATE `basic_slip_north` SET `emp_name`=[value-2],`account_no`='$account',`emp_esic`='$esic',`pf_no`='$pf' WHERE emp_id = '$nm'";

        $res = mysqli_query($con,$query2);

        $query3 = " UPDATE `pay_slip_north` SET `emp_esi`='$esic',`emp_uan`='$uan',`emp_name`='$name' WHERE emp_id = '$nm'";
        $res = mysqli_query($con , $query3);






}


else{



        $query2 = " UPDATE `basic_slip_south` SET `emp_name`=[value-2],`account_no`='$account',`emp_esic`='$esic',`pf_no`='$pf' WHERE emp_id = '$nm'";

        $res = mysqli_query($con , $query2);

        $query3 = " UPDATE `pay_slip_south` SET `emp_esi`='$esic',`emp_uan`='$uan',`emp_name`='$name' WHERE emp_id = '$nm'";
        $res = mysqli_query($con , $query3);







}


$ink = "viewSearch.php";
 header( 'location : '.$link);


}
else
{
 echo "not done";
header( 'location : '. "viewSearch.php");




}



?>
