<?php 
    require_once "connect.php";
    $id = $_GET['id'];
    $queryDELETE = "DELETE FROM article WHERE id='$id'";

    if($connect->query($queryDELETE)){
        echo "<script>alert('Delete Success');window.location.href='index.php';</script>";
    }
?>