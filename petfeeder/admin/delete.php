
    <?php

    require_once("config.php");
    if (isset($_GET['Del'])) {
        $UserID = $_GET['Del'];
        $query = " delete from forms where id = '" . $UserID . "'";
        echo "Sucessfully deleted";
        $result = mysqli_query($connection, $query);

        if ($result) {
            header("location:deleteform.php");
        } else {
            echo ' Please Check Your Query ';
        }
    } else {
        header("location:view.php");
    }

    ?>