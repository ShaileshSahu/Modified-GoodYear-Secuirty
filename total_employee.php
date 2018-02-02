
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

  <div class="row" style="transform:translate(30px,30px);">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Total Employee in :-</h4>
      </div>
      <div class="panel-body">
        <div class="">
          <form class="form-horizontal"  action="viewSearch.php" method="post">


            <select name="total_emp" >

              <?php include './Extra/Sitename_option.php'?>
            </select>


            <button type='submit' class='btn btn-info' name="temp">Enter</button>
            <div > <?= $site?><input type="text" name = "val" class="form-control" value="<?= $num ?>"  /></div>
          </div>

        </div>
      </div>
    </div>

    <?php

  }



  else{
    ?>



    <div class="row" style="transform:translate(30px,30px);">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>Total Employee in :-</h4>
        </div>
        <div class="panel-body">
          <div class="">
            <form class="form-horizontal"  action="viewSearch.php" method="post">


              <select name="total_emp" >

                <?php include './Extra/Sitename_option.php'?>
              </select>


              <button type='submit' class='btn btn-info' name="temp">Enter</button>
              <input type="text" name = "val" class="form-control" value=""  />
            </div>

          </div>
        </div>
      </div>
    <?php } ?>
