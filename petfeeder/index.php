<?php
//if no login 
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <style>
    .header1 {
      width: 98%;
      margin: 5px auto 0px;
      color: white;
      background: #5F9EA0;
      text-align: center;
      border: 1px solid #B0C4DE;
      border-bottom: none;
      border-radius: 10px 10px 0px 0px;
      padding: 20px;
    }

    body {
      font: 14px sans-serif;
      text-align: center;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;

      margin: auto;
    }

    .card {
      /* Add shadows to create the "card" effect */
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      padding: 20px;
      border-radius: 5px;
      float: center;
      width: 900px;
      height: auto;
      margin-top: 50px;
    }

    .cardbar {
      /* Add shadows to create the "card" effect */
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      padding: 20px;
      border-radius: 5px;
      margin-top: 100px;
      float: center;
      width: auto;
      height: auto;
    }

    .cardh {
      /* Add shadows to create the "card" effect */
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      padding: 20px;
      border-radius: 5px;
      margin-top: 5px;
      float: center;
      width: 100%;
      height: 80px;
    }

    table,
    th,
    td {
      border: 1px solid black;
    }
  </style>

</head>

<body>

  <div class="header1">
    <h2><?php echo $_SESSION['username']; ?></h2>
  </div>
  <div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success">
        <h3>
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

    <?php endif ?>
  </div>

  <a href="logout.php">LOGOUT</a>
</body>

</html>
