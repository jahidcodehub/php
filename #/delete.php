<?php
    include './include/connection.php';
    $sql = "DELETE FROM nu WHERE id='" . $_GET['id'] . "'";
    mysqli_query($conn, $sql);
?>