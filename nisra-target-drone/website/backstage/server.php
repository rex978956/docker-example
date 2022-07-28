<?php
    session_start();

    $username = "";
    $email = "";
    $permission = "";

    if (isset($_GET['logout'])) {
        session_destroy();

        header("location: ../index.html");
        exit;
    }
    if (!isset($_SESSION['success'])) {
        $_SESSION['msg'] = "You must log in first";

        header('location: ../registration/register.php');
        exit;
    }

    $id = $_GET['id'];
    // connect to the database
    $db = mysqli_connect('mysql', 'user', 'password', 'nisra_target');
    $query = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);

    // user information
    $username = $user['username'];
    $email = $user['email'];
    $permission = $user['permission'];

    mysqli_close($db);
?>
