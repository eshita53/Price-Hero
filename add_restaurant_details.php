
<!DOCTYPE html>
<html>
<header>
<style>
.form-container{
    border: 0px solid; padding: 20px 60px;margin-top: 15vh;
    -webkit-box-shadow: -1px 2px 19px 5px rgba(0,0,0,0.75);
    -moz-box-shadow: -1px 2px 19px 5px rgba(0,0,0,0.75);
    box-shadow: -1px 2px 19px 5px rgba(0,0,0,0.75);
}
</style>

<title>Add Restaurant Details</title>
<link rel="stylesheet" href="messengerindexstyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"> </script>
<script src ="add_restaurant_details.js"></script>
</header>
<body>
<!-- <div class="container-fluid">
<div class="row">
<div class="col-md-4 col-sm-2 col-xs-12"></div>
<div class="col-md-4 col-sm-2 col-xs-12">
<div class="popup" onclick="myFunction()">
<form class="form-container" action="add_restaurant_details.php" method="post" id="add_restaurant_details">
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

<button class="closediv" onclick="signupdiv_hide()"> ADD RESTAURANT INFO</button>
</form>
</div>

<div class="col-md-4 col-sm-2 col-xs-12"></div>

</div>
</div>
</div> -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-sm-2 col-xs-12"></div>
    <div class="col-md-4 col-sm-2 col-xs-12" id="add_restaurant_details">
      <div class="modal" id="add_restaurant_details_modal" tabindex="-1">

      <div class="modal-dialong" id = "AddRestaurant">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal title">Restaurant details </h4>
          </div>
          <div class="modal-body">
            <form class="form-container" action="add_restaurant_details.php" method="post" >
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
              </form>
            </div>
            <div class="modal-footer">
            <button class="closediv" onclick="signupdiv_hide()"> ADD RESTAURANT INFO</button>
          </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>

<?php


$db = mysqli_connect('localhost', 'root', '12386199', 'registration') or die("connection error".mysqli_error($db));

if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $tin_number = mysqli_real_escape_string($db, $_POST['tinNumber']);
  $restaurant_name = mysqli_real_escape_string($db, $_POST['restaurantname'];
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $phone= mysqli_real_escape_string($db, $_POST['phone']);
  $reward_ratio = mysqli_real_escape_string($db, $_POST['rewardRatio']);
}
$query = "INSERT INTO restaurant_owner (tin_number, restaurant_name,restaurant_phone,location,reward_ratio)
      VALUES('$tin_number', '$restaurant_name', '$phone','$location','$reward_ratio')";



?>
