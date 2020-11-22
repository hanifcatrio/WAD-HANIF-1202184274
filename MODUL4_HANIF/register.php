<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    body {
      background-color: LightCyan;
    }
    .masuk {
    position: absolute;margin-top: -180px;margin-left: -200px;left: 50%;top: 50%;width: 400px;height: 660px;background-color: white;
}
    </style>
    <title>Register</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WAD Beauty</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
</nav>
<div align="center" class="masuk">
<h4  align="center">Register</h4>
<form method="post" action="login.php">
    <label>Nama</label><br>
    <input type="text" name="nama" placeholder="Masukan Nama Lengkap" autofokus autocomplete="off" Required><br><br>

    <label>Email</label><br>
    <input type="text" name="email" placeholder="Masukan alamat Email" autofokus autocomplete="off" Required><br><br>
    
    
    <label>No Handphone</label><br>
    <input type="text" name="no handphone" placeholder="Masukan No HP" autofokus autocomplete="off" Required><br><br>
    
    <label>Kata Sandi</label><br>
    <input type="password" name="katasandi" placeholder="Buat Kata Sandi" autofokus autocomplete="off" Required><br><br>

    <label>Konfirmasi Kata Sandi</label><br>
    <input type="password" name="password" placeholder="Masukan Kata Sandi" Required><br><br>
    <p><input type='checkbox' name='inget' value=' Remember Me' /> Remember Me</p>
    
    <button class="btn btn-primary" type="submit">Daftar</button><br>
    <div class="row">
                <div class="col">
                     <p>Sudah Punya Akun?</p>
                
                
                    <a href="register.php" >Login</a>
                    </div>  
                 

   </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>