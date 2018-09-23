<?php include('loginServer.php') ?>
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
  <title>Log In</title>
  <!-- <link rel="StyleSheet" href="CSS/style.css"> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"> </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container-fluid main">
  <div class="row">
    <div class="col-md-4 col-sm-2 col-xs-12"></div>
  <div class="col-md-4 col-sm-2 col-xs-12">
      <form class="form-container" action="loginServer.php" method="post">

            <div class="row">
              <div class="col-md-6 col-sm-2 col-xs-12"></div>
              <div class="col-md-6col-sm-2 col-xs-12">
      <img src="Images/lgo.png" alt="Logo" class="img-circle" height="300" width="300" > <br>
      </div>
      </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
          <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            <?php if(isset($errors['email'])) { echo $errors['email']; } ?>
            </div>
            <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                          <?php if(isset($errors['password'])) { echo $errors['password']; } ?>
            </div>
            <br>
      <input type="submit" class="btn btn-success btn-block" id="gotoHome"  name="login_user" value="Log In"/>

    </form>
  </div>
    <div class="col-md-4 col-sm-2 col-xs-12"></div>
  </div>
</div>
</body>
</html>
