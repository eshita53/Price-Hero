<?php
session_start();
$cookie_name="users";
$db = mysqli_connect('localhost', 'root', '12386199', 'registration') or die("connection error".mysqli_error($db));

 if (isset($_POST['login_user']))  {
$email=$_POST['email'];
$password=$_POST['password'];
$email=stripcslashes($email);
$password=stripcslashes($password);
$password=md5($password);



$query = "SELECT type FROM user_auth WHERE email='$email' ";
$result = mysqli_query($db,$query);
if(!$result){
  die ("Query is failed".mysqli_error($db));
}
$temp = mysqli_fetch_array($result);

if($temp['type']=="1"){
  $sqli="SELECT * FROM food_lover WHERE email='$email' AND password='$password'";
  $sqlianswer=mysqli_query($db,$sqli);
  if(!$sqlianswer){
  	die ("Query is failed".mysqli_error($db));
  }
  $row=mysqli_fetch_array($sqlianswer);
  if($row['email']==$email && $row['password']==$password){
    // echo "here matches";
        header("Location: foodLover_Home.php");
  } else{
  	header("location:login.php");
  }

}
else{
  $check="SELECT * FROM restaurant_owner WHERE email='$email' AND password='$password'";
  $queryresult=mysqli_query($db,$check);
  if(!$queryresult){
    die ("Query is failed".mysqli_error($db));
  }
  $row1=mysqli_fetch_array($queryresult);
  if($row1['email']==$email && $row1['password']==$password){
      header("Location: restaurantOwner_Home.php");
  } else{
    header("location:login.php");
  }
  }
  $cookie_value=$email;
  setcookie($cookie_name,$cookie_value,time() + (60*60*7),"/");
  $_SESSION['email']=$email;

// echo $email;
// echo $password;
// echo "<br>";
// echo $row['email'];
// echo $row['password'];
// echo "here everything after showing ";

}
mysqli_close($db);
?>
