

<?php




$result =mysqli_query($data->Connect(),"select * from sitename");

while($row = mysqli_fetch_array($result))
{
?>

<option><?=$row[1]?></option>

<?php

}
?>
