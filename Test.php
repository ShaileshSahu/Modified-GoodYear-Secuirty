<?php include "./Database/Connection.php"?>
<?php

$query =" select * from guard_info join (`2018-01`) on id=emp_id where emp_zone='RML'";

 $result =mysqli_query($data->Connect(),$query);
while($row=mysqli_fetch_array($result))
{
  echo $row['emp_name'];
}
?>
