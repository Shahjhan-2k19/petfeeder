<!DOCTYPE HTML>
<html>
<?php
if (isset($_GET["feeder"])) {
  $feeder = $_GET["feeder"];
  //  echo $farm;
}
include("config.php");
?>

<head>

  <title>Server</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <style>
    .switch {
      position: relative;
      display: inline-block;
      width: 120px;
      height: 68px
    }

    .switch input {
      display: none
    }

    .slider {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      border-radius: 6px
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 52px;
      width: 52px;
      left: 8px;
      bottom: 8px;
      background-color: #fff;
      -webkit-transition: .4s;
      transition: .4s;
      border-radius: 3px
    }

    input:checked+.slider {
      background-color: #b30000
    }

    input:checked+.slider:before {
      -webkit-transform: translateX(52px);
      -ms-transform: translateX(52px);
      transform: translateX(52px)
    }

    .tab {
      overflow: hidden;
      border: 1px solid white;
      background-color: #f1f1f1;

      font-style: bold;
      height: 100px;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      width: 200px;
      padding: 14px 16px;
      transition: 0.3s;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: white;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      border: 1px solid #ccc;
      border-top: none;
    }

    .popup {
      position: relative;
      display: inline-block;
      cursor: pointer;
    }

    /* The actual popup (appears on top) */
    .popup .popuptext {
      visibility: hidden;
      width: 360px;
      background-color: #555;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 8px 0;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -80px;
    }

    /* Popup arrow */
    .popup .popuptext::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #555 transparent transparent transparent;
    }

    /* Toggle this class when clicking on the popup container (hide and show the popup) */
    .popup .show {
      visibility: visible;
      -webkit-animation: fadeIn 1s;
      animation: fadeIn 1s
    }

    /* Add animation (fade in the popup) */
    @-webkit-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    h2 {
      font-size: 3.0rem;
    }

    p {
      font-size: 1.0rem;
    }

    .units {
      font-size: 0.8rem;
      vertical-align: middle;
    }

    .dht-labels {
      font-size: 1.0rem;
      vertical-align: middle;
      padding-bottom: 5px;
    }

    .datedesign {
      margin-top: 0px;
      font-size: 20px;
      display: flex;

    }

    .leftflex {
      margin-top: 55px;

    }

    .rightflex {

      margin-left: 30px;
      margin-top: 8px;

    }

    .tabdesign {
      margin-top: 45px;

    }

    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    /* #customers tr:hover {
              background-color: #ddd;
            } */

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: #008CBA;
      ;
      color: white;
      font-size: 20px;
      font-style: bold;
      width: 10%;
    }

    #customers td {
      font-size: 15px;
      font-style: bold;
      text-align: center;

    }

    .button {
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    .button:active {
      transform: scale(0.98);
      /* Scaling button to 0.98 to its original size */
      box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 1.0);
      /* Lowering the shadow */
    }


    .button2 {
      background-color: #008CBA;
    }

    .hide {
      position: absolute;
      top: -1px;
      left: -1px;
      width: 1px;
      height: 1px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      width: 99%;
      padding: 0.5px;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 5);
    }
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>


<center>

  <h3>Schedule <?php echo $feeder ?> </h3>
  <div class="card">
    <form name="schedulep" method="post"><br>
      <label for="schedule">Enter Schedule Name</label>
      <input type="text" id="schedulename" name="schedulename">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <br>
      <label for="Time">Start Time:</label>
      <input type="time" id="stimep" name="stimep"><br>

      <label for="Time">Enter Weight:</label>
      <input type="number" step="0.1" id="etimep" name="etimep"><br>

      <input type="submit" name="schedulep" value="Submit" class="button button2" />

      <!-- <input type="Button"  value="test" id="foo" name="passengers" onclick='document.getElementById("bar").value = "" + document.getElementById("foo").value;' />
      <input type="text" name="bar" id="bar" value="<?php echo $value; ?>" disabled style="width:30; text-align: center; " /> -->

      <form>
  </div>
  </br>
  <div id="viewsch"> </div>
  <script>
    function submitForm() {
      document.schedulep.submit();
      document.schedulep.reset();
    }

    function viewsch() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("viewsch").innerHTML =
            this.responseText;
        }
      };
      xhttp.open("GET", "viewschedule.php?feeder=<?php echo $feeder ?>", true);
      xhttp.send();
    }
    setInterval(function() {
      viewsch();
      // 1sec
    }, 1000);

    window.onload = viewsch();
  </script>

  </div>


</center>
</div>
</body>
<?php

if (isset($_POST['schedulep'])) {

  $stime = $_POST['stimep']; //note i used $_POST since you have a post form **method='post'**
  $etime = $_POST['etimep'];
  $schedulename = $_POST['schedulename'];

  $query = " select schedulename from schedule where schedulename='" . $schedulename . "'";
  $result = mysqli_query($connection, $query);
  $check = 'test';
  while ($row = mysqli_fetch_assoc($result)) {
    $check = $row['schedulename'];
  }


    $sql = "INSERT into schedule (feedername,schedulename,startt,endt) values ('$feeder','$schedulename','$stime','$etime')";
    // $sql = "UPDATE relay SET status='$tempone',timestamp = CURRENT_TIMESTAMP WHERE relay='Temperature One  Threshold'";
    if ($connection->query($sql) === TRUE) {
    } else {
    }
    echo "<script>
    var a =document.getElementById('schedulename');
   alert(a.value());</script>";
  
}

?>

<script type="text/javascript">
  function cleartext() {
    alert("DONE");
    // alert(document.getElementById('name').value);
    document.getElementById('temptwocontrol').value = '';
    document.getElementById('temponecontrol').value = '';
    // document.getElementById('email').value = '';
    // document.getElementById('phone').value = '';
    // document.getElementById('message').value = '';

    // alert(document.getElementById('name').value);
  }
</script>

</html>