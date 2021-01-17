<?php
    require("config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql_1 = "SELECT * FROM dislike WHERE id = {$id}";
        // echo $id;
        $result = mysqli_query($conn, $sql_1);
        if(isset($_POST['submit'])){
            $favor_1 = $_POST['favor_1'];
            $favor_2 = $_POST['favor_2'];
            $favor_3 = $_POST['favor_3'];
            $favor_4 = $_POST['favor_4'];
            $sql = "UPDATE favourite SET favor_1 = '$favor_1' , favor_2 = '$favor_2' , favor_3 = '$favor_3', favor_4 = '$favor_4' WHERE id = {$id}";
            echo "Hello";
            if(mysqli_query($conn, $sql)){
                header("Location: ../favourite.php");
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
                      <label for="favor_1">favor_1</label>
                      <input type="text"
                        class="form-control" name="favor_1" id="favor_1" aria-describedby="helpId" placeholder="inputname">
                    </div>
                    <div class="form-group">
                      <label for="favor_2">favor_2</label>
                      <input type="text"
                        class="form-control" name="favor_2" id="favor_2" aria-describedby="helpId" placeholder="inputage">
                    </div>
                    <div class="form-group">
                      <label for="favor_3">favor_1</label>
                      <input type="text"
                        class="form-control" name="favor_3" id="favor_3" aria-describedby="helpId" placeholder="inputadd">
                    </div>
                    <div class="form-group">
                      <label for="favor_4">favor_4</label>
                      <input type="text"
                        class="form-control" name="favor_4" id="favor_4" aria-describedby="helpId" placeholder="inputDESC">
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