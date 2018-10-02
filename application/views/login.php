<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <title>Log in</title>
  </head>
  <body>
    
    <div class="col-lg-5 col-lg-offset-2">
       <h1>Log in page</h1>
    <p>fill in your details to register to the website</p>
     
      
      <?php echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
      
       <form action="" method="post">
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="username" id="username" type="text">
            
        </div>
        
        
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" name="password" id="password" type="password">
            
        </div>
        
       
    <div class="text-center">
        <button class="btn btn-primary" name="login">log in</button>
    </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>