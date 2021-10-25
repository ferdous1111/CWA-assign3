<?php
require "./settings.php";
if(isset($_GET["id"]) && isset($_GET["status"])){
    $id = $_GET["id"];
    $status = $_GET["status"];
    $sql = "UPDATE EOI SET status = '$status' WHERE id = '$id'";
    if($conn->query($sql) === TRUE){
        header("Location: manage.php");
    }
}
?>