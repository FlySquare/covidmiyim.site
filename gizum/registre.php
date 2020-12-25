<?php 
require "conn.php";
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["psw"];
$mobile = $_POST["mobile"];
$gender = $_POST["gender"];
$username = "Abdo"; $email = "abdelhamid@yahoo.com"; $password = "123456"; $mobile = "01222225522"; $gender = "Male";
$isValidEMail = filter_var($email , FILTER_VALIDATE_EMAIL);
if($conn){
if(strlen($password ) > 40 || strlen($password ) < 6){
echo "Password length must be more than 6 and less than 40";
}
else if($isValidEMail === false){
echo "This Email is not valid";
}else{
$sqlCheckUname = "SELECT * FROM users_table WHERE username LIKE '$username'";
$u_name_query = mysqli_query($conn, $sqlCheckUname);
$sqlCheckEmail = "SELECT * FROM users_table WHERE email LIKE '$email'";
$email_query = mysqli_query($conn, $sqlCheckEmail);
if(mysqli_num_rows($u_name_query) > 0){
echo "User name allready used type another one";
}else if(mysqli_num_rows($email_query) > 0){
echo "This Email is allready registered";
}else{
$sql_register = "INSERT INTO users_table (username,email,password,phone,gender) VALUES ('$username','$email','$password','$mobile','$gender')";
if(mysqli_query($conn,$sql_register)){
echo "You are registered successfully";
}else{
echo "Failed to register you account";
}
}
}
}
else{
echo "Connection Error";
}
?>