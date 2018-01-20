

<?php  include "./Database/Connection.php"; ?>
<?php session_start();
$emp_id = $_SESSION['emp_id'];
if(isset($_POST["monthly"]))
{
$wdays =$_POST["wdays"];
$odays =$_POST["odays"];
$rwages = $_POST["rwages"];
$owages = $_POST["owages"];
$month = $_POST["month"];
$result =mysqli_query($data->Connect(),"select * from `$month`");
if($result==null)
{
  echo "please first create for this month";
}
else {


$query ="insert into `$month` values($emp_id,$wdays,$rwages,$odays,$owages)";
      $result =mysqli_query($data->Connect(),$query);
if($result==null)
{
  die("error during updation");
}
else {
header('location: viewSearch.php');
}

}


}

 ?>
