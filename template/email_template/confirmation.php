<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sigatours">
    <meta name="keywords" content="Sigatours">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>::Sigatours::</title>
    <!--Icon-->
    <link rel="shortcut icon" href="../../img/favicon.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css">
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  
</head>

<body>
  

<?php


              if(isset($_GET['status_code'])){
                if($_GET['status_code']==1){
                  ?>
                  <script>
                  $(document).ready(function()
                  {
                    $('#successModal').modal({backdrop: 'static', keyboard: false}); 
                     $("#successModal").modal("show");
                    
                  }); 
                  </script>
                  <?php
              }
            }
            ?>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Solicitud enviada</h5>
       <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
          <!-- span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <img src="../../img/success.gif" class="d-block mx-auto img-fluid" style="width: 60%; height:auto;">
        <p class="text-center font-weight-bold" style="font-size: 18px;">¡Su solicitud ha sido enviada exitosamente!</p>
        <p style="font-size: 18px;">Un ejecutivo de Sigatours se pondrá en contacto usted lo más pronto posible.</p>


        <small>Rediriendo a la página de inicio... <span id="countdown"></span> </small>
      </div>
      
      <!-- div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Continuar</button>
      </div> -->
    </div>
  </div>
</div>

    <script>

      window.onload = updateClock;
      var totalTime = 8;
      function updateClock() {
      document.getElementById('countdown').innerHTML = totalTime;
      if(totalTime==0){
        windows.location.replace('index.php');
      }else{
      totalTime-=1;
      setTimeout("updateClock()",1000);
      }
      }
     setTimeout("location.href='../../index.php'", 8000);

    
    </script>
  
</body>

</html>