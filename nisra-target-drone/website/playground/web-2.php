<?php
    $jsCode = '';
    $check = 0;
    if (isset($_POST['add_javascript'])) {
        $jsCode = $_POST['javaScript'];
    }

    if (substr($jsCode, 0, 5) == 'alert') {
        $check = 1;
        $flag = 'NISRA{Xss_is_great}';
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
        <div class="container">
            <div class="row g-5 align-items-center justify-content-center p-5">
                <!-- title -->
                <section class="col-12 text-center p-3">
                    <h1>JavaScript 就是如此的華麗，想不到吧~</h1>
                </section>
                
                <!-- JavaScript action block -->
                <section class="col-6 p-3">
                    <div class="row text-center">
                        <h2>如果你想改變旁邊的文字，你該怎麼改變?</h2>
                        <p>可以參考: <a href="https://www.w3schools.com/jsref/dom_obj_style.asp">https://www.w3schools.com/jsref/dom_obj_style.asp</a></p>
                        <h3>What is the JS of the button</h3>
                        <div class="col-6 action-block">
                            <button id="turn-blue">Turn Text color blue</button>
                            <p>
                                <code>text.style.color = "blue"</code><br>
                            </p>
                        </div>
                        <div class="col-6 action-block">
                            <button id="turn-bold">Trun Text bold</button>
                            <p>
                                <code>text.style.fontWeight = "bold"</code>
                            </p>
                        </div>
                        <div class="col-6 action-block">
                            <button id="change-size">Make Text size big</button>
                            <p>
                                <code>text.style.fontSize  = "xx-large"</code>
                            </p>
                        </div>
                        <div class="col-6 action-block overflow-auto">
                            <button id="do-something">Do Something</button>
                            <br>
                            <code><?php echo $jsCode; ?></code>
                            <form action="web-2.php" method="POST">
                                <section class="javaScript-code">
                                    <label for="javaScript">Anything else you want to addit?</label>
                                    <br>
                                    <textarea id="javaScript" name="javaScript" rows="5" cols="30"></textarea>
                                </section>

                                <section class="submission">
                                    <button type="submit" value="Update JavaScript" name="add_javascript">
                                        Update JavaScript
                                    </button>
                                </section>
                            </form>
                        </div>
                        <div class="col-12 action-block">
                            <button id="reset">Reset</button>
                        </div>
                    </div>
                </section>

                <!-- JavaScript show block -->
                <section class="col-6 text-center show-block">
                    <p id="change-me">The change will show here</p>
                </section>
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
<script>
    let text = document.getElementById("change-me");
    text.style.color = "black";
    text.style.fontWeight  = "normal";
    text.style.fontSize  = "medium";

    // change blue button
    let btn1 = document.getElementById("turn-blue");
    const turnTextBlue = () => text.style.color = "blue";
    btn1.onclick = turnTextBlue;

    // change blod button
    let btn2 = document.getElementById("turn-bold");
    const turnTextBold = () => text.style.fontWeight  = "bold";
    btn2.onclick = turnTextBold;

    // change size button
    let btn3 = document.getElementById("change-size");
    const turnTextSize = () => text.style.fontSize  = "xx-large";
    btn3.onclick = turnTextSize;

    let btn4 = document.getElementById("do-something");
    const turnText = () => { 
        if (<?php echo $check; ?>) {
            alert('<?php echo $flag; ?>');
        } else {
            <?php echo $jsCode; ?>;
        }
    };
    btn4.onclick = turnText;

    // reset button
    let btn5 = document.getElementById("reset");
    const resetText = () => {
        window.location.replace(window.location.href);  //刷新當前頁
    };
    btn5.onclick = resetText;
</script>
</html>
