<!-- Design by foolishdeveloper.com cc-->

<?php
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
$user = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @media only screen and (max-width: 600px) {
      body {
        zoom: 65%;
      }
    }

    html {
      font-family: Arial;
      display: inline-block;
      text-align: center;
    }

    body {
      max-width: 900px;
      margin: 0px auto;
      padding-bottom: 25px;
    }

    .topnav {
      overflow: hidden;
      background-color: #0A1128;
      width: 500px;



    }


    .content {
      padding: 5%;
    }

    h1 {
      font-size: 1.8rem;
      color: white;
    }

    .card-grid {
      max-width: 400px;
      margin: 0 auto;
      display: grid;

      grid-gap: 2rem;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    }

    .card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 2px 2px 12px 1px rgba(140, 140, 140, .5);
    }

    .maindiv {
      background-color: white;
      margin-top: 20px;
      border-radius: 40px;
      width: 500px;
      height: 600px;
      box-shadow: 2px 2px 12px 1px rgba(140, 140, 140, .5);
    }

    .card-title {
      font-size: 1.2rem;
      font-weight: bold;
      color: #034078
    }





    #slider {
      position: relative;
      width: 500px;
      height: 265px;

      overflow: hidden;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
    }

    #slider ul {
      position: relative;
      list-style: none;
      height: 100%;
      width: 10000%;
      padding: 0;
      margin: 0;
      transition: all 750ms ease;
      left: 0;
    }

    #slider ul li {
      position: relative;
      height: 100%;

      float: left;
    }

    #slider ul li img {
      width: 500px;
      height: 265px;
    }

    #slider #prev,
    #slider #next {
      width: 50px;
      line-height: 50px;
      border-radius: 50%;
      font-size: 2rem;
      text-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
      text-align: center;
      color: white;
      text-decoration: none;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      transition: all 150ms ease;
    }

    #slider #prev:hover,
    #slider #next:hover {
      background-color: rgba(0, 0, 0, 0.5);
      text-shadow: 0;
    }

    #slider #prev {
      left: 10px;
    }

    #slider #next {
      right: 10px;
    }

    .dropbtn {
      background-color: #04AA6D;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #3e8e41;
    }
  </style>
  <center>
    <div class="maindiv">
</head>
<div class="topnav">
  <h1>Pet Feeder Dashboard</h1>
</div>

<body>


  <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

  <div id="slider">

    <ul id="slideWrap">
      <li><img src="images/b7.jpg"></li>
      <li><img src="images/b2.jpg"></li>
      <li><img src="images/b3.png"></li>
      <li><img src="images/b5.jpg"></li>

      <li><img src="images/b8.jpg"></li>
    </ul>
    <a id="prev" href="#">&#8810;</a>
    <a id="next" href="#">&#8811;</a>
  </div>



  <script>
    var responsiveSlider = function() {

      var slider = document.getElementById("slider");
      var sliderWidth = slider.offsetWidth;
      var slideList = document.getElementById("slideWrap");
      var count = 1;
      var items = slideList.querySelectorAll("li").length;
      var prev = document.getElementById("prev");
      var next = document.getElementById("next");

      window.addEventListener('resize', function() {
        sliderWidth = slider.offsetWidth;
      });

      var prevSlide = function() {
        if (count > 1) {
          count = count - 2;
          slideList.style.left = "-" + count * sliderWidth + "px";
          count++;
        } else if (count = 1) {
          count = items - 1;
          slideList.style.left = "-" + count * sliderWidth + "px";
          count++;
        }
      };

      var nextSlide = function() {
        if (count < items) {
          slideList.style.left = "-" + count * sliderWidth + "px";
          count++;
        } else if (count = items) {
          slideList.style.left = "0px";
          count = 1;
        }
      };

      next.addEventListener("click", function() {
        nextSlide();
      });

      prev.addEventListener("click", function() {
        prevSlide();
      });

      setInterval(function() {
        nextSlide()
      }, 3000);

    };

    window.onload = function() {
      responsiveSlider();
    }
  </script>
  <?php echo "<br>" ?>
  <div class="dropdown">
    <button class="dropbtn">SELECT FEEDER NAME</button>
    <div class="dropdown-content">
      <?php

      include "config.php";

      if ($stmtt = $connection->query("Select Distinct feedername from feeder")) {
        $php_data_arrayy = array();

        while ($row = mysqli_fetch_array($stmtt)) {


          //echo '<option value="'.$row[0].'">'.$row[0].'</option>'; 
          echo ' <a href="secondpage.php?feeder=' . $row[0] . '"><option value="' . $row[0] . '">' . $row[0] . '</option></a>';
          $php_data_arrayy[] = $row;
        }
      }
      ?>

    </div>
  </div>


</body>
</div>
</center>

</html>
