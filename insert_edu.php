<?php
    require('config.php');
    if(isset($_POST['submit'])){
        $edu_1 = $_POST['edu_1'];
        $edu_2 = $_POST['edu_2'];
        $content_edu1 = $_POST['content_edu1'];
        $content_edu2 = $_POST['content_edu2'];
        $sql = "INSERT INTO `education`( `edu_1`, `edu_2`, `content_edu1`, `content_edu2`) VALUES ('$edu_1','$edu_2','$content_edu1','$content_edu2')";
        if(mysqli_query($conn, $sql)){
            header("Location:education.php");
    } 
    }
?>