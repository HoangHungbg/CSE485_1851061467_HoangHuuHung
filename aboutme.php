<?php
    require("config.php");
    $sql="SELECT * FROM aboutme";
    $result=mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Aboutme</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     </nav>
     <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
         <a class="navbar-brand"  href="http://localhost:8080/BTweb/BTCV/aboutme.php">Lish aboutme</a>
         </div>
     </nav>
     <table class="table">
       <thead>
       <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>age</th>
                    <th>address</th>
                    <th>desc</th>
              </tr>
              </thead>
              <tbody>
              <?php 
                while($item=mysqli_fetch_array($result)){
              ?>
                  <tr>
                      <td scope="row"><?php echo $item['id'] ?></td>
                      <td><?php echo $item['name'] ?></td>
                      <td><?php echo $item['age'] ?></td>
                      <td><?php echo $item['address'] ?></td>
                      <td><?php echo $item['description'] ?></td>
                      <td><a href="http://localhost:8080/BTweb/BTCV/update.php/?id=<?php echo $item['id'] ?>"><i class='fas fa-cog' style='font-size:24px'></i></a></td>
                      <td><a href="http://localhost:8080/BTweb/BTCV/delete.php/?id=<?php echo $item['id'] ?>"><i class="material-icons">delete</i></a></td>
                  </tr>
                  <?php 
                }
                ?>
              </tbody>
       </tbody>
     </table>
                <a name="" id="" class="btn btn-primary" href="http://localhost:8080/BTweb/BTCV/add_aboutme.php" role="button">Them</a>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>