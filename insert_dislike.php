<?php
    require('config.php');
    if(isset($_POST['submit'])){
      
        $dislike_1 = $_POST['dislike_1'];
        $dislike_2 = $_POST['dislike_2'];
        $dislike_3 = $_POST['dislike_3'];
        $sql_1 = "INSERT INTO `dislike`( `dislike_1`, `dislike_2`, `dislike_3`) VALUES ('$dislike_1','$dislike_2','$dislike_3')";
    
    } if(mysqli_query($conn, $sql_1)){
        header("Location:dislike.php");
    }
    }
?>