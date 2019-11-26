<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>

      <nav>
        <ul>
          <li> <a href="header.php">HOME</a> </li>
          <li> <a href="#">Portfolio</a> </li>
          <li> <a href="#">About</a> </li>
          <li> <a href="#">Contact</a> </li>
        </ul>
        <div>
          <?php
          if (isset($_SESSION['userID']))
          {
            echo '<form  action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit">Logout</button>
            </form>';
          }
          else{
           echo '<form action="includes/login.inc.php" method="post">
             <input type="text" name="mailUser" placeholder="Username/Email...">
             <input type="password" name="pwdUser" placeholder="Password...">
             <button type="submit" name="login-submit">Login</button>
           </form>
           <a href="signup.php">SignUp</a>';
         }
           ?>

        </div>
      </nav>
    </header>

</body>
</html>
