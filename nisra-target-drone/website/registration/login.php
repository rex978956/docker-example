<?php include('./server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CrazyFire Lee, Cash Lu, Chess Kuo">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/styles/bootstrap.min.css">

    <!-- Custom styles for regisration -->
    <link rel="stylesheet" href="/styles/registration.css">
</head>
<body class="text-center">
    <main class="form-signin">
        <form action="login.php" method="POST">
            <a href="/"><img class="mb-4 p-1 rounded-circle" src="/images/logos/logo-sm.png" alt="nisra logo" width="72" height="72" style="background-color: #242528;"></a>
            <h1 class="h3 mb-3 fw-normal">Sign In</h1>

            <div class="form-floating">
                <input id="username" type="text" class="form-control" placeholder="Enter your username" name="username" required>
                <label for="username">Username</label>
            </div>

            <div class="form-floating">
                <input id="password" type="password" class="form-control login" placeholder="Enter your password" name="password" required>
                <label for="password">Password</label>
            </div>

            <div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" value="Sign In" name="login_user">
                    Sign in
                </button>
            </div>
        </form>

        <?php include('./errors.php'); ?>

        <hr>

        <a class="text-decoration-none" href="/registration/register.php">Not Member Yet?</a>
    </main>
</body>
</html>