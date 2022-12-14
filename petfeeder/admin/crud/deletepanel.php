
<?php

require_once("connection.php");
if (isset($_GET['Del'])) {
    $UserID = $_GET['Del'];
    $query = " delete from assignedpanel where id = '" . $UserID . "'";
    echo "Sucessfully deleted";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("location:viewpanel.php");
    } else {
        echo ' Please Check Your Query ';
    }
} else {
    header("location:viewpanel.php");
}

?>
