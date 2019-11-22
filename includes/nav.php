<?php session_start(); ?>
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
<!--Double navigation-->
<body class="fixed-sn black-skin">

<header>
  <!-- Sidebar navigation -->
  <div id="slide-out" class="side-nav sn-bg-1 fixed">
    <ul class="custom-scrollbar">
      <!-- Logo -->
      <li>
        <div class="logo-wrapper waves-light">
          <a href="#"><img src="https://i.gyazo.com/3792d47ccfc42fa78a1edb8dd0fcb8b7.png" class="img-fluid flex-center"></a>
        </div>
      </li>
      <!--/. Logo -->
      <!--Search Form-->
      <li>
        <form class="search-form" role="search">
          <div class="form-group md-form mt-0 pt-1 waves-light">
            <input type="text" class="form-control" placeholder="Search">
          </div>
        </form>
      </li>
      <!--/.Search Form-->


    </ul>
    <div class="sidenav-bg mask-strong"></div>
  </div>
  <!--/. Sidebar navigation -->

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
    <!-- SideNav slide-out button -->
    <div class="float-left">
      <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
    </div>
    <!-- Breadcrumb-->
    <div class="breadcrumb-dn mr-auto">
      <p>AutoMarket - Skrrrrt Skrrrrt On Down</p>
    </div>
    <?php echo "<li><a href='#'>Welcome ".$_SESSION['first']."   ".$_SESSION['last']."</a></li>"; ?>
    <ul class="nav navbar-nav nav-flex-icons ml-auto">
      <li class="nav-item">
        <a class="nav-link" href='index.php'><i class="fas fa-sign-out-alt"></i> <span class="clearfix d-none d-sm-inline-block white-text">Logout</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='landing.php'><i class="fas fa-home"></i> <span class="clearfix d-none d-sm-inline-block white-text">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='edit.php'><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block white-text">Edit Account</span></a>
      </li>

    </ul>
  </nav>
  <!-- /.Navbar -->

<!--/.Double navigation-->
