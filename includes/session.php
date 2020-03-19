
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include_once 'dbconnection.php';
$connection=connection();
////session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// echo "<pre>";
// print_r($_SESSION);
// exit;
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select *from users where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];
$login_id=$row['id'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
////header('Location: index.php'); // Redirecting To Home Page
}
?>