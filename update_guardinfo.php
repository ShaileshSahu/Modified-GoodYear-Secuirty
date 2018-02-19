<?php include "./Database/Connection.php";
session_start();

$req_emp_id = $_GET['emp_id'];
$_SESSION['emp_id'] =$req_emp_id;

?>
<html>

<head>

<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style>
.form-style-10{
    width:450px;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select,
.form-style-10 input[type="tel"]{
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
.form-style-10 input[type="button"],
.form-style-10 input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
.form-style-10 input[type="button"]:hover,
.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
    float: right;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
}
</style>
</head>
<body>
<div class="form-style-10">
<h1>Edit Guard Details</h1>
<form action="edit.php" method="post">


<?php
$query="select * from guard_info where emp_id=$req_emp_id";
$result = mysqli_query($data->Connect(),$query);
while($row= mysqli_fetch_array($result))
{

 ?>

    <div class="section"><span>1</span>Person Details</div>
    <div class="inner-wrap">

        <label>Your Full Name <input type="text" class="span" value="<?=$row['emp_name']?>" name="name"/></label>
        <label>Address <textarea name="address"><?=$row['emp_address']?></textarea></label>
        <label>Father's name<input type="text" class="span" name="father_name" value="<?=$row['emp_father_name']?>"> </label>
        <label>Gender:-<input type="date" class="span"  name="dob" value="<?=$row['emp_dob']?>"> </label>
        <label>Phone Number:-<input type="tel" class="form-control "name="phn" value="<?=$row['emp_phn']?>"/> </label>
      </div>
    <div class="section"><span>2</span>Other Details</div>
    <div class="inner-wrap">
        <label>UAN <input type="number" class="span" value="<?=$row['uan_no']?>" name="uan"> </label>
        <label>Account<input type="number" class="span" value="<?=$row['emp_account_no']?>" name="account"> </label>

        <label>PF NO.<input type="number" class="span" value="<?=$row['emp_pf_no']?>" name="pf">
         </label>

                 <label>Police Verfication No.<input type="number" class="span" value="<?=$row['emp_police_no']?>" name="police">
                  </label>

    </div>

    <div class="section"><span>3</span>Zone</div>
        <div class="inner-wrap">
        <label>ESIC No.<input type="text" class="span" value="<?=$row['emp_esic_no']?>" name="esic"> </label>
        <select name="zone"?>
          <option value="<?=$row['emp_zone']?>"><?=$row['emp_zone']?></option>
<?php include "./Extra/Sitename_option.php"?>
        </select>
    </div>
    <div class="button-section">
     <input type="submit" name="submit" />
     <span class="privacy-policy">
       <input type="checkbox" name="check" required /> Are You sure to update
     </span>
  </div>
<?php } ?>
</form>
</div>
</body>

</html>
