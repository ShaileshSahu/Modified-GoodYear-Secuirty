<?php include "./Extra/Header.php" ;?>
<?php include "./Database/Connection.php"?>
          <div class="row-fluid">
            <div class="span12">
              <ul class="breadcrumb-beauty">
                <li>
                  <a href="index.html"><span class="fs1" aria-hidden="true" data-icon="&#xe002;"></span> Dashboard</a>
                </li>
                <li>
                  <a href="#">Register Elements</a>
                </li>
              </ul>
            </div>
          </div>

          <br>




          <form class="form-control no-margin" action="Registration_data.php" method="post" enctype="multipart/form-data" >
          <div class="row-fluid"  style="transform: translate(200px,0px); width:100%">
            <div class="span6">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe023;"></span>Personal Details:
                  </div>
                </div>
                <div class="widget-body">

                       <!-- name  -->
                    <div class="control-group warning">
                      <label class="control-label" for="your-name">
                        Name
                      </label>
                      <div class="controls controls-row">
                        <input class="span12" id="your-name" name="emp_name" type="text" placeholder="Enter Full Name">

                      </div>
                    </div>

                    <!--  father name  -->
                    <div class="control-group success">
                      <label class="control-label" for="your-email">
                        Father's name
                      </label>
                      <div class="controls">
                        <input type="text" name="emp_father_name" id="fname" class="span12" placeholder="Enter Father name"  />
                      </div>
                    </div>
                    <div class="control-group">

                      <span class="span3 text-warning" style="font-size:15px;" >  Date of birth :-</span>
                      <div class="controls controls-row">
                        <input type="date" name="emp_dob"  placeholder="DATE OF BIRTH" />


                      </div>
                    </div>
                    <!--   account no.  -->
                    <div class="control-group success">
                      <label class="control-label" for="accno">
                        Account no:
                      </label>
                      <div class="controls">
                        <input type="text" name="emp_account_no" id="accno" class="span12" placeholder="Enter Account no."  />
                      </div>
                    </div>
                    <!--  ESIC no.  -->
                    <div class="control-group success">
                      <label class="control-label" for="esic">
                        ESIC no:
                      </label>
                      <div class="controls">
                        <input type="text" name="emp_esic_no" id="esic" class="span12" placeholder="Enter ESIC no."  />
                      </div>
                    </div>

                    <div class="control-group success">
                      <label class="control-label" for="esic">
                      PF no:
                      </label>
                      <div class="controls">
                        <input type="text" name="emp_pf_no" id="pfno" class="span12" placeholder="Enter PF no."  />
                      </div>
                    </div>


                    <div class="control-group success">
                      <label class="control-label">
                        Gender
                      </label>
                      <div class="controls">
                        <label class="radio inline">
                          <input type="radio" value="male" name="emp_gender" checked>
                          Male
                        </label>
                        <input type="radio" value="female" name="emp_gender" >
                        <label class="radio inline">
                          Female
                        </label>



                      </div>

<br>
<div>
                      <label class=" inline" for="designation">Designation</label>
                      <select class="controls success" name="emp_des">
                          <option value="S/G">S/G</option>
                          <option value="House Keeping">House Keeping</option>
                        </select>


                    </div>

                    <div class="control-group success">
                      <label class="control-label" for="uan">
                        UAN  no:
                      </label>
                      <div class="controls">
                        <input type="text" name="uan_no" id="uan" class="span12" placeholder="Enter UAN no."  />
                      </div>
                    </div>

                    <hr />
                    <!.. address ..>


                                        <div>
                                                              <label class="inline" for="designation">Site Name/Zone</label>
                                                              <select class="controls success" name="emp_site_name">

                                                            <?php include './Extra/Sitename_option.php'?>

</select>
  </div>



                    <div class="control-group success">
                      <label class="control-label" for="address">
                        Address:
                      </label>
                      <div class="controls">
                        <input type="text" name="emp_address" id="address" class="span12" placeholder="Enter Address Here"/>
                      </div>
                    </div>
                    <div ><label for="zip">Zip Code</label>




                <input type="number" name="zip"  class="span6" id="zip" placeholder="Zip code" />


                    </div>
                    <div>
                                          <label class=" inline" for="designation">State</label>
                                          <select class="controls success" name="city">
                                            <?php include "./Somemoreupdates/State.php"?>
                                            </select>


                                        </div>


                    <div>
                      <label for="contact"> Phone Number </label>
                      <input type="number" min="100000000" max="9999999999" id="contact" class="span12" name="emp_phn">

                    </div>
                    <hr/>

                    <label for="photo">Upload Photo </label>
                    <input type="file" name="file" class="span12" />
      <button type="submit" class="btn btn-info pull-right" name="register">Submit</button>
                    <div class="clearfix"></div>

                </div>
              </div>
            </div>

      </div>
      </form>
    </div>
    <footer style="transform:translate(0px, 150px);">
      <p class="copyright">&copy; Black Label Admin 2013</p>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
