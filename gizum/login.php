<?php                                                                                                                                                                              require "conn.php";
$email = $_POST["email"];
$password = $_POST["psw"];
$email = "abdo@gmail.com"; $password = "123456";
$isValidEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
if($conn){
if( $isValidEmail === false){
echo "This Email is not valid";
}else{
$sqlCheckEmail = "SELECT * FROM users_table WHERE email LIKE '$email'";
$usernameQuery = mysqli_query($conn,$sqlCheckEmail);
if(mysqli_num_rows($usernameQuery) > 0){
$sqlLogin = "SELECT * FROM users_table WHERE email LIKE '$email' AND password LIKE '$password'";
$loginQuery = mysqli_query($conn,$sqlLogin);
if(mysqli_num_rows($loginQuery) > 0){
echo "Login Success";
}
else{
echo "Wrong Password";
}
}else{
echo "This Email is not registered";
}
}
}
else{
echo "Connection Error";
} ?>