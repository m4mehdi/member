<?php
require_once 'db.php';

if(isset($_POST['do-register'])){
    $Fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $insert=mysqli_query($db ,"INSERT INTO userlist(Fullname, Username, email, password) VALUES ('$Fullname','$username','$email','$password')");
    if($insert){
      header("location: ../login.php");
    }else {
      echo "no";
    }
  }

  // check login
  if(isset($_POST['do-login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $checkuser=mysqli_query($db,"SELECT * FROM userlist WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($checkuser) > 0){
      session_start();
      $_SESSION['loggedin']=$username;
      header("location: ../index.php");
    }else {
      echo "<script>alert('نام کاربری یا کلمه عبور اشتباه است');</script>";
    }
  }
  function checklogin(){
  session_start();
if(!isset($_SESSION['loggedin'])){
  header("location: login.php");
}}