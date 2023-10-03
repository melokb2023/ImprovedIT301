<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ecommerce');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['AdminUsername']);
    $email = mysqli_real_escape_string($db, $_POST['AdminEmail']);
    $password_1 = mysqli_real_escape_string($db, $_POST['AdminPassword']);
    $password_2 = mysqli_real_escape_string($db, $_POST['AdminConfirmPassword']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM adminlogin WHERE AdminUsername='$username' OR AdminEmail='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['AdminUsername'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['AdminEmail'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database

        $query = "INSERT INTO users (AdminUsername, AdminEmail, AdminPassword,AdminConfirmPassword) 
  			  VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['AdminUsername'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($db, $_POST['AdminUsername']);
        $password = mysqli_real_escape_string($db, $_POST['AdminPassword']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM adminlogin WHERE AdminUsername='$username' AND AdminPassword='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['AdminUsername'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: product.php');
            } else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }

}
  ?>