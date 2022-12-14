<?php
include("config.php");
if (isset($_GET["feeder"])) {
    $feeder = $_GET["feeder"];
    //  echo $farm;
}
?>
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
        <th>Feeder Name</th>
        <th>Schedule Name</th>
        <th>Start Time</th>

        <th>Weight</th>

        <th>Edit</th>
        <th>Delete</th>

    </thead>
    <?php
    $i = 1;
    $query = mysqli_query($connection, "SELECT * FROM schedule where feedername='$feeder'");
    while ($row = mysqli_fetch_array($query)) {
        $UserID = $row['id'];
        $feedername = $row['feedername'];
        $name = $row['schedulename'];

        $stime = $row['startt'];

        $etime = $row['endt'];


    ?>
        <tbody>
            <tr>
                <td><?php echo $feedername; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $stime; ?></td>

                <td><?php echo $etime; ?></td>

                <td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                <td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>

            </tr>
        </tbody>
    <?php
    } ?>
</table>