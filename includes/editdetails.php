<?php
  if(isset($_POST['edit-now'])) {
    session_start();
    require 'dbconnect.php';

    // set variables from post
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
    $id = $_SESSION['ID'];

    if (empty($first) || empty($last) || empty($id) || empty($email)){
      header("Location: ../edit.php?empty_fields");
      mysqli_close($conn);
      exit();
    } else {
      // check if the input chatacters are valid, else redirect back
      if (!preg_match("/^[a-zA-Z]*$/", $first) || ! preg_match("/^[a-zA-Z]*$/", $last)) {
        header("Location: ../edit.php?invalid_input:fl");
        exit();
      } else {
        // check if email is valid, else redirect back
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header("Location: ../edit.php?invalid_input:email");
          exit();
        } else {
          // check if email is taken
          $sql = "SELECT * FROM user WHERE email = '$email' AND id IS NOT '$id'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          // if email is taken, redirect back
          if ($resultCheck > 0) {
            header("Location: ../edit.php?invalid_input:email_taken");
            mysqli_close($conn);
            exit();
          } else {
            $sql = "UPDATE user SET firstname='$first', surname='$last', dob='$dob', address='$address', postcode='$postcode', email='$email', phone='$phone' WHERE ID=$id";

            // if successful, update session & redirect with success, else redirect with error
            if (mysqli_query($conn, $sql)) {
              $_SESSION['last'] = $last;
              $_SESSION['first'] = $first;
              $_SESSION['address'] = $address;
              $_SESSION['dob'] = $dob;
              $_SESSION['email'] = $email;
              $_SESSION['postcode'] = $postcode;
              $_SESSION['phone'] = $phone;
              header("Location: ../edit.php?edit_successful");
              mysqli_close($conn);
              exit();
            } else {
              header("Location: ../edit.php?edit_failed");
              mysqli_close($conn);
              exit();
            }
          }
        }
      }
    }
  } else {
    echo 'post not set';
  }


 ?>
