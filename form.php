<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="style.css">
    <title>Login||Sign up | Get Set Make</title>
</head>

<body>
    <form action="php\connection.php" method="post">
        <div class="section">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section pb-5 pt-5 pt-sm-2 text-center">
                            <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                            <label for="reg-log"></label>
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <!-- login part -->
                                                <h3 class="mb-4 pb-3">Log In</h3>
                                                <div class="form-group">
                                                    <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <input type="submit" class="btn mt-4" value="SUBMIT" />
                                                <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h3 class="mb-4 pb-3">Sign Up</h3>
                                                <div class="form-group">
                                                    <input type="text" name="signname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off" required>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="signemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="text" name="mobile" class="form-style" placeholder="Your Phone No." id="logemail" autocomplete="off" required>
                                                    <i class="input-icon uil uil-phone"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="signpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <input type="submit" class="btn mt-4" value="SUBMIT" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>

<?php

include 'php\connection.php';

?>