<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">


    <title>Login</title>



</head>
</head>
<body class="animsition">
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">

                    <section class="signup-form">
                        <div class="login-form">
                            <form action="include/login.inc.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="pwd" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" name="submit" type="submit">sign in</button>
                            </form>
                        </div>
                        <?php
                        if(isset($_GET["error"])){

                            if ($_GET["error"] == "emptyinput") {
                                echo "<p>Fill in all field!</p>";
                            }
                            else if ($_GET["error"] == "wronglogin") {
                                echo "<p>Incorrect Login Information! </p>";
                            }
                        }
                        ?>
                    </section>
                </div>
            </div>
        </div>
    </div>

</div>


</body>

</html>