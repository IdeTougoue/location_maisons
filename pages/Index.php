
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Libraries/Css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../Libraries/Css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Libraries/Css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center ">
    <img src="../Libraries/Docs/logo.jpg" alt="logo">
      <a href="../../index2.html" class="h3">ARCHIVAGE NUMERIQUE</a>
      
    </div>
    <div class="card-body">
      <p class="login-box-msg">Connectez-vous pour démarrer votre session.</p>

      <form action="./GestionDocuments/ListeDocuments.php" method="POST">   
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nom d'utilisateur">
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Mot de passe">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
            <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
        </div>
          
        </div>
      </form>

    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../Libraries/Js/all.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Libraries/Js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../Libraries/Js/adminlte.js"></script>
</body>
</html>
