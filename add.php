<?php
    $id=$_POST;
    $name=$id["name"];
    $pass=$id["pass"];
    $conn = mysqli_connect('localhost','root','','baitapweb');
    if(!$conn){
        echo "da co loi";
        die();
    }
    $sql= "SELECT * FROM `admin`where `email`= '$name'";
    mysqli_set_charset($conn,'UTF8');
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);
    // include "header.php"; //goi ra header
    if($pass == $result[4]){
        // header('Location: admin.php');
        header('Location: loginn.php');
    }else{
        // header('Location: loginn.php');  
        header('Location: admin.php');
    }
    // var_dump($result);
?>
