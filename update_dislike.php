<?php
    require("config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql_1 = "SELECT * FROM dislike WHERE id = {$id}";
        // echo $id;
        $result = mysqli_query($conn, $sql_1);
        if(isset($_POST['submit'])){
            $dislike_1 = $_POST['dislike_1'];
            $dislike_2 = $_POST['dislike_2'];
            $dislike_3 = $_POST['dislike_3'];
            
            $sql = "UPDATE dislike SET dislike_1 = '$dislike_1' , dislike_2 = '$dislike_2' , dislike_3 = '$dislike_3' WHERE id = {$id}";
            echo "Hello";
            if(mysqli_query($conn, $sql)){
                header("Location: ../dislike.php");
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
                      <label for="dislike_1">dislike_1</label>
                      <input type="text"
                        class="form-control" name="dislike_1" id="dislike_1" aria-describedby="helpId" placeholder="inputDislike_1">
                    </div>
                    <div class="form-group">
                      <label for="dislike_2">dislike_2</label>
                      <input type="text"
                        class="form-control" name="dislike_2" id="dislike_2" aria-describedby="helpId" placeholder="inputDislike_2">
                    </div>
                    <div class="form-group">
                      <label for="dislike_3">dislike_3</label>
                      <input type="text"
                        class="form-control" name="dislike_3" id="dislike_3" aria-describedby="helpId" placeholder="inputDislike_3">
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