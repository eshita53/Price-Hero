<?php
  session_start();

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <style>
  /* *{background-color: #eccc68} */
  .block {
      /* border: 1px solid red; */
      text-align: center;
      vertical-align: middle;
  }
  .circle {
      background: #f6b93b;
      border-radius: 300px;
      color: white;
      height: 300px;
      font-weight: bold;
      width: 300px;
      display: table;
      margin: auto;
  }
  .circle p {
      vertical-align: middle;
      display: table-cell;
  }
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
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
       <a href="index.php" id="appLogoName" class="navbar-brand"><img src="Images/lgo.png"class="img-circle" height="45" width="50"></img></a>
      </div>

    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <!-- <li><a href="#">Review</a></li> -->
        <li><a href="#">Notification</a></li>
        <li><a href="#">Profile</a></li>
      </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More<span class="caret"></span></a>
         <ul class="dropdown-menu">
       <li>
         <a href="#">About Us</a>
       </li>
       <li>
         <form>
            <button type="submit" < a herf="login.php"  class="btn btn-link btn-logout" >> </a>  Logout </button>
          </form>
          <!-- <a href="register.php">Logout</a> -->
        </li>


       <!-- <div class="dropdown">
         <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
         <span class="caret"></span></button>
         <ul class="dropdown-menu">
           <li><a href="#">HTML</a></li>
           <li><a href="#">CSS</a></li>
           <li><a href="#">JavaScript</a></li>
           <li class="divider"></li>
           <li><a href="#">About Us</a></li>
         </ul>
       </div> -->

     </ul>
   </li>
    </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="row">
        <div class="col-md-2 block">
           <div class="circle">
               <p>hello</p>
           </div>
       </div>
      <div class="col-md-4 col-sm-2 col-xs-12">

       <?php
        // require_once'vendor/autoload.php';
        // use Endroid\QrCode\QrCode;
        // $qrCode = new QrCode('hello');
        // header('Content-Type: '.$qrCode->getContentType());
        echo "Hello from Restaurant owner";
         ?>

      </div>
      </div>
      </div>
    </body>
      </html>
