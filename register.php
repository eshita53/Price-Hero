<?php
include('signupServer.php')
// include('add_restaurant_details.php')
?>
<!DOCTYPE html>
<html>

<head>
  <style>
  *{background-color: #eccc68}
  .form-container{
    border: 0px solid; padding: 20px 60px;margin-top: 15vh;
    -webkit-box-shadow: -1px 2px 19px 5px rgba(0,0,0,0.75);
    -moz-box-shadow: -1px 2px 19px 5px rgba(0,0,0,0.75);
    box-shadow: -1px 2px 19px 5px rgba(0,0,0,0.75);
  }
  </style>
  <meta charset="utf-8">
  <title>Sign Up</title>
   <!-- <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
   <!-- <script src="js/jquery-1.11.0.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/wow.min.js"></script> -->

   <!-- <link rel="StyleSheet" href="CSS/style.css"> -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-3.3.1.min.js"></script>
   <script src="jquery-3.3.1.min.js"></script> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"> </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script type="text/javascript" src="add_restaurant_details.js">  </script>
</head>
<div class="container-fluid main">
  <div class="row">
    <div class="col-md-3 col-sm-2 col-xs-12"></div>
    <div class="col-md-6 col-sm-2 col-xs-12">
      <form class="form-container" action="register.php" method="post">

        <div class="row">
          <div class="col-md-3 col-sm-2 col-xs-12"></div>
          <div class="col-md-6 col-sm-2 col-xs-12">
            <img src="Images/lgo.png" alt="Logo" class="img-circle" height="300" width="300" > <br>
          </div>
          <div class="col-md-3 col-sm-2 col-xs-12"></div>
        </div>
        <label>Name</label>
        <input type="text" name="username" class="form-control" placeholder="Enter yout name" >
        <?php if(isset($errors['username'])) { echo $errors['username']; } ?>
        <br>
        <label>E-mail</label>
        <input type="text" name="email" class="form-control" placeholder="Enter your E-mail address">
        <?php if(isset($errors['email'])) { echo $errors['email']; } ?>
        <br>
        <label>Mobile no</label>
        <input type="tel" name="mobile" class="form-control" pattern="^\d{3}\d{3}\d{5}$"placeholder="Enter your mobile number">
        <?php if(isset($errors['mobile'])) { echo $errors['mobiile']; } ?>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter new password">
            <?php if(isset($errors['password'])) { echo $errors['password']; } ?>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <label>Retype password</label>
            <input type="password" name="confirmpassword" class="form-control" placeholder="Re-type password">
            <?php if(isset($errors['confirmpassword'])) { echo $errors['confirmpassword']; } ?>
          </div>
        </div>
        <br>
        <input type="radio" name="decider" value="Restaurant_Owner" /> Restaurant Owner<br>
        <input type="radio" name="decider" value="Food_Lover" /> Food Lover <br><br>

        <div id="add_restaurant_details">
          <label>TIN Number</label>
          <input type="text" name="tinNumber" class="form-control" placeholder="Enter your tin number" > <br>
          <label>Restaurant Name</label>
          <input type="text" name="restaurantname" class="form-control" placeholder="Enter yout restaurant name" ><br>
          <label>Location</label>
          <input type="text" name="location" class="form-control" placeholder="Enter yout restaurant location" ><br>
          <label>Phone</label>
          <input type="text" name="phone" class="form-control" placeholder="Enter yout restaurant phone number" ><br>
          <label>Reward ratio</label>
          <input type="text" name="rewardRatio" class="form-control" placeholder="Enter the ratio amount" > <br>
        </div>

        <input type="submit" class="btn btn-success btn-block" id="createAcc" name="reg_user" value="Submit"><br>

        <p>Already have an account? <a herf="login.php">Log In </a></p>

      </form>
    </div>
    <div class="col-md-3 col-sm-2 col-xs-12"></div>

  </div>
</div>

<body>
</body>
</html>
