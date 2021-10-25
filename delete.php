<?php
require "./settings.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["ref"])){
        $ref = $_POST["ref"];
        $sql = "DELETE FROM EOI WHERE ref_no = '$ref'";
        $conn->query($sql);
    }
}
if($_SERVER["REQUEST_METHOD"] === "GET"){
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "DELETE FROM EOI WHERE id = '$id'";
        $conn->query($sql);
    }
}
header("Location: manage.php");
?>
