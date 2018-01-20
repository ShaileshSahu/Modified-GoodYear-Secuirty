
<?php include "./Database/Connection.php"?>

<?php
$emp_id = $_GET['emp_id'];
$query ="insert into guard_info select * from discarded where emp_id=$emp_id";
mysqli_query($data->Connect(),$query);
echo "now undo ";
header('location: viewSearch.php')
 ?>
