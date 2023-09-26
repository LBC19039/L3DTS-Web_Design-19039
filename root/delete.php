<?php

    require_once 'connect.php';
    $ID = $_REQUEST['ID'];

    $sql = "DELETE FROM testing WHERE ID = '" . $ID . "'";

    if(mysqli_query($conn, $sql)){
        print("Deleted");
    }
    else {
        print("Failed");
    }

    echo "<script>location.href='test_page.php'</script>";

?>