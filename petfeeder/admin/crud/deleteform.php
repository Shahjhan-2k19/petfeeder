
<?php

require_once("connection.php");
if (isset($_GET['Del'])) {
    $UserID = $_GET['Del'];
    $query = " delete from assignedform where id = '" . $UserID . "'";
    echo "Sucessfully deleted";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("location:viewfarm.php");
    } else {
        echo ' Please Check Your Query ';
    }
} else {
    header("location:view.php");
}

?>
