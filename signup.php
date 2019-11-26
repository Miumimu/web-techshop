<?php
require "header.php";
 ?>

 <main>
   <div>
     <h1 style="text-align:center">SignUp</h1>
     <?php
        if (isset($_GET['error']))
        {
          if($_GET['error']=='emprtyFields'){
            echo '<p>Fill in all the fields!</p>';
          }
          else if ($_GET['error']=='invalidmailUid')
          {
            echo '<p>Invalid Mail And User Name';
          }
          else if ($_GET['error']=='invalidmail')
          {
            echo '<p>Invalid Mail</p>';
          }
          else if ($_GET['error']=='invalidUserId')
          {
            echo '<p>Invalid User Name</p>';
          }
          else if ($_GET['error']=='passwordDoesntMatch')
          {
            echo '<p>Password Does not Match</p>';
          }
          else if ($_GET['error']=='UserIdmatch')
          {
            echo '<p>User Taken</p>';
          }
          else if ($_GET['error'] =='sqlError')
          {
            echo '<p>Sql Error</p>';
          }
          else if ($_GET['signup']=='success')
          {
            echo '<p>Signup success</p>';
          }
        }

      ?>
     <form action="includes/signup.inc.php" method="post">
       <input  type="text" name="nameUserNew" placeholder="UserName"><br>
       <input  type="text" name="mailUserNew" placeholder="E-Mail"><br>
       <input type="password" name="pwdUserNew" placeholder="Password"><br>
       <input  type="password" name="pwdUserNew-repeat" placeholder="Confirm Password"><br>
       <button  type="submit" name="signup-submit">SignUp</button><br>
     </form>

   </div>
 </main>
