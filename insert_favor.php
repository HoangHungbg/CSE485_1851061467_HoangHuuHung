<?php
    require('config.php');
    if(isset($_POST['submit'])){
        $favor_1 = $_POST['favor_1'];
        $favor_2 = $_POST['favor_2'];
        $favor_3 = $_POST['favor_3'];
        $favor_4 = $_POST['favor_4'];
        $sql = "INSERT INTO `favourite`( `favor_1`, `favor_2`, `favor_3`, `favor_4`) VALUES ('$favor_1','$favor_2','$favor_3','$favor_4')";
        if(mysqli_query($conn, $sql)){
            header("Location:favourite.php");
    } 
    }
?> 