<?php date_default_timezone_set('America/Los_Angeles'); ?>
<?php 
include_once 'insert.php';
session_start();
if (empty($_SESSION['id']) || $_SESSION['email'] == '') {
    header("Location: index.php?error=access=denied");
    die();
  }
  

    echo '<p class = "loggedin"> You are logged in!</p>';
  
    $user = $_SESSION['id'];
    $firstName = $_SESSION['firstname'];
    $lastName = $_SESSION['lastname'];
    $numLogins = $_SESSION['numLogins'];
    $loginDate = $_SESSION['loginDate'];
    // echo '<p style = "text-align:center">Welcome user: </p>' . $firstName .'&nbsp'. $lastName;
  
?>
<!DOCTYPE html>
<html>
<head>
  
<link href="css/bootstrap.min.css" rel="stylesheet" />
<style>

</style>
<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <title></title>
</head>


<!-- <form class = "logout2" action="logout.php" method="post" class = "logoutbutton">
            <button type="submit" name="login-submit">Logout</button>
</form> -->

<body>
  <div class="d-flex justify-content-center">
    <div class="card" style="width: 80rem;">
        <!-- resetPassq branch -->
       <!-- <div class="card-body">
            <div class="d-flex justify-content-center">
          <h5 class="card-title">Hi user <?php echo $firstName . '&nbsp' . $lastName?> you are logged in!</h5>
          </div>
          <div class="d-flex justify-content-center">
          <h5 class="card-title"><?php echo $firstName . '&nbsp' . $lastName?> has been logged in "#" amount of times and your last login date was</h5>
          </div> -->
          <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
        <!--  <div class="d-flex justify-content-center"> -->

      <div class="card-body">
        <div class="d-flex justify-content-center">
          <h5 class="card-title">Hi <?php echo $firstName . '&nbsp' . $lastName?> you are logged in!</h5>
        </div>
        <div class="d-flex justify-content-center">
          <h5 class="card-title">You have logged in <?php echo $numLogins?> times and your last login date was <?php echo $loginDate?></h5>
        </div>
        <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
        <div class="d-flex justify-content-center">

          <p class="card-text"><a href="company_confidential_file.txt" download>Company Confidential File!</a></p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="d-flex justify-content-center">
    <form class = "logout2" action="logout.php" method="post" class = "logoutbutton">
          <button type="submit" name="login-submit" class="btn btn-primary">Logout</button>
    </form>
  </div>
</body>
</html>
