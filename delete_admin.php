<?php
    require("config.php");
    $id = $_GET['id'];  
    $sql_1 = "DELETE  FROM `admin` WHERE `id`= {$id}";
    if(mysqli_query($conn,$sql_1)){
        header("Location:../admin.php");
    }
?> 