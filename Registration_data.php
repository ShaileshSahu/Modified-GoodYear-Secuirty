<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php include "./Database/Connection.php";
session_start();
$connection = $data->connect();

?>



<?php
if(isset($_POST["register"]))
{

  //$emp_id =  $_POST[emp_id];
  $emp_name =  $_POST['emp_name'];
  $emp_father_name=$_POST['emp_father_name'];
  $emp_dob =  $_POST['emp_dob'];
  $emp_gender =  $_POST['emp_gender'];
  $emp_designation =  $_POST['emp_des'];

$emp_uan_no= $_POST['uan_no'];
$emp_account_no =  $_POST['emp_account_no'];
$emp_esic_no =  $_POST['emp_esic_no'];
$emp_pf_no =  $_POST['emp_pf_no'];



  $emp_uan_no = $_POST['uan_no'] != null  ? "'$emp_uan_no'" : "NULL";
  $emp_pf_no = $_POST['emp_pf_no'] != null ? "'$emp_pf_no'" : "NULL";
  $emp_esic_no = $_POST['emp_esic_no'] != null ? "'$emp_esic_no'" : "NULL";
  $emp_account_no = $_POST['emp_account_no'] != null ? "'$emp_account_no'" : "NULL";



  $emp_phn =  $_POST['emp_phn'];
  $emp_image = null;
  $emp_site_name= $_POST['emp_site_name'];
  $zip = $_POST['zip'];
  $city = $_POST['city'];
  $emp_address =  $_POST['emp_address'].",".$city.",".$zip;

  // echo $emp_address;




  $query =
  "INSERT INTO `guard_info` (`emp_name`, `emp_father_name`, `emp_dob`, `emp_account_no`, `emp_esic_no`, `emp_pf_no`, `emp_gender`, `emp_designation`, `uan_no`, `emp_address`, `emp_phn`, `emp_image`, `emp_zone`) VALUES ( '$emp_name', '$emp_father_name', '$emp_dob', $emp_account_no, $emp_esic_no, $emp_pf_no, '$emp_gender', '$emp_designation', $emp_uan_no, '$emp_address', '$emp_phn', 'null','$emp_site_name')";



  $result =   mysqli_query($connection,$query);
  if($result==null)
  {
    echo mysqli_error($connection);
    ?>  <div class="row " style="transform:translate(450px,300px);">
      <div class="container-fluid">
        <h4 style="color:rgba(125,125,125,0.7);font-size:50px;"> Same user has been resisterd already</h4>
      </div>
    </div>
    <div style="transform:translate(700px,350px);">

      <a href="Register.php"  > <button class="btn  btn-lg btn-primary"> <span class="glyphicon glyphicon-chevron-left"></span>  Back </button></a>
    </div>
    <?php
  }
  else
  {
    echo "Registration has been done";
    $_SESSION["name"]=$emp_name;
    $_SESSION["account_no"] = $emp_account_no;
    $_SESSION["pf_no"]=$emp_pf_no;
    $_SESSION["uan_no"]=$emp_uan_no;
    $_SESSION["phone"]=$emp_phn;
    header('Location: ./Somemoreupdates/mail.php');
  }


  //echo $emp_gender;
}
else{
  echo "Details not correct";



}


?>
