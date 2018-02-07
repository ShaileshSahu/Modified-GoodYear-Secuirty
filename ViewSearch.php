<?php session_start();include "./Database/Connection.php";?>
<?php include "./Extra/Header.php" ;?>
<?php include "./Extra/pagination.php"?>

<?php
$query ="select * from guard_info";
$sett =$_SESSION["for_pag"];

if($sett==null)
{
  $pag = new pagination($data->Connect(),"select * from guard_info");
}
else {
  $pag = new pagination($data->Connect(),$sett);
}


?>

<div class="row-fluid">
  <div class="span12">
    <ul class="breadcrumb-beauty">
      <li>
        <a href="index.html"><span class="fs1" aria-hidden="true" data-icon="&#xe002;"></span> Dashboard</a>
      </li>
      <li>
        <a href="#">View</a>
      </li>
    </ul>
  </div>
</div>

<!.. search box here ..>

<h3  > <i> Employee View:-- <a href="./print/print.php?print=1" class="btn btn-info pull-right btn-medium">print</a></i></h3>

<div class="span11">
  <div class="widget">
    <div class="widget-header">
      <div class="title">
        <b class="text-success">Search</b>
        <a href="viewSearch.php" class="push-right btn btn-success btn-small " style="float:right">Reset</a>
      </div>

    </div>
    <div class="row-fluid">
      <div class="span7">
        <div class="widget-body">
          <form action="viewSearch.php" class="form " method="post">

            <div class="input-append ">
              <input class="" id="appendedInputButtons" type="text" name="info"  placeholder="Search by name, esic, month.........">
              <select class=" controls form-control span4" name="field"><option>Select</option><option value="month">By Month</option><option value ="esic">By Esic Number</option>
                <option value="name">By Name</option>
              </select>
              <input class="btn btn-sm btn-info " type="submit" name="search" value="Search" />

            </div>       </form>



          </div>
        </div>
        <div class="span1" style='position:relative;top:22px;font-size:3em;left:-38px;opacity:.4;'>OR</div>
        <div class='span4' >
          <div class='widget-body' style='position:relative;top:-15px;'>
            <form action='' method='post' class="form-horizontal">
              <div class="control-group warning input-append">
                <br>
                &nbsp;<select name='emp_site_name'>

                  <?php include './Extra/Sitename_option.php'?>
                </select>
                <button type='submit' class='btn btn-danger' name='site'>Site</button>
              </div>

            </form>
          </div></div>


        </div>
      </div>

    </div>

    <div class="">
      <?php include "total_employee.php"?>
    </div>





    <!.. php code here ..>



    <?php
    //extract($_POST);

    if( isset($_POST['search']))
    {
      //  echo("boitched");


      $info = $_POST['info'];

      if($_POST['field'] =='name')
      {
        if(isset($_GET['pagination']))
        {

          $pagination = $_GET['pagination'];
          $query =  $pag->paged($pagination);
        }

        else {
          $query= "select * from guard_info where emp_name like '%$info%' limit 0,15";
          $_SESSION["for_pag"]= "select * from guard_info where emp_name like '$info'";


        }
      }
      else if( $_POST['field'] =='esic')
      {

        if(isset($_GET['pagination']))
        {

          $pagination = $_GET['pagination'];
          $query =  $pag->paged($pagination);
        }

        else {
          $query= "select * from guard_info where emp_esic_no like '%$info%' limit 0,15";
          $_SESSION["for_pag"]= "select * from guard_info where emp_esic_no like '$info'";


        }}else
        {
          if(isset($_GET['pagination']))
          {

            $pagination = $_GET['pagination'];
            $query =  $pag->paged($pagination);
          }

          else {
            $query= "select * from guard_info where emp_zone like '%$info%' limit 0,15";
            $_SESSION["for_pag"]= "select * from guard_info where emp_zone like '$info'";


          }
        }

        $result = mysqli_query($data->connect(),$query);
        $n =  mysqli_num_rows($result);



        if($n < 0)
        {

          ?>  <h3 style="transform:translate(-800px, 150px);"> <?php echo("No Matching Content Found"); ?> </h3>
          <?php
        }


        else
        {

          ?>



          <!.. here goes the view content -->
          <!.. Guard details on table:    -->
          <?php include "./Extra/viewTable.php";?>

          <?php
        }}
        else if(isset($_POST['site']))
        {

          if(isset($_GET['pagination']))
          {

            $pagination = $_GET['pagination'];
            $query =  $pag->paged($pagination);
          }

          else {
            $emp_site_name  = $_POST['emp_site_name'];
            $query ="Select * from guard_info where emp_zone ='$emp_site_name' limit 0,15";
            $_SESSION["for_pag"]= "Select * from guard_info where emp_zone ='$emp_site_name'";
          }

          $result = mysqli_query($data->connect(),$query);

        //  echo("in Here else");

          ?>



          <!.. Guard details on table:    -->
          <?php include "./Extra/viewTable.php";?>


          <?php
        }else
        {
          if(isset($_GET['pagination']))
          {

            $pagination = $_GET['pagination'];
            $query =  $pag->paged($pagination);
          }

          else {
            $query ="Select * from guard_info limit 0,15";
            $_SESSION["for_pag"]="select * from guard_info";
          }


          $result = mysqli_query($data->connect(),$query);

        //  echo("in Here else");


          ?>
          <?php include "./Extra/viewTable.php";?>





          <?php
        }

        ?>



        <!.. pagination herer -->
        <div class="row-fluid">
          <div class="span12">
            <div class="widget">

              <div class="widget-body">
                <div class="pagination no-margin">
                  <ul>
                    <?php

                    $limitation =$pag->limitation();

                    for($i=1;$i<=$limitation;$i++)
                    {

                      if(isset($_GET['pagination']))
                      {
                        $pagination =$_GET['pagination'];
                        if($pagination==$i)
                        {
                          ?>
                          <li class='active'>

                            <a href="?pagination=<?=$i?>">
                              <?=$i?>
                            </a>
                          </li>
                          <?php
                        }
                        else {
                          ?>
                          <li >

                            <a href="?pagination=<?=$i?>">
                              <?=$i?>
                            </a>
                          </li>

                          <?php
                        }

                      }

                      else {
                        ?><li >

                          <a href="?pagination=<?=$i?>">
                            <?=$i?>
                          </a>
                        </li>
                        <?php
                      }

                    }

                    ?>





                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>




        <br>


      </div>

    </div>



  </div>








  <footer>
    <p class="copyright">&copy; Black Label Admin 2013</p>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>


</body>
</html>
