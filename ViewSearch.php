<?php include "./Database/Connection.php";?>


 <!DOCTYPE html>
  <!--[if lt IE 7]>
    <html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
  <![endif]-->

  <!--[if IE 7]>
    <html class="lt-ie9 lt-ie8" lang="en">
  <![endif]-->

  <!--[if IE 8]>
    <html class="lt-ie9" lang="en">
  <![endif]-->

  <!--[if gt IE 8]>
    <!-->
    <html lang="en">
    <!--
  <![endif]-->

  <head>
    <meta charset="utf-8">
    <title>Black Label Admin</title>

    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">

    <link href="icomoon/style.css" rel="stylesheet">
    <!--[if lte IE 7]>
      <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->

    <!-- bootstrap css -->
    <link href="css/main.css" rel="stylesheet">

  </head>
  <body>
    <header>
      <a href="index.html" class="logo">Black Label Admin</a>
      <div id="mini-nav">
        <ul class="hidden-phone">
          <li><a href="View.html" >Tasks</a></li>
          <li><a href="#">Signup's <span id="newSignup">06</span></a></li>
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              Messages <span id="messagesCountDown">21</span>
              <b class="caret icon-white"></b>
            </a>
            <ul class="dropdown-menu pull-right">
              <li class="quick-messages">
                <img src="img/avatar-1.png" class="avatar" alt="Avatar">
                <div class="message-date text-info">
                  <i>02 <span class="month">mins</span></i>
                </div>
                <div class="message-wrapper">
                  <h4 class="message-heading">Ubiquitous customized</h4>
                  <p class="message">
                    Enable impactful niches engage impactful
                  </p>
                </div>
              </li>
              <li class="quick-messages">
                <img src="img/avatar-2.png" class="avatar" alt="Avatar">
                <div class="message-date text-info">
                  <i>02 <span class="month">mins</span></i>
                </div>
                <div class="message-wrapper">
                  <h4 class="message-heading">Ubiquitous customized</h4>
                  <p class="message">
                    Enable impactful niches engage impactful
                  </p>
                </div>
              </li>
              <li class="quick-messages">
                <img src="img/avatar-5.png" class="avatar" alt="Avatar">
                <div class="message-date text-info">
                  <i>38 <span class="month">mins</span></i>
                </div>
                <div class="message-wrapper">
                  <h4 class="message-heading">Ubiquitous customized</h4>
                  <p class="message">
                    Enable impactful niches engage impactful
                  </p>
                </div>
              </li>
              <li class="quick-messages">
                <img src="img/avatar-4.png" class="avatar" alt="Avatar">
                <div class="message-date text-info">
                  <i>27 <span class="month">Apr</span></i>
                </div>
                <div class="message-wrapper">
                  <h4 class="message-heading">Ubiquitous customized</h4>
                  <p class="message">
                    Enable impactful niches engage impactful
                  </p>
                </div>
              </li>
              <li class="quick-messages">
                <img src="img/avatar-6.png" class="avatar" alt="Avatar">
                <div class="message-date text-info">
                  <i>18 <span class="month">Apr</span></i>
                </div>
                <div class="message-wrapper">
                  <h4 class="message-heading">Ubiquitous customized</h4>
                  <p class="message">
                    Enable impactful niches engage impactful
                  </p>
                </div>
              </li>
            </ul>
          </li>
          <li><a href="MasterLogin.html">Logout</a></li>
        </ul>
      </div>
    </header>

    <div class="container-fluid">
      <div id="mainnav" class="hidden-phone hidden-tablet">
        <ul>
          <li>
            <a href="index.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0a1;"></span>
              </div>
              Dashboard
            </a>
          </li>
          <li>
            <a href="charts.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe097;"></span>
              </div>
              Charts
            </a>
          </li>
          <li class="active">
            <span class="current-arrow"></span>
            <a href="View.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe047;"></span>
              </div>
              View
            </a>
          </li>
          <li>
            <a href="tables.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
              </div>
              Tables
            </a>
          </li>
          <li>
            <a href="Resgister.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span>
              </div>
              Resgister
            </a>
          </li>
          <li>
            <a href="ui-elements.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0d2;"></span>
              </div>
              UI Elements
            </a>
          </li>
          <li>
            <a href="grid.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe14c;"></span>
              </div>
              Grid
            </a>
          </li>
          <li>
            <a href="gallery.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe00d;"></span>
              </div>
              Gallery
            </a>
          </li>
          <li>
            <a href="master.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe100;"></span>
              </div>
              master
            </a>
          </li>
          <li>
            <a href="icons.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0a9;"></span>
              </div>
              Icons
            </a>
          </li>
          <li>
            <a href="error.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0f4;"></span>
              </div>
              404
            </a>
          </li>
          <li>
            <a href="MasterLogin.html">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe088;"></span>
              </div>
              MasterLogin
            </a>
          </li>
        </ul>
      </div>

      <div class="dashboard-wrapper">

        <div class="main-container">
          <div class="navbar hidden-desktop">
            <div class="navbar-inner">
              <div class="container">
                <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse collapse navbar-responsive-collapse">
                  <ul class="nav">
                    <li>
                      <a href="index.html">Dashboard</a>
                    </li>
                    <li>
                      <a href="graphs.html">Charts</a>
                    </li>
                    <li>
                      <a href="View.html">View</a>
                    </li>
                    <li>
                      <a href="tables.html">Tables</a>
                    </li>
                    <li>
                      <a href="Resgister.html">Resgister</a>
                    </li>
                    <li>
                      <a href="ui-elements.html">UI Elements</a>
                    </li>
                    <li>
                      <a href="grid.html">Grid</a>
                    </li>
                    <li>
                      <a href="gallery.html">Gallery</a>
                    </li>
                    <li>
                      <a href="master.html">master</a>
                    </li>
                    <li>
                      <a href="icons.html">Icons</a>
                    </li>
                    <li>
                      <a href="MasterLogin.html">MasterLogin</a>
                    </li>
                    <li>
                      <a href="error.html">404</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

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

