<?php
if (isset($_POST['signup-now'])) {

    //include DB connection config
    require 'dbconnect.php';

    //escape POST to string and set values for variables
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $repass = mysqli_real_escape_string($conn, $_POST['repass']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);

//   echo($first.$last.$dob.$address.$postcode.$email.$phone.$pass);

//Error handlers
  //If empty fields are present then redirect with error code
  if (empty($first) || empty($last) || empty($email) || empty($pass)) {
    header("Location: ../signUp.php?MissedInputs");
    mysqli_close($conn);
    exit();
  } else if($pass != $repass){
    header("Location: ../signUp.php?PasswordsDontMatch");
    mysqli_close($conn);
    exit();
  } else {
    //Input charachters are invalid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
      header("Location: ../signUp.php?invalid_charachters");
      mysqli_close($conn);
      exit();
    } else {
      //Email validation if not redirect back
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signUp.php?error=invalid_email");
        mysqli_close($conn);
        exit();
      } else {
        //check if email is already taken
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          mysqli_close($conn);
          header("Location: ../signUp.php?EmailInUse");
          mysqli_close($conn);
          exit();
        } else {
          //Hashing the password
          $hashedpass = password_hash($pass, PASSWORD_DEFAULT);

          // insert into user table
          $sql = "INSERT INTO user (firstname, surname, email, password) VALUES ('$first', '$last', '$email', '$hashedpass');";
          if (mysqli_query($conn, $sql)) {
              //This allows for the DOB to not be empty and not crash the Insert Into statement
            if (isset($dob)) {
              $sql = "UPDATE user SET dob='$dob', address='$address', postcode='$postcode', phone='$phone' WHERE email='$email';";
              if (mysqli_query($conn, $sql)) {
                header("Location: ../landing.php?LoggedIn");
              } else {
                header("Location: ../index.php?SQL_Error");
                mysqli_close($conn);
                exit();
              }
            } else {
              $sql = "UPDATE user SET address='$address', postcode='$postcode', phone='$phone' WHERE email='$email';";
              if (mysqli_query($conn, $sql)) {
                header("Location: ../landing.php?LoggedIn");
              } else {
                header("Location: ../index.php?SQL_Error");
                mysqli_close($conn);
                exit();
              }
            }
            //fetch user id
            $sql = "SELECT ID,email FROM user WHERE email='$email'";
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
            // set the session variables
            session_start();
            $_SESSION['last'] = $last;
            $_SESSION['first'] = $first;
            $_SESSION['address'] = $address;
            $_SESSION['dob'] = $dob;
            $_SESSION['email'] = $email;
            $_SESSION['postcode'] = $postcode;
            $_SESSION['phone'] = $phone;
            $_SESSION['ID'] = $row['ID'];
            mysqli_close($conn);
          } else {
            header("Location: ../index.php?unabletosignup");
          }
        }
      }
    }
  }
}
}
} else {
  echo 'no post';
}
