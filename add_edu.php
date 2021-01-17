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
                <form action="insert_edu.php" method="Post">
                    <div class="form-group">
                      <label for="edu_1">edu_1</label>
                      <input type="text"
                        class="form-control" name="edu_1" id="edu_1" aria-describedby="helpId" placeholder="inputedu_1">
                    </div>
                    <div class="form-group">
                      <label for="edu_2">edu_2</label>
                      <input type="text"
                        class="form-control" name="edu_2" id="edu_2" aria-describedby="helpId" placeholder="inputedu_2">
                    </div>
                    <div class="form-group">
                      <label for="comtent_edu1">comtent_edu1</label>
                      <input type="text"
                        class="form-control" name="content_edu1" id="comtent_edu1" aria-describedby="helpId" placeholder="comtent_edu1">
                    </div>
                    <div class="form-group">
                      <label for="content_edu2">content_edu2</label>
                      <input type="text"
                        class="form-control" name="content_edu2" id="content_edu2" aria-describedby="helpId" placeholder="comtent_edu2">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">add</button>
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