<?php
if (isset($_POST['signup-submit']))
{
  require "dbh.inc.php";
  $userName = $_POST['nameUserNew'];
  $email = $_POST['mailUserNew'];
  $password = $_POST['pwdUserNew'];
  $passwordRepeat = $_POST['pwdUserNew-repeat'];

  if ((empty($userName))|| (empty($email)) || (empty($password)) || (empty($passwordRepeat)))
  {
    header("Location: ../signup.php?error=emprtyFields&userid=".$userName."&mail=".$emai);
    exit();
  }
  else if ((!filter_var ($email,FILTER_VALIDATE_EMAIL)) && (!preg_match("/^[a-zA-Z0-9]*$/",$userName)))
  {
    header("Location: ../signup.php?error=invalidmailUid");
    exit();
  }
  else if (!filter_var ($email,FILTER_VALIDATE_EMAIL))
  {
    header("Location: ../signup.php?error=emprtyFields&userid=".$userName);
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/",$userName)){
    header("Location: ../signup.php?error=invalidUserId&mail=".$email);
    exit();
  }
  else if ($password !== $passwordRepeat)
  {
    header("Location: ../signup.php?error=passwordDoesntMatch&userid=".$userName."&mail=".$email);
    exit();
  }
  else {
    $sql = "SELECT UserName FROM user_info WHERE UserName=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql))
    {
      header("Location: ../signup.php?error=sqlError");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt,"s",$userName);
      mysqli_stmt_execute($stmt);
      $result=mysqli_stmt_store_result($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck=mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0)
      {
        header("Location: ../signup.php?error=UserIdmatch&mail=".$email);
        exit();
      }
      else {
        $sql = "INSERT INTO user_info (UserName,UserMail,Userpwd) VALUES(?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql))
        {
          header("Location: ../signup.php?error=sqlError");
          exit();
        }
        else {
          $hashedPwd = password_hash ($passwordRepeat,PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt,"sss",$userName,$email,$hashedPwd);
          mysqli_stmt_execute($stmt);
          header("Location: ../signup.php?signup=success");
          exit();
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
}
else {
  header("Location:../signup.php");
  exit();
}

 ?>
