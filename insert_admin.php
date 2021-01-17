<?php
    require('config.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $img = $_POST['img'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];
        $permission = $_POST['permission'];
        $sql = "INSERT INTO admin ( `name`, `img`, `email`, `pass`, `phone`, `permission`) VALUES ('$name','$img','$email','$pass',$phone,'$permission')";
        if(mysqli_query($conn, $sql)){
            header("Location:admin.php");
    } 
    }
?>