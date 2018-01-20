
<?php

include "./Database/Connection.php";

$id = $_GET['emp_id'];

$msg = null;
$query = "Select * from discarded ";

$res1 = mysqli_query($data->Connect() , $query);


if ($res1 == null) {

      $query = "Create table discarded like guard_info";
      $res = mysqli_query($data->Connect(), $query);

      $msg = "table Created";

}


//$query1  = "INSERT INTO `discarded`(`emp_id`, `emp_name`, `emp_father_name`, `emp_dob`, `emp_account_no`, `emp_esic_no`, `emp_pf_no`, `emp_gender`, `emp_designation`, `uan_no`, `emp_address`, `emp_phn`, `emp_image`, `emp_zone`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14])";

$query1 = "insert into  discarded Select * from guard_info where emp_id = '$id'";
$res = mysqli_query($data-> Connect() , $query1);

 echo "done updating";



$query2 = "Delete  from guard_info  where  emp_id ='$id'";
  mysqli_query($data->Connect(), $query2);

header('location: Master.php');

// echo "deleting";
?>
