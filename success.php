<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $link = mysqli_connect("localhost","root","");
    if(!$link)
    {
    die('Failed to connect to server: ' . mysql_error());
    }

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($link, $username);
    $password = mysqli_real_escape_string($link, $password);

    $db = mysqli_select_db($link, "login");
    if(!$db)
    {
    die("Unable to select database");
    }

    $result = mysqli_query($link,"select * from users where username = '$username' AND password = '$password'")
    or die("Failed to query database. ".mysqli_error());

    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password)
    {
       echo "Welcome ".$row['username'];
    }
    else {
      echo "Failed to login";
      header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet"type="text/css" href="stylesheet.css" />
<head>
  <title>Login</title>
</head>
<body>
  <div id="main-container">
    <!--  Welcome <?php echo $_POST['username']; ?> -->
    <div id="a-container">

    </div>
  </div>
</body>
</html>
