<?php
    require("config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql_1 = "SELECT * FROM admin WHERE id = {$id}";
        // echo $id;
        $result = mysqli_query($conn, $sql_1);
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $img = $_POST['img'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $phone = $_POST['phone'];
            $permission = $_POST['permission'];
            $sql = "UPDATE admin SET name = '$name' , img = '$img' , email = '$email', pass = '$pass', phone = '$phone', permission = '$permission' WHERE id = {$id}";
            echo "Hello";
            if(mysqli_query($conn, $sql)){
                header("Location: ../admin.php");
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
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <section>
    <div class="container">
        <div class="row">
            <div>
                <form  method="Post">
                    <div class="form-group">
                      <label for="name">name</label>
                      <input type="text"
                        class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="inputname">
                    </div>
                    <div class="form-group">
                      <label for="img">img</label>
                      <input type="file"
                        class="form-control" name="img" id="img" aria-describedby="helpId" placeholder="inputimg">
                    </div>
                    <div class="form-group">
                      <label for="email">email</label>
                      <input type="text"
                        class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="email">
                    </div>
                    <div class="form-group">
                      <label for="pass">pass</label>
                      <input type="text"
                        class="form-control" name="pass" id="pass" aria-describedby="helpId" placeholder="inputpass">
                    </div>
                    <div class="form-group">
                      <label for="phone">phone</label>
                      <input type="number"
                        class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="inputphone">
                    </div>
                    <div class="form-group">
                      <label for="permission">permission</label>
                      <input type="text"
                        class="form-control" name="permission" id="permission" aria-describedby="helpId" placeholder="permission">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Fix</button>
                </form>
            </div>
        </div>
    </div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>