<?php
session_start();

if(isset($_SESSION['idRol'])){
  header('Location: index.php');
} 
require_once 'class/Usuario.php';

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>CPANEL Login</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Theme style -->
   <link rel="stylesheet" href="assets/css/adminlte.css">
<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = (isset($_POST['email'])) ? $_POST['email'] : null;
    $password = md5((isset($_POST['password'])) ? $_POST['password'] : null);
    $usuario = new Usuario();
    $usuario->setEmail($email);
    $usuario->setPassword($password);
    if($usuario->logIn()){
            header('Location: index.php');
    }else{

        header('Location: login.php?error=1');
        
    }

}
?>


<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Acceso al CPANEL</h5>
      </div>
      <div class="modal-body">
      <img src="assets/img/logo2.png" class="d-block mx-auto w-50">
      <br>
      
      <form action="login.php" method="post">

      

          <div class="form-group">
          <label for="email">Correo electrónico</label>
          <input class="form-control" type="email" name="email" id="email" value="" required>
          </div>


          <div class="form-group">
          <label for="email">Contraseña</label>
          <input class="form-control" type="password" name="password" id="password" value="" required>
          </div>

          <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Ingresar</button>
              <a href="../index.php" class="btn btn-secondary">Cerrar<a>
            </div>
      </form>

      <div>
              <?php if(isset($_GET['error'])){
                  echo '<small class="alert alert-danger text-center">Email o contraseña incorrectos, por favor verifiquelos y vuelva a intentarlo.</small>';
              } ?>
     
     </div>
     
      </div>

    </div>
  </div>
</div>
  
<script>
  $( document ).ready(function() {
    $('#LoginModal').modal({backdrop: 'static', keyboard: false})
    $('#LoginModal').modal('toggle')


     
  });
  </script>
</body>

</html>