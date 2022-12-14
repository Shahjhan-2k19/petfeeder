<style>
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
</style>
<table id="customers">
    <thead>
        <th>Schedule Name</th>
        <th>Start Date</th>
        <th>Start Time</th>
        <th>End Date</th>
        <th>End Time</th>
        <th>Week days</th>
        <th>Operating Relays</th>
        <th>Edit</th>
        <th>Delete</th>

    </thead>
    <?php

    require_once("connection.php");
    if (isset($_GET['Del'])) {
        $UserID = $_GET['Del'];
        $query = " delete from feeder where id = '" . $UserID . "'";
        echo "Sucessfully deleted";
        $result = mysqli_query($con, $query);

        if ($result) {
            header("location:view.php");
        } else {
            echo ' Please Check Your Query ';
        }
    } else {
        header("location:view.php");
    }

    ?>