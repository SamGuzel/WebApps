<?php
// if login button pressed
if (isset($_POST['login-now'])) {
  //include the database connections
  require 'dbconnect.php';
  // save login details from post in variables
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);

  if (empty($email) || empty($pass)) {
    header("Location: ../index.php?errorA");
    echo "error a";
    mysqli_close($conn);
    exit();
  }
  else {
    // finding right user in db
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $checkResult = mysqli_num_rows($result);

    // if no user exists
    if ($checkResult < 1) {
        header("Location: ../index.php?login=errorB");
        echo "error b";
        mysqli_close($conn);
        exit();
    } else {
        // if there is a match
        if ($row = mysqli_fetch_assoc($result)) {
            // verify pass
            $checkHashedPwd = password_verify($pass, $row['password']);
            // incorrect password
            if ($checkHashedPwd == false) {
                header("Location: ../index.php?errorC");
                echo "error c";
                mysqli_close($conn);
                exit();
            } elseif ($checkHashedPwd == true) {
              //if pass match then set user details to session
                session_start();
                $_SESSION['ID'] = $row['ID'];
                $_SESSION['first'] = $row['firstname'];
                $_SESSION['last'] = $row['surname'];
                $_SESSION['dob'] = $row['dob'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['postcode'] = $row['postcode'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['phone'] = $row['phone'];
                header("Location: ../landing.php?logged_in");
                mysqli_close($conn);
                exit();
            }
        }
    }
  }
// if logout button pressed
} elseif (isset($_POST['logout-now'])) {
    require 'dbconnect.php';
    session_start();
    if (isset($_SESSION['ID'])) {
      session_unset();
      session_destroy();
      mysqli_close($conn);
      header("Location: ../index.php?SuccessfullyLoggedOut");
      exit();
    }
}
else {
  echo 'not posting'.$_SESSION['ID'];
}

 ?>
