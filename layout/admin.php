<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <?php 
        session_start();
    
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['role']==""){
          echo "<script>
                  alert('Login dulu. Silahkan coba lagi!'); 
                  window.location='../index.php';
                </script>";
        }
 
	?>
  <div class="container">
  <div class="card text-center">
      <div class="card-header">
            Halaman Admin
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment <?= $_SESSION['nama']; ?></h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content. <?= $_SESSION['role']; ?></p>
            <a href="../logout.php" class="btn btn-warning">Log Out</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
  </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
