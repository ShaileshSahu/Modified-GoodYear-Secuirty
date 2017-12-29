<?php include "./Database/Connection.php";?>

<?php 
$result =mysqli_query($data->connect(),"select * from guard_info");
if($result==null)
die("problem");
?>
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

 <!.. here goes the view content -->
    <h3 > <i> Employee View:-- </i></h3>
 <div class="widget">
   <div class="widget-header"></div>

   <div class="widget-body">
     <div class="navbar">
       <div class="navbar-inner">
         <div class="container">
           <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
             <span class="icon-bar">
             </span>
             <span class="icon-bar">
             </span>
             <span class="icon-bar">
             </span>
           </a>
           <a href="#" class="brand">
             Search-query
           </a>
           <div class="nav-collapse collapse navbar-responsive-collapse">
             <ul class="nav">
               <li class="dropdown">
                 <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                   Zonal
                   <b class="caret">
                   </b>
                 </a>
                 <ul class="dropdown-menu">
                   <li>
                     <a href="#">
                       South
                     </a>
                   </li>
                   <li>
                     <a href="#">
                       North
                     </a>
                   </li>
                   <li>
                     <a href="#">
                       East
                     </a>
                   </li>
                   <li>
                     <a href="#">
                       West
                     </a>
                   </li>

                 </ul>
               </li>
             </ul>
             <form class="navbar-search pull-left">
               <input type="text" placeholder="Search" class="search-query input-large">
             </form>
             <ul class="nav pull-right">
               <li class="divider-vertical">
               </li>
               <li class="dropdown">
                 <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                   Filter
                   <b class="caret">
                   </b>
                 </a>
                 <ul class="dropdown-menu">
                   <li>
                     <a href="#">
                       Name
                     </a>
                   </li>
                   <li>
                     <a href="#">
                       ESIC
                     </a>
                   </li>
                   <li>
                     <a href="#">
                       Account no.
                     </a>
                   </li>

                 </ul>
               </li>
             </ul>
           </div>
         </div>
       </div>
     </div>

</div>






 </div>

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
                  <td><?php echo $row['emp_phn'];?> </td>
               <td><button action="" class="btn btn-success">Monthly Update</button></td>
                     <td>
                 
                  <a href="#accSettings1" role="button" class="btn btn-small btn-primary hidden-tablet hidden-phone" data-toggle="modal" data-original-title="">
                    Update
                  </a>
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
         $sno++;         }?>
            </tbody>
          </table>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>


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
