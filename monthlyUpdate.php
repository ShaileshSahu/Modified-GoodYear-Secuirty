<?php   include "./Database/Connection.php";
session_start();
$req_emp_id=   $_GET['emp_id'];
$_SESSION['emp_id']=$req_emp_id;

?>

<html>
<head>


  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <style type="text/css">
  .form-style-8{
      font-family: 'Open Sans Condensed', arial, sans;
      width: 500px;
      padding: 30px;
      background: #FFFFFF;
      margin: 50px auto;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
      -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
      -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

  }
  .form-style-8 h2{
      background: #4D4D4D;
      text-transform: uppercase;
      font-family: 'Open Sans Condensed', sans-serif;
      color: #797979;
      font-size: 18px;
      font-weight: 100;
      padding: 20px;
      margin: -30px -30px 30px -30px;
  }
  .form-style-8 input[type="text"],
  .form-style-8 input[type="date"],
  .form-style-8 input[type="datetime"],
  .form-style-8 input[type="email"],
  .form-style-8 input[type="number"],
  .form-style-8 input[type="search"],
  .form-style-8 input[type="time"],
  .form-style-8 input[type="url"],
  .form-style-8 input[type="password"],
  .form-style-8 textarea,
  .form-style-8 select,
  .form-style-8 input[type="month"]
  {
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      outline: none;
      display: block;
      width: 100%;
      padding: 7px;
      border: none;
      border-bottom: 1px solid #ddd;
      background: transparent;

      font: 16px Arial, Helvetica, sans-serif;

  }
  .form-style-8 textarea{
      resize:none;
      overflow: hidden;
  }
  .form-style-8 input[type="button"],
  .form-style-8 input[type="submit"]{
      -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
      -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
      box-shadow: inset 0px 1px 0px 0px #45D6D6;
      background-color: #2CBBBB;
      border: 1px solid #27A0A0;
      display: inline-block;
      cursor: pointer;
      color: #FFFFFF;
      font-family: 'Open Sans Condensed', sans-serif;
      font-size: 14px;
      padding: 1px 8px;
      text-decoration: none;
      text-transform: uppercase;
  }
  .form-style-8 input[type="button"]:hover,
  .form-style-8 input[type="submit"]:hover {
      background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
      background-color:#34CACA;
  }

  input[type="submit"]{

    width:100px;
    height:50px;
    margin-left: 180px;

  }


  </style>


</head>

<body>
<form action="Database_monthly.php" method="post" class="form-horizontal">

<div class="form-style-8">
  <h2>Monthly Updated</h2>

    <h5 id="myModalLabel1" style="text-align:right;opacity:.5;">
        Please fill this form carefully
     </h5>

         <label> Month:-<input id="bday-month" type="month" name="month"
                       min="2018-01" max="2030-12"> </label>
<br><br>

                        <label><h5 style="text-align:right;">Working Days</h5><input type="number" class="s" min="0" max="27" Placeholder="Working Days" name="wdays"></label>
                        <label><h5 style="text-align:right;">Rate Of Wages</h5><input type="number" class="s" Placeholder="Rate Of Wages" name="rwages" value="733"></label>
                       <label><h5 style="text-align:right;">Overtime Days</h5><input type="number" class="" min="0" max="27"Placeholder="Overtime Days" name="odays" value="0"> </label>
                       <label><h5 style="text-align:right;">Overtime Wages</h5><input type="number" class="s" Placeholder="Overtime Wages" name="owages" value="250"></label>
<h4 style="color:green;">Payment Slip</h4>
<label><h5 style="text-align:right;">Payment Days</h5><input type="number" class="" min="0" max="31"Placeholder="Payment Days" name="pdays" > </label>
<label><h5 style="text-align:right;">Payment Wages</h5><input type="number" class="s" Placeholder="Payment Wages" name="pwages" value="700"></label>

<label><h5 style="text-align:right;">Additional Charges</h5><input type="number" class="s" Placeholder="Additional Charges" name="additional" value="0"></label>

                       <input type="submit" name="monthly" class="" value="Update"/>
  </form>
</div>




<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>
</body>

</html>
