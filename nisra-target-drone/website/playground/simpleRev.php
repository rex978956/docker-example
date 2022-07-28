<?php
    $userInput = '';
    if (isset($_POST['submit_code'])) {
        $key = $_POST['code'];
        $keyArray = str_split($key);
        foreach($keyArray as $character){
            $userInput .= chr(ord($character) + 1);
        }

        if ($userInput == 'UIJT.JT.ZPVS.GMBH') {
            $flag = 'The flag is: NISRA{DA_DA_DA_DA_U_HUEI}';
        } else {
            $flag = 'Sorry, the answer is incorrect';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CrazyFire Lee, Cash Lu, Chess Kuo">

    <title>Playground</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/styles/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/styles/styles.css">
</head>

<body>
    <header class="text-center">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/images/logos/logo-sm.png" alt="nisra logo" width="35" height="35">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link px-2 text-secondary" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-2 text-white" href="/members.html">Members</a></li>
                        <li class="nav-item"><a class="nav-link px-2 text-white" href="/events.php">Events</a></li>
                        <li class="nav-item"><a class="nav-link px-2 text-white" href="/playground.html">Playground</a></li>
                    </ul>

                    <button class="btn btn-outline-light me-2 justify-content-end" type="button">
                        <a class="text-decoration-none text-white" href="/registration/login.php">Login</a>
                    </button>
                    <button class="btn btn-outline-warning me-2 justify-content-end" type="button" >
                        <a class="text-decoration-none text-warning" href="/registration/register.php">Sign-Up</a>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container p-3">
            <div class="row g-5 align-items-center justify-content-center p-3">
                <div class="col-md-8 text-center p-3">
                    <h1>貓咪大戰爭牛肉麵~大~大~大優惠</h1>

                    <p>
                        貓咪大戰爭六周年，NISRA也要給你優惠，只要輸入優惠碼就給你Flag! <br>
                        (偷偷跟你說，之前我用simple-rev這支程式測試過，不過我把它藏在我的電腦根目錄的/flag.txt裡了) <br>
                        輸入優惠碼的輸入框(長度為12)，和一支check禮包碼的php
                    </p>

                    <form action="simpleRev.php" method="POST">
                        <section class="user-code">
                            <label for="code">The code you get?</label>
                            <br>
                            <input id="code" type="text" placeholder="Enter your code" name="code" required>
                        </section>

                        <section class="submission">
                            <button type="submit" value="Check Code" name="submit_code">
                                Check Code
                            </button>
                        </section>
                    </form>

                    <hr>

                    <?php if (isset($_POST['submit_code'])) { ?>
                        <p><?php echo $flag; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center text-lg-start text-muted">
        <div class="container">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>

                <div class="text-end">
                    <a class="nav-link text-secondary" href="https://www.facebook.com/N15RA">
                        <img src="/images/icons/facebook.svg" alt="facebook icon" width="20">
                        <span>www.facebook.com/N15RA</span>
                    </a>
                </div>
            </section>
    
            <!-- Copyright -->
            <div class="text-center p-4 copyright">
                © 2021 Copyright:
                <a class="text-white" href="https://www.nisra.net/">www.nisra.net</a>
            </div>
        </div>
    </footer>

    <script src="/scripts/bootstrap.bundle.min.js"></script>
</body>
</html>
