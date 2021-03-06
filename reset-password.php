<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>
<!-- Header block -->
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Reset Password</span>
    </a>

</header>

<body>
<?php
          // Here we create an error message if the user made an error trying to sign up.
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emailnotexist") {
              echo '<p style = "color: red; text-align: center">That email does not exist!</p>';
            }
        }
?>
    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.wep');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Reset Password</h2>

                                <form action="includes/reset-request.php" method="POST">

                                    <div class="form-outline mb-4">
                                        <input type="text" name="email" class="form-control form-control-lg" placeholder ="Enter your email" />
                                        <label class="form-label" for="form3Example1cg">Email</label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <!-- <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button> -->
                                        <button  type="submit" name = "reset-request-submit" class="btn btn-primary">Reset Password</button>
                                    </div>
                                    

                                    <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="signin.php" class="fw-bold text-body"><u>Sign in</u></a></p>
                                    <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="index.php" class="fw-bold text-body"><u>Sign up</u></a></p>

                                </form>
                                <br>
                                <?php

                                if(isset($_GET["reset"])) {
                                    if($_GET["reset"] == "success") {
                                        echo '<p span style = "text-align: center"class="text-success">Check your email! Check your spam if not found.</p>';
                                    }
                                }

                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>