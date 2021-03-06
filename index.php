<?php
session_start();
include_once 'insert.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
<link href="css/bootstrap.min.css" rel="stylesheet" />
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <title>Register Form</title>
</head>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
    <svg class="bi me-2" width="40" height="32">
      <use xlink:href="#bootstrap"></use>
    </svg>
    <span class="fs-4">Registration</span>
  </a>
</header>
<main>
<body>
 
  <?php
          // Here we create an error message if the user made an error trying to sign up.
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {
              echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET["error"] == "emailexist") {
              echo '<p class="signuperror">This email is taken!</p>';
            }
            else if ($_GET["error"] == "wrong") {
              echo'<p class="signuperror">Wrong security answer please try again!';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "usertaken") {
              echo '<p class="signuperror">Username is already taken!</p>';
            }
            else if ($_GET["error"] == "passwordstrength") {
              echo'<p class="signuperror">Password is weak!';
              echo '<p class="signuperror">Your password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character!</p>';
            }
            else if ($_GET["error"] == "newpwd=pwdnotsame") {
              echo'<p class="signuperror">Passwords do not match!';
            }
            else if ($_GET["error"] == "newpwd=empty") {
              echo'<p class="signuperror">Empty password field!';
            }
            else if ($_GET["error"] == "access=denied") {
              echo'<p class="signuperror">Acces denied, please create an account and login to visit this page!';
            }
            else if ($_GET["error"] == "emailnotexist") {
              echo'<p class="signuperror">That email does not exist!';
            }
            // else if ($_GET["error"] == "wrong") {
            //   echo'<p class="signuperror">Wrong security answer please try again!';
            // }
          }
          // Here we create a success message if the new user was created.
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
            }
          }
          //password reset success message
          else if (isset($_GET["newpwd"])) {
            if ($_GET["newpwd"] == "passwordupdated") {
              echo '<p class="signupsuccess">Password reset successful!</p>';
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
                <h2 class="text-uppercase text-center mb-5">New User Sign Up</h2>

                <form class="row g-3" action="signup.php" method="POST">
                  <div class="col-md-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstname" required>
                  </div>
                  <div class="col-md-6">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastname" required>
                  </div>
                  <div class="col-md-6">
                    <label for="birthday" class="form-label">Birthday:</label>
                    <input type="date" class="form-control" name="birthday" required>
                  </div>
                  <div class="col-md-6">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" required>
                  </div>
                  <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                  </div>
                  <div class="col-md-12">
                    <label for="question" class="form-label">Provide an answer to a security question of your own and never forget it.</label>
                    <input type="password" class="form-control" name="question" required>
                  </div>
                  <div class="col-md-6">
                    <label for="password" class="form-label" >Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <span class="help-block">Use 8 or more characters with a mix of letters, numbers & symbols</span>
                    <!-- Realtime Password Validation -->
                    <div class="card mt-2 p-2 d-none" id="passwordValidation">
                      <p>Password needs: </p>
                      <ul>
                        <li class="text-danger" id="lowercase">A <b>lowercase</b> letter</li>
                        <li class="text-danger" id="uppercase">An <b>uppercase</b> letter</li>
                        <li class="text-danger" id="number">A <b>number</b></li>
                        <li class="text-danger" id="specialChar">A <b>special character</b></li>
                        <li class="text-danger" id="length">At least <b>8 characters</b></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" required>
                  </div>
                  <div class="g-recaptcha" data-sitekey="6LdEKLgfAAAAALKfvvk6pyZhTgeTF3Jj_NJXlyEh"></div>
                  
                  <div class="d-flex justify-content-center">
                    <!-- <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button> -->
                    <button type="submit" value="Submit" name="submit" class="btn btn-primary">Register</button>
                  </div>
                  <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="signin.php" class="fw-bold text-body"><u>Sign in</u></a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/passwordValidation.js"></script>
 <!-- <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
  </form>
  <form action="logout.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form> -->
      <div>
        <section>
          <?php
          // if(isset($_SESSION['id'])) {
          //   // echo '<p class = "loggedin"> You are logged in!</p>';
          //   header("Location: webpage.php");
          //   exit();
          // }
          // else {
          //   echo '<p class = "logout"> You are logged out!</p>';
          // }
          ?>
        </section>
      </div>
    </main>
</body>
</html>