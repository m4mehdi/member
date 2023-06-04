
<?php
  session_start();
  echo($_SESSION['loggedin']);
  if(!isset($_SESSION['loggedin']))
    header("location: ../login.php");
?>

<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<link rel="stylesheet" href="style1.css">

<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">خانه</a>
 
  <a href="userlist.php">لیست کاربران</a>
  <a href="#" onclick="myFunction()">خروج</a>

</div>

<h1><?php echo(' سلام  '.$_SESSION['fullname'] . ' خوش آمدید ');?></h1>
<script>
  function myFunction() {
    <?php 
    session_destroy();    
    ?>
    location.reload();
  }
</script>