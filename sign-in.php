<?php

require('./views/theme.php');
require('./views/nav.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in | travels</title>
</head>

<body>

    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow ">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="mb-4">

                            <h1 class="mb-1 fw-bold">Sign in</h1>
                            <span>Don’t have an account? <a href="sign-up.php" class="ms-1">Sign up</a></span>
                        </div>
                        <!-- Form -->
                        <form action="./controllers/login.php" method="post">
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Username</label>
                                <input type="text" id="usuario" class="form-control" name="usuario" placeholder="Username" required="">
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Password</label>
                                <input type="password" id="contrasena" class="form-control" name="contrasena" placeholder="**************" required="">
                            </div>
                            <!-- Checkbox -->
                            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberme">
                                    <label class="form-check-label " for="rememberme">Remember me</label>
                                </div>
                                <div>
                                    <a href="#">Forgot your password?</a>
                                </div>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary ">Sign in</button>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="mt-4 text-center">
                                <!--Facebook-->
                                <a href="#" class="btn-social  btn-facebook">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <!--Twitter-->
                                <a href="#" class="btn-social  btn-twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <!--LinkedIn-->
                                <a href="#" class="btn-social  btn-linkedin">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <!--GitHub-->
                                <a href="#" class="btn-social  btn-github">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>