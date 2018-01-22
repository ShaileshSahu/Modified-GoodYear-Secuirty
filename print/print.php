<?php session_start();include "../Database/Connection.php"?>
<!DOCTYPE html>
<html>
  <head>

       <meta charset="utf-8">
       <title>Black Label Admin</title>
       <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">

       <link href="icomoon/style.css" rel="stylesheet">
       <!--[if lte IE 7]>
         <script src="css/icomoon-font/lte-ie7.js"></script>
       <![endif]-->
       <link href="../css/nvd-Payment.css" rel="stylesheet">
       <link href="../css/main.css" rel="stylesheet">
       <link rel="stylesheet" href="../css/font.css">

<style>
body{
  background:white;

}
h1,h4
{
  text-align: center;
}
</style>
  </head>

<script>
</script>

<body onload="window.print()">

<h1>GOOD YEAR SECURITY SERVICES</h1>
<h4><b>A-75,UPPER GROUND FLOOR,NEAR C R P F CAMP<br>SECTOR-08,DWARKA,NEW DELHI
</b></h4>
<h3>Guard Information</h3>
<?php
$print =$_GET['print'];
switch($print)
{
case 1:{
   $result =mysqli_query($data->Connect(),"select * from guard_info");
   if($result==null)
   {
     die("die");
   }
  include "../Extra/viewTable.php";

}

case 2:
{
  $query = $_SESSION['query'];

  $result =mysqli_query($data->Connect(),$query);
  $full= $_SESSION['month'];
    $split = explode("-",$full);
    $monthNum  =$split[1] ;
    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
    $monthName = $dateObj->format('F');

  $year = $split[0];
?>
<h4 style="text-align:left;">Salary Statement for this month  of <b><?= $monthName.",".$year?></b><br>
Site Name & Location :-<?=$_SESSION['emp_site_name'] ?>Basic Sheet
</h4>;

<?php
 include "../Extra/viewBasic.php";
unset($_SESSION['month']);
unset($_SESSION['query']);
unset($_SESSION['emp_site_name']);
break;
}


case 3:{
  $query = $_SESSION['query'];

  $result =mysqli_query($data->Connect(),$query);
  $full= $_SESSION['month'];
    $split = explode("-",$full);
    $monthNum  =$split[1] ;
    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
    $monthName = $dateObj->format('F');

  $year = $split[0];
?>
<h4 style="text-align:left;">Salary Statement for this month of <b><?= $monthName.",".$year?></b><br>
Site Name & Location :-<?=$_SESSION['emp_site_name'] ?>Payment Sheet
</h4>;

<?php
 include "../Extra/viewPayment.php";
unset($_SESSION['month']);
unset($_SESSION['query']);
unset($_SESSION['emp_site_name']);
break;




}

case 4:
{
  $query = $_SESSION['query'];

  $result =mysqli_query($data->Connect(),$query);
  $full= $_SESSION['month'];
    $split = explode("-",$full);
    $monthNum  =$split[1] ;
    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
    $monthName = $dateObj->format('F');


  $year = $split[0];
?>
<h4 style="text-align:left;">Salary Statement for this month of <b><?= $monthName.",".$year?></b><br>
Basic Master Sheet
</h4>;

<?php
 include "../Extra/viewBasic.php";
unset($_SESSION['month']);
unset($_SESSION['query']);

break;
}






}

?>
</body>

</html>
