<?php
    require("config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql_1 = "SELECT * FROM aboutme WHERE id = {$id}";
        // echo $id;
        $result = mysqli_query($conn, $sql_1);
        if(isset($_POST['txtSubmit'])){
            $name = $_POST['txtName'];
            $age = $_POST['txtAge'];
            $address = $_POST['txtAddress'];
            $desc = $_POST['txtDes'];
            // var_dump($name);
            // var_dump($age);
            // var_dump($address);
            // var_dump($desc);
            $sql = "UPDATE aboutme SET name = '$name' , age = $age , address = '$address', description = '$desc' WHERE id = {$id}";
            echo "Hello";
            if(mysqli_query($conn, $sql)){
                header("Location: ../aboutme.php");
            }
            else{
                echo "Error!";
            }
           
        }
        

    }
?>
 <!doctype html>
<html lang="en">
  <head>
    <title>EDIT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
      <form  method="POST">
          <span>Name</span>
          <input type="text" name='txtName' placeholder="Enter Name"><br>
          <span>Age</span>
          <input type="text" name='txtAge' placeholder="Enter Age"><br>
          <span>Address</span>
          <input type="text" name='txtAddress' placeholder="Enter Address"><br>
          <span>Des</span>
          <input type="text" name='txtDes' placeholder="Enter Des"><br>
          <input type="submit" value="Submit" name='txtSubmit'>
      </form>
  </body>
</html> 
