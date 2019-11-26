<?php
require "header.php";
 ?>

 <main>
   <?php
   if (isset($_GET['error']))
   {
     if ($_GET['error'] == 'emptyfields')
     {
       echo '<p>Fill in all the Fields!</p>';
     }
     else if ($_GET['error']=='wrongpassword')
     {
       echo '<p>Password Does not Match</p>';
     }
     else if ($_GET['error']=='nouser')
     {
       echo '<p>Please SignUp First</p>';
     }
   }
   else if (isset($_SESSION['userID']))
   {
     echo "<p>You are Logged In</p>";
   }
  else{
      echo "<p>You are Logged Out</p>";
    }


  ?>

 </main>
