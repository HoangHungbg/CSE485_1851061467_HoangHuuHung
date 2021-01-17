<?php
    require("config.php");
    $id = $_GET['id'];
    $sql = "DELETE  FROM `aboutme` WHERE `id`= {$id}";
    mysqli_query($conn,$sql);
    header("Location:../aboutme.php");
    
?>