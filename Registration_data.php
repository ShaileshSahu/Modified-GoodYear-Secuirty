<?php include "./Database/Connection.php";
 $connection = $data->connect();
    ?>



 <?php
if(isset($_POST["register"]))
{

    //$emp_id =  $_POST[emp_id];
    $emp_name =  $_POST['emp_name'];
    $emp_father_name=$_POST['emp_father_name'];
    $emp_dob =  $_POST['emp_dob'];
    $emp_account_no =  $_POST['emp_account_no'];
    $emp_esic_no =  $_POST['emp_esic_no'];
    $emp_pf_no =  $_POST['emp_pf_no'];
    $emp_gender =  $_POST['emp_gender'];
    $emp_designation =  $_POST['emp_des'];
    $emp_uan_no =  $_POST['uan_no'];

    $emp_phn =  $_POST['emp_phn'];
    $emp_image = null;
    $emp_site_name= $_POST['emp_site_name'];
    $zip = $_POST['zip'];
    $city = $_POST['city'];
  $emp_address =  $_POST['emp_address'].",".$city.",".$zip;

   // echo $emp_address;




      $query =
"INSERT INTO `guard_info` (`emp_name`, `emp_father_name`, `emp_dob`, `emp_account_no`, `emp_esic_no`, `emp_pf_no`, `emp_gender`, `emp_designation`, `uan_no`, `emp_address`, `emp_phn`, `emp_image`, `emp_zone`) VALUES ( '$emp_name', '$emp_father_name', '$emp_dob', '$emp_account_no', '$emp_esic_no', '$emp_pf_no', '$emp_gender', '$emp_designation', '$emp_uan_no', '$emp_address', '$emp_phn', 'null','$emp_site_name')";



    $result =   mysqli_query($connection,$query);
    if($result==null)
    {
        echo "hello";
    }
  else
  {
      echo "Registration has been done";
        header('Location: viewSearch.php');
  }


    //echo $emp_gender;
}
else{
  echo "Details not correct";



}


?>
