<?php
    require('config.php');
    if(isset($_POST['submit'])){
        $exp_1 = $_POST['exp_1'];
        $exp_2 = $_POST['exp_2'];
        $exp_3 = $_POST['exp_3'];
        $content_exp1 = $_POST['content_exp1'];
        $content_exp2 = $_POST['content_exp2'];
        $content_exp3 = $_POST['content_exp3'];
        $sql = "INSERT INTO `experience`( `exp_1`, `exp_2`, `exp_3`, `content_exp1`, `content_exp2`, `content_exp3`) VALUES ('$exp_1','$exp_2','$exp_3','$content_exp1','$content_exp2','$content_exp3')";
        if(mysqli_query($conn, $sql)){
            header("Location:experience.php");
    } 
    }
?>