<?php
    require("config.php");
    $sql="SELECT * FROM admin";
    $result=mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
         <a class="navbar-brand"  href="http://localhost:8080/BTweb/BTCV/admin.php">Lish admin</a>
         </div>
     </nav>
     <table class="table">
       <thead>
       <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>img</th>
                    <th>email</th>
                    <th>pass</th>
                    <th>phone</th>
                    <th>permission</th>
              </tr>
              </thead>
              <tbody>
              <?php 
                while($item=mysqli_fetch_array($result)){
              ?>
                  <tr>
                      <td scope="row"><?php echo $item['id'] ?></td>
                      <td><?php echo $item['name'] ?></td>
                      <td><img alt="Bootstrap Image Preview" id="img1" class="rounded-circle"
                    src="./<?php echo $item['img'] ?>" /></td>
                      <td><?php echo $item['email'] ?></td>
                      <td><?php echo $item['pass'] ?></td>
                      <td><?php echo $item['phone'] ?></td>
                      <td><?php echo $item['permission'] ?></td>
                      <td><a href="http://localhost:8080/BTweb/BTCV/update_admin.php/?id=<?php echo $item['id'] ?>"><i class='fas fa-cog' style='font-size:24px'></i></a></td>
                      <td><a href="http://localhost:8080/BTweb/BTCV/delete_admin.php/?id=<?php echo $item['id'] ?>"><i class="material-icons">delete</i></a></td>
                  </tr>
                  <?php 
                }
                ?>
              </tbody>
       </tbody>
     </table>
     
                <a name="" id="" class="btn btn-primary" href="http://localhost:8080/BTweb/BTCV/add_admin.php" role="button">add</a>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>