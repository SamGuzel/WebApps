
<html lang="en">


<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>AutoMarketplace.UK</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
   <!-- Material Design Bootstrap -->
   <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <!--Main Navigation-->
  <header>
    <!--Intro Section-->
    <section class="view intro-2">
      <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

              <!--Form with header-->
            <form id ="Login" method ="post" action="includes/login.php">
              <div class="card wow fadeIn" data-wow-delay="0.3s">
                <div class="card-body">

                  <!--Header-->
                  <div class="form-header automarket-gradient">
                    <h3><i class="fas fa-hand mt-2 mb-2"></i> Welcome To AutoMarket</h3>
                  </div>

                  <!--Body-->
                  <div class="md-form">
                    <i class="fas fa-envelope prefix white-text"></i>
                    <input type="text" name="email" id="orangeForm-email" class="form-control">
                    <label for="orangeForm-email">Your email</label>
                  </div>

                  <div class="md-form">
                    <i class="fas fa-lock prefix white-text"></i>
                    <input type="password" name="pass" id="orangeForm-pass" class="form-control">
                    <label for="orangeForm-pass">Your password</label>
                  </div>

                  <div class="text-center white-text">
                    <a href="signUp.php" class="btn automarket-gradient btn-lg">Sign up</a>
                    <button class="btn automarket-gradient btn-lg id="login-now" name="login-now" type="submit"">Login</button>
                    <hr>
                  </div>

                </div>
              </div>
              <!--/Form with header-->

            </div>
          </div>
        </div>
      </div>
    </section>

  </header>
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
</body>

</html>
