<?php
    require("config.php");
    $email = $_POST['name'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM `admin` where `email`='{$email}' and `pass`='{$pass}'";
    $result = mysqli_query($conn, $sql);  
    $data= mysqli_fetch_all($result);
    // echo "<pre>";
    // var_dump($sql);
    if($data){
        header("location: http://localhost:8080/BTweb/BTCV/gover.php");
    }else{
        header("location: /BTweb/BTCV/loginn.php");
    }
?>