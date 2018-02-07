
<?php

if(isset($_POST['temp']))
{

  $site = $_POST['total_emp'];
  $result =mysqli_query($data->connect(),"select emp_site_name from sitename");
  while($row = mysqli_fetch_array($result))
  {
    foreach($row as $val){
      if($val == $site){
        $query = "Select emp_zone from guard_info where emp_zone = '$val'";
        $re =   mysqli_query($data->connect(), $query);
        $num =  mysqli_num_rows($re);
      }


    }


  }
  ?>

  <div class="span6" >
        <h4>Total Employee In : -</h4>

<hr>
<div class="span4"></div>
        <div class="span4" style="position:relative;left:380px;">
          <form class="form-horizontal"  action="viewSearch.php" method="post">


            <select name="total_emp" >

              <?php include './Extra/Sitename_option.php'?>
            </select>


            <button type='submit' class='btn btn-inverse' name="temp">Enter</button>
            <div><h3 class="text-primary" style="position:relative;left:80px;"><?=$site?> <b style="color:blue;"><?=$num?></b></h3> </div>
          </div>

        </div>


    <?php

  }



  else{
    ?>


    <div class="span6" >
          <h4>Total Employee In : -</h4>

  <hr>
  <div class="span4"></div>
          <div class="span4" style="position:relative;left:380px;">
            <form class="form-horizontal"  action="viewSearch.php" method="post">


              <select name="total_emp" >

                <?php include './Extra/Sitename_option.php'?>
              </select>


              <button type='submit' class='btn btn-inverse' name="temp">Enter</button>
              <div><h3 class="text-primary" style="position:relative;left:80px;"> <b style="color:blue;"></b></h3> </div>
            </div>

          </div>


    <?php } ?>
