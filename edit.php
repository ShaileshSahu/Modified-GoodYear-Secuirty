<?php
 include("./Database/Connection.php");
session_start();
$emp_i=$_SESSION['emp_id'];
$con = $data->Connect();
if(isset($_POST['submit']))
{
  extract($_POST);
  $query ="update guard_info set emp_name='$name',emp_father_name='$father_name',emp_address='$address',emp_dob='$dob',emp_phn='$phn',uan_no='$uan',emp_account_no='$account',emp_pf_no='$pf',emp_esic_no='$esic',emp_zone='$zone',emp_police_no=$police where emp_id=$emp_i";
$result =mysqli_query($con,$query);
if($result==null)
{die("error are occured");
}
else {
unset($_SESSION['emp_id']);
header('location: viewSearch.php');
}

}
else {

}



?>
