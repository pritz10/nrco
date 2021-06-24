<?php
   include('db.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($connect,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $_SESSION['start'] = time(); // Taking now logged in time.
   // Ending a session in 30 minutes from the starting time.
   $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
   if(!isset($_SESSION['login_user'])){
      header("location:getin.php");
      die();
   }
   
?>