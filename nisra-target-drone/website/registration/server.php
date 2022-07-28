<?php
    session_start();

    // initialize variables
    $username = "";
    $email = "";
    $permission = 0;
    $errors = array();

    // connect to the database
    $db = mysqli_connect('mysql', 'user', 'password', 'nisra_target');

    // check database connection
    if (!$db) {
        die("Error connect to mysql, " . mysqli_connect_error());
    }

    // REGISTER USERS
    if (isset($_POST['reg_user'])) {
        
        // receive all input values from the from
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_check = $_POST['password_check'];

        // make check work check in html too
        // form validation: ensure that the form pass correctly ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($username) || empty($email) || empty($password) || ($password != $password_check)) {
            array_push($errors, "Data pass lost...");
        }

        // check the database to make sure username and/or email
        // is not already exist.
        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            if ($user['username'] === $username) {
                array_push($errors, "Username already exists");
            }

            if ($user['email'] === $email) {
                array_push($errors, "email already exists");
            }
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password);

            $query = "INSERT INTO users (username, password, email, permission)
                        VALUES('$username', '$password', '$email', '$permission')";
            mysqli_query($db, $query);
            $_SESSION['success'] = "You are now logged in";

            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $results = mysqli_query($db, $query);
            $results = mysqli_fetch_assoc($results);

            $url = "../backstage/index.php?id=".$results['id'];
            header('location: '.$url);
            exit;
        }
    }

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        // $username = mysqli_real_escape_string($db, $_POST['username']);
        // $password = mysqli_real_escape_string($db, $_POST['password']);
        // to set a sqli vulnerability, no any check of input
        $username = $_POST['username'];
        $password = $_POST['password'];

        // make check work check in html too
        if (empty($username) || empty($password)) {
            array_push($errors, "Data pass lost...");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $results = mysqli_query($db, $query);

            if (mysqli_num_rows($results) != 0) {
                $results = mysqli_fetch_assoc($results);
                $_SESSION['success'] = "You are now logged in";
                $url = "../backstage/index.php?id=".$results['id'];

                header('location: '.$url);
                exit;
            } else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }
?>
