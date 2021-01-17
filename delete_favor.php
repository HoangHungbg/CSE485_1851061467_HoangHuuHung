<?php
    require("config.php");
    $id = $_GET['id'];  
    $sql_1 = "DELETE  FROM `favourite` WHERE `id`= {$id}";
    if(mysqli_query($conn,$sql_1)){
        header("Location:../favourite.php");
    }
?> 