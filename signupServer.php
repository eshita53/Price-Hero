<?php
session_start();

// initializing variables
$username = $email=$mobile=$password=$confirmpassword=$owner_foodie = "";
$tin_number=$restaurant_name=$location= $phone=$reward_ratio= "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '12386199', 'registration') or die("connection error".mysqli_error($db));

// REGISTER USER
if ($_SERVER["REQUEST_METHOD"]=="POST") {

  // echo "here signupServer to test";
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);
  $owner_foodie = mysqli_real_escape_string($db, $_POST['decider']);

  $tin_number = mysqli_real_escape_string($db, $_POST['tinNumber']);
  $restaurant_name = mysqli_real_escape_string($db, $_POST['restaurantname']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $phone= mysqli_real_escape_string($db, $_POST['phone']);
  $reward_ratio = mysqli_real_escape_string($db, $_POST['rewardRatio']);



  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) {  $errors['username'] = "You must enter your name!"; }
  if (empty($email)) { $errors['email'] = "You must enter your E-mail!"; }
  if (empty($mobile)) { $errors['mobile'] = "Mobile number is required!" ; }
  if (empty($password)) {$errors['password'] = "You must enter your password!"; }
  if ($password != $confirmpassword) {$errors['confirmpassword'] ="The two passwords do not match!";}

  //
  // if (empty($tin_number)) {  $errors['tinNumber'] = "TIN number required"; }
  // if (empty($restaurant_name)) { $errors['restaurantname'] = "There must be a restaurant name"; }
  // if (empty($location)) { $errors['location'] = "Where is your restaurantname?" ; }
  // if (empty($phone) {  $errors['phone'] = "phone number please"; }
  // if ($reward_ratio) {$errors['rewardRatio'] ="Reward ratio please!";}



  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT type FROM user_auth WHERE  email='$email' LIMIT 1 ";
  $result = mysqli_query($db, $user_check_query);
  $userType = mysqli_fetch_assoc($result);

  if ($userType=='1') { // if user exists

    $foodLoverCheck="SELECT * FROM food_lover WHERE  email='$email' LIMIT 1";
    $foodLoverCheckResult=mysqli_query($db,$foodLoverCheck);
    $user=mysqli_fetch_assoc($foodLoverCheckResult);
    if ($user['name'] == $username) {
      $errors['username'] ="Username already exists";
    }
    if ($user['email'] == $email) {
      $errors['email'] ="email already exists";
    }
    if($user['mobile']==$mobile){
   $errors['mobile'] ="Mobile number already exists";
 }
  }
  if ($userType=='2') { // if user exists

    $RestaurantOwnerCheck="SELECT * FROM restaurant_owner WHERE  email='$email' LIMIT 1";
    $RestaurantOwnerCheckResult=mysqli_query($db,$RestaurantOwnerCheck);
    $owner=mysqli_fetch_assoc($RestaurantOwnerCheckResult);
    if ($owner['name'] == $username) {
      $errors['username'] ="Username already exists";
    }
    if ($owner['email'] == $email) {
      $errors['email'] ="email already exists";
    }
    if($owner['mobile']==$mobile){
   $errors['mobile'] ="Mobile number already exists";
 }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    echo "here all eoro free";
  	$password = md5($password);//encrypt the password before saving in the database

    // echo "decide ".$owner_foodie;
    if($owner_foodie=="Food_Lover"){
      $query ="INSERT INTO food_lover
          VALUES('$username','$email','$mobile','$password')";
      $sql = "INSERT INTO user_auth VALUES('$email','1')";

      mysqli_query($db,$query);
      mysqli_query($db,$sql);
      header("Location: foodLover_Home.php");
    }
    else{
      // echo "dotdot <br>";
      $restaurantquery ="INSERT INTO restaurant_owner
          VALUES('$username','$email','$mobile','$password','$tin_number','$restaurant_name','$location','$phone','$reward_ratio')";
      $auth_sql = "INSERT INTO user_auth VALUES('$email','2')";

      mysqli_query($db,$restaurantquery);
      mysqli_query($db,$auth_sql);
      header("Location: restaurantOwner_Home.php");
    }
  	$_SESSION['email'] =$email;
  	$_SESSION['success'] ="You are now logged in";
  	// header('location: index.php');
  }

}
?>
