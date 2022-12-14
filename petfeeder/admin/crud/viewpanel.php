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
<?php

require_once("connection.php");
$query = " select * from assignedpanel ";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css" />
    <title>View Records</title>
</head>

<body class="bg-dark">
    <center>

        <a href="http://localhost/adminpanel/admin/index.php">
            <button> HOME</button></a><br><br>

        <table id="customers">
            <thead>

                <td> ID </td>
                <td> Form Name </td>
                <td> Panel Name </td>


                <td>Delete</td>
            </thead>

            <?php

            while ($row = mysqli_fetch_assoc($result)) {
                $UserID = $row['id'];
                $UserName = $row['formname'];
                $FormName = $row['panelname'];


            ?>

                <tr>
                    <td><?php echo $UserID ?></td>
                    <td><?php echo $UserName ?></td>
                    <td><?php echo $FormName ?></td>



                    <td><a href="deletepanel.php?Del=<?php echo $UserID ?>">Delete</a></td>
                </tr>
            <?php
            }
            ?>


        </table>

    </center>
</body>

</html>