<h3  > <i> Employee View:-- </i></h3>

<h4 class="text-center text-warning text-capitalize"> Enter something to search</h4>

          <div class="span12">
              <div class="widget">
                  <div class="widget-header">
                      <div class="title">
                         <b class="text-success">Search</b>
                      </div>

                  </div>
                  <div class="widget-body">
                 <form action="viewSearch.php" class="form" method="post">
                      <div class="widget-body">
                     <div class="input-append">
                       <input class="span4" id="appendedInputButtons" type="text" name="info"  placeholder="Search by name, esic, month.........">
                       <select class=" controls form-control span-2" name="field"><option>Select</option><option value="month">By Month</option><option value ="esic">By Esic Number</option>
                       <option value="name">By Name</option>
                       </select>
                       <input class="btn btn-sm btn-inverse span-2" type="submit" name="search" value="Search" />

                     </div>
                   </div>

                 </form>
                  </div>




              </div>

          </div>


          <a href="viewSearch.php" ><button class= " btn-lg btn btn-success"  >Reload</button> </a>

<!.. php code here ..>



<?php
  //extract($_POST);

if( isset($_POST['search']))
{
  //  echo("boitched");
    $info = $_POST['info'];

    if($_POST['field'] =='name')
    {
    $query= "select * from guard_info where emp_name like '%$info%'  limit 10";

    }
    else if( $_POST['field'] =='esic')
    {
        $query = "select * from guard_info where emp_esic_no like '%$info%' limit 10";
    }else
    {
        $query = "select * from guard_info where emp_zone like '%$info%'  limit 10";
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


</div>
<!.. here goes the view content -->
<!.. Guard details on table:    -->
<div class="row-fluid">
 <div class="span12">
   <div class="widget no-margin">
     <div class="widget-header">
       <div class="title">
         <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Guard Information:-
       </div>
     </div>
     <div class="widget-body">
       <div id="dt_example" class="example_alt_pagination">
         <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
           <thead>
             <tr>
               <th >S.no</th>
               <th>UAN no.</th>
               <th>Name</th>
               <th >Father's Name</th>
               <th >DOB</th>
               <th class="hidden-phone">Zone</th>
               <th  class="hidden-phone">Account No</th>
               <th>ESIC NO.</th>
               <th>PF NO.</th>
               <th>Designation</th>
               <th>Address</th>
               <th>Phone no.</th>
               <th>Monthly Update</th>
               <th>Update</th>
               <th>DELETE</th>
            </tr>
           </thead>
           <tbody>
             <tr class="gradeX">
               <?php
                 $sno =1;
                 while($row = mysqli_fetch_array($result))

                 {

                 ?><td> <?php echo $sno;?></td>
               <td><?php echo $row['uan_no'];?></td>
               <td><?php echo $row['emp_name'];?></td>
               <td><?php echo $row['emp_father_name'];?></td>
               <td><?php echo $row['emp_dob'];?></td>
               <td><?php echo $row['emp_zone'];?></td>
               <td><?php echo $row['emp_account_no'];?></td>
               <td><?php echo $row['emp_esic_no'];?></td>
               <td><?php echo $row['emp_pf_no'];?></td>
               <td><?php echo $row['emp_designation'];?></td>
               <td class="hidden-ph"><?php echo $row['emp_address'];?>
                 </td>

                 <td><?php echo $row['emp_phn'];
                 ?> </td>

      <!.. monthly uodate ..>
                      <td><a href="#accSettings" role="button" class="btn btn-md btn-success" data-toggle="modal">
                              MONTHLY UPDATE
                          </a>
                        </td>
                      <form action="Details.php" method="post" class="form-horizontal">
                        <div id="accSettings" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                          </button>
                          <h4 id="myModalLabel1">
                             Monthly Update
                          </h4>
                        </div>
                        <div class="modal-body">
                          <div class="row-fluid">
                            <div class="">
                            <c class="text-primary">   Month</c> :-<input id="bday-month" type="month" name="month"
                                        min="2018-01" max="2030-12">
                            </div>
                            <div>
                        <c class="text-primary">  Zone:- </c> <select name="zone">
                              <option value="south">South</option>
                              <option value="north">North</option>
                              <option value ="west">West</option>
                              <option value="east">East</option>

                            </select>
                          </div>
                            <div class="text-primary">
                              <input type="number" class="span12" Placeholder="Working Days" name="wdays">
                            </div>
                            <div class="text-primary">
                              <input type="number" class="span12" Placeholder="Overtime Days" name="overtime">
                            </div>
                          </div>

                        </div>
                        <div class="modal-footer">
                          <input type="hidden" value="<?php echo$row['emp_id'];?>" name ="nm" />
                          <button class="btn" data-dismiss="modal" aria-hidden="true">
                            Close
                          </button>
                          <button class="btn btn-primary" type="submit" name="submit" >
                            Save changes
                          </button>
                        </div>

                      </div>
                    </form>
<!.. information update ..>

                  <td><a href="#accSettings1" role="button" class="btn btn-small btn-primary hidden-tablet hidden-phone" data-toggle="modal" data-original-title="">
                   Update
                 </a> </td>
                   <div id="accSettings1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                   <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                       ×
                     </button>
                     <h4 id="myModalLabel1">
                       Edit client details
                     </h4>
                   </div>
                   <div class="modal-body">
                     <div class="row-fluid">
                       <div class="span4">
                         <input type="text" class="span12" placeholder="Frist name">
                       </div>
                       <div class="span4">
                         <input type="text" class="span12" placeholder="Last name">
                       </div>
                       <div class="span4">
                         <input type="text" class="span12" placeholder="Account no.">
                       </div>
                     </div>
                     <div class="row-fluid">
                       <div class="span4">
                         <input type="text" class="span12" placeholder="ESIC">
                       </div>
                       <div class="span8">
                         <input type="text" class="span12" placeholder="Address">
                       </div>
                     </div>
                   </div>
                   <div class="modal-footer">
                     <button class="btn" data-dismiss="modal" aria-hidden="true">
                       Close
                     </button>
                     <button class="btn btn-primary">
                       Save changes
                     </button>
                   </div>
                 </div>
               </td>
               <td><button class="btn btn-info">Delete</button></td>
             </tr>
<?php
        $sno++;
        echo $row['emp_id'];


      } }?>
           </tbody>
         </table>
         <div class="clearfix"></div>
       </div>
     </div>
   </div>
 </div>
</div>



<?php
}
else
 {

    $query ="Select * from guard_info  limit 10";
    $result = mysqli_query($data->connect(),$query);

    echo("in Here else");

?>

<!.. Guard details on table:    -->
<div class="row-fluid">
 <div class="span12">
   <div class="widget no-margin">
     <div class="widget-header">
       <div class="title">
         <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Guard Information:-
       </div>
     </div>
     <div class="widget-body">
       <div id="dt_example" class="example_alt_pagination">
         <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
           <thead>
             <tr>
               <th >S.no</th>
               <th>UAN no.</th>
               <th>Name</th>
               <th >Father's Name</th>
               <th >DOB</th>
               <th class="hidden-phone">Zone</th>
               <th  class="hidden-phone">Account No</th>
               <th>ESIC NO.</th>
               <th>PF NO.</th>
               <th>Designation</th>
               <th>Address</th>
               <th>Phone no.</th>
               <th>Monthly Update</th>
               <th>Update</th>
               <th>DELETE</th>
            </tr>
           </thead>
           <tbody>
             <tr class="gradeX">
               <?php
                 $sno = 1;
                 while($row = mysqli_fetch_array($result))

                 {

                 ?><td> <?php echo $sno;?></td>
               <td><?php echo $row['uan_no'];?></td>
               <td><?php echo $row['emp_name'];?></td>
               <td><?php echo $row['emp_father_name'];?></td>
               <td><?php echo $row['emp_dob'];?></td>
               <td><?php echo $row['emp_zone'];?></td>
               <td><?php echo $row['emp_account_no'];?></td>
               <td><?php echo $row['emp_esic_no'];?></td>
               <td><?php echo $row['emp_pf_no'];?></td>
               <td><?php echo $row['emp_designation'];?></td>
               <td class="hidden-ph"><?php echo $row['emp_address'];?>
                 </td>
                 <td><?php echo $row['emp_phn'];?> </td>
              <td><a href="#accSettings" role="button" class="btn btn-md btn-success" data-toggle="modal">
                      MONTHLY UPDATE
                  </a>
                </td>

                <form action="Details.php" method="post" class="form-horizontal">
                  <div id="accSettings" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      ×
                    </button>
                    <h4 id="myModalLabel1">
                       Monthly Update
                    </h4>
                  </div>
                  <div class="modal-body">
                    <div class="row-fluid">
                      <div class="">
                      <c class="text-primary">   Month</c> :-<input id="bday-month" type="month" name="month"
                                  min="2018-01" max="2030-12">
                      </div>
                      <div>
                  <c class="text-primary">  Zone:- </c> <select name="zone">
                        <option value="south">South</option>
                        <option value="north">North</option>
                        <option value ="west">West</option>
                        <option value="east">East</option>

                      </select>
                    </div>
                      <div class="text-primary">
                        <input type="number" class="span12" Placeholder="Working Days" name="wdays">
                      </div>
                      <div class="text-primary">
                        <input type="number" class="span12" Placeholder="Overtime Days" name="overtime">
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <input type="hidden" value="<?php echo$row['emp_id'];?>" name ="nm" />
                    <button class="btn" data-dismiss="modal" aria-hidden="true">
                      Close
                    </button>
                    <button class="btn btn-primary" type="submit" name="submit" >
                      Save changes
                    </button>
                  </div>

                </div>
                </form>


                <td> <a href="#accSettings1" role="button" class="btn btn-small btn-primary hidden-tablet hidden-phone" data-toggle="modal" data-original-title="">
                   Update
                 </a> </td>
                 <form action="update.php" method="post">
                   <div id="accSettings1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                   <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                       ×
                     </button>
                     <h4 id="myModalLabel1">
                       Edit Guard details
                     </h4>
                   </div>
                   <div class="modal-body">
                     <div class="row-fluid">
                       <div>
                          <pre class="text-warning"> Guard Id is:-  <?php echo $row['emp_name'] ?>  </pre>
                       </div>

                       <div class="">
                        <input type="text" class="span" placeholder="name" name="name">
                       </div>
                       <div class="">
                         <input type="number" class="span" placeholder="UAN no." name="uan">
                       </div>
                       <div class="">
                         <input type="number" class="span" placeholder="Account no." name="account">
                       </div>
                     </div>
                     <div class="row-fluid">
                       <div class="">
                         <input type="text" class="span" placeholder="ESIC" name="esic">
                       </div>
                       <div class="">
                         <input type="text" class="span" placeholder="Address" name="address">
                       </div>
                       <div class="">
                         <input type="date" class="span" placeholder=" Date Of Birth" name="dob">
                       </div>
                       <div class="">
                         <input type="number" class="span" placeholder="PF No." name="pf">
                       </div>
                       <div class="">
                         <input type="text" class="span" placeholder="Gender" name="gender">
                       </div>
                       <div class="">
                         <input type="tel" class="span" placeholder="Phone Number" name="phn">
                       </div>
                       <div class="">
                         <input type="text" class="span" placeholder="Zone" name="zone">
                       </div>

                    </div>
                   </div>
                   <div class="modal-footer">
                     <button class="btn" data-dismiss="modal" aria-hidden="true">
                       Close
                     </button>
                     <button class="btn btn-primary" type="submit" name="Submit">
                       Update
                     </button>
                   </div>
                 </div>
               </form>
               </td>
               <td><button class="btn btn-info">Delete</button></td>
             </tr>
             <?php
            $sno++;
          }?>
           </tbody>
         </table>
         <div class="clearfix"></div>
       </div>
     </div>
   </div>
 </div>
</div>
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
            <li class="disabled">
              <a href="#">
                Prev
              </a>
            </li>
            <li class="active">
              <a href="#">
                1
              </a>
            </li>
            <li>
              <a href="#">
                2
              </a>
            </li>
            <li>
              <a href="#">
                3
              </a>
            </li>
            <li>
              <a href="#">
                4
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                5
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                6
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                7
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                8
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                9
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                10
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                11
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                12
              </a>
            </li>
            <li class="hidden-phone">
              <a href="#">
                Next
              </a>
            </li>
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
