<?php
    require('config.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $desc = $_POST['desc'];
        $sql = "INSERT INTO `aboutme`( `name`, `age`, `address`, `description`) VALUES ('$name','$age','$address','$desc')";
        if(mysqli_query($conn, $sql)){
            header("Location:aboutme.php");
    } 
    }
?>