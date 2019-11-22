
<body>
  <?php
    include('includes/nav.php');

    if (empty($_SESSION['first'])){
      // header("Location: ../index.php?error=NotLogged"); //User will not be able to access if not logged in
      echo '<h1>no session</h1>';
    }
    $sesh_fname = $_SESSION['first'];
    $sesh_sname = $_SESSION['last'];
    $sesh_dob = $_SESSION['dob'];
    $sesh_address = $_SESSION['address'];
    $sesh_postcode = $_SESSION['postcode'];
    $sesh_email = $_SESSION['email'];
    $sesh_phone = $_SESSION['phone'];
  ?>
  <!--Main Navigation-->
  <section>
    <!--Intro Section-->
    <section class="view intro-2">
      <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

              <!--Form with header-->
              <div class="card wow fadeIn" data-wow-delay="0.3s">
                <div class="card-body">

                  <!--Header-->
                  <div class="form-header automarket-gradient">
                    <h3><i class="mt-2 mb-2"></i>AutoMarket</h3>
                  </div>

                  <!--Body-->
                  <form id ="registerUsr" method ="post" action="includes/editdetails.php" class ="needs-validation">
                  <div class="form-row">
                      <div class="col">

                          <!-- First name -->
                          <div class="md-form">
                              <i class=" fas fa-user-tie prefix"></i>
                              <input type="text" name="first" style="color: #ffffff" id="materialRegisterFormFirstName" class="form-control" value="<?php echo $sesh_fname ?>">
                              <label for="materialRegisterFormFirstName">First name</label>
                          </div>
                      </div>
                      <div class="col">

                          <!-- Last name -->
                          <div class="md-form">
                              <i class=" fas fa-user-tie prefix"></i>
                              <input type="text" name="last" style="color: #ffffff" id="materialRegisterFormLastName" class="form-control" value="<?php echo $sesh_sname ?>">
                              <label for="materialRegisterFormLastName">Last name</label>
                          </div>
                      </div>
                  </div>
                  <!--Address -->
                  <div class="md-form mt-0">
                      <i class=" fas fa-map-pin prefix"></i>
                      <input type="text" name="address" style="color: #ffffff" id="materialRegisterFormEmail" class="form-control" value="<?php echo $sesh_address ?>">
                      <label for="materialRegisterFormEmail">Address</label>
                  </div>

                  <!--Post Code -->
                  <div class="md-form mt-0">
                      <i class=" fas fa-map-pin prefix"></i>
                      <input type="text" name="postcode" style="color: #ffffff" id="materialRegisterFormEmail" class="form-control" value="<?php echo $sesh_postcode ?>">
                      <label for="materialRegisterFormEmail">Postcode</label>
                  </div>

                  <!-- E-mail -->
                  <div class="md-form mt-0">
                      <i class=" fas fa-envelope prefix"></i>
                      <input type="email" name="email" style="color: #ffffff" id="materialRegisterFormEmail" class="form-control" value="<?php echo $sesh_email ?>">
                      <label for="materialRegisterFormEmail">E-mail</label>
                  </div>

                    <!-- DOB -->
                    <div class="md-form mt-0">
                      <i class=" fas fa-calendar-day prefix"></i>
                      <input type="date" name="dob" style="color: #ffffff" id="materialRegisterFormEmail" class="form-control" value="<?php echo $sesh_dob ?>">
                      <label for="materialRegisterFormEmail">Date Of Birth</label>
                  </div>


                  <!-- Phone number -->
                  <div class="md-form">
                      <i class="fas fa-mobile-alt prefix"></i>
                      <input type="text" name="phone" style="color: #ffffff" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" value="<?php echo $sesh_phone ?>">
                      <label for="materialRegisterFormPhone">Phone number</label>
                  </div>
                   <!-- Sign up button -->
                  <div class="text-center white-text">
                      <button class="btn automarket-gradient btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" id="edit-now" name="edit-now" type="submit">Sign in</button>
                    <hr>
                  </div>

                </div>
              </div>
              <!--/Form with header-->
              </form>
              <!-- Password -->
              <!-- <div class="md-form">
              <i class="fas fa-lock prefix"></i>
              <input type="password" name="pass" style="color: #ffffff" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
              <label for="materialRegisterFormPassword">Password</label>
              <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-center white-text text-muted mb-4">
              At least 8 characters and 1 digit
            </small>
          </div> -->

          <!-- Password -->
          <!-- <div class="md-form">
          <i class="fas fa-lock-open prefix"></i>
          <input type="password" name="repass" style="color: #ffffff"  id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
          <label for="materialRegisterFormPassword">Re-enter Password</label>
          <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-center white-text text-muted mb-4">
          Must Match Password
        </small>
      </div> -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </section>
  <!--Main Navigation-->


  <!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script>
    new WOW().init();

  </script>
  </header>
</body>

</html>
