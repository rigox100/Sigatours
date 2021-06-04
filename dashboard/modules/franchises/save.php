<?php
require_once '../../class/Franquicia.php';

$idFranquicia = (isset($_REQUEST['idFranquicia'])) ? $_REQUEST['idFranquicia'] : null;

if ($idFranquicia) {
    $franquicia = Franquicia::buscarPorId($idFranquicia);
} else {
    $franquicia = new Franquicia();
}

//Request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $franquicia->setNombreCompleto($_POST['nombre_completo']);
    $franquicia->setEmail($_POST['email']);
    $franquicia->setCiudad($_POST['ciudad']);
    $franquicia->setTelefono($_POST['telefono']);
    $franquicia->setComentarios($_POST['comentarios']);
    
    if($_POST['idFranquicia'] == ''){
    $franquicia->setFechaCreacion(date('Y-m-d'));
    }else{
    $franquicia->setFechaCreacion($_POST['fecha_creacion']);
    }

    $franquicia->guardar();
    header('Location: index.php');
              
            
    }
      
    include_once '../../assets/template/header.php';
?>


<!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
          <a href="index.php" class="btn btn-warning">Regresar</a><br>
          
          <?php 
          if (isset($_REQUEST['idFranquicia'])){
            
            $title = 'Editar solicitud de franquicia ';
          }else{
            $title = 'Crear nueva solicitud de franquicia';
          }
          ?>


          <div  style="width:80%; margin-left:10%; background-color: white; padding:20px; border-radius:10px;">

          <h4 class="text-center"><?php echo $title ?></h4> <br>
      

            <form action="save.php" method="post" id="promo_form" >

            <div class="form-group">
            <input class="form-control" type="hidden" name="idFranquicia" id="idFranquicia" value="<?php echo $franquicia->getidFranquicia(); ?>">
            </div>

            <div class="form-group">
            <input class="form-control" type="hidden" name="fecha_creacion" id="fecha_creacion" value="<?php echo $franquicia->getFechaCreacion(); ?>">
            </div>

           


            <div class="form-group">
            <label for="nombre_completo">Nombre completo</label>
            <input class="form-control" type="text" name="nombre_completo" id="nombre_completo" value="<?php echo $franquicia->getNombreCompleto(); ?>" required>
            </div>

          
            <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php echo $franquicia->getEmail(); ?>" required>
            </div>

            <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input class="form-control" type="text" name="ciudad" id="ciudad" value="<?php echo $franquicia->getCiudad(); ?>" required>
            </div>

            <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input class="form-control" type="text" name="telefono" id="telefono" value="<?php echo $franquicia->getTelefono(); ?>" required>
            </div>

            <div class="form-group">
            <label for="descripcion">Comentarios</label>
           <textarea class="form-control" name="comentarios" id="comentarios" rows="5" ><?php echo $franquicia->getComentarios(); ?></textarea>
            </div>  


            <div class="form-group">
            <input type="submit" class="btn btn-default btn-custom" value="Guardar solicitud de franquicia">
            </div>  
           
            </form>
           
          
          </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <?php
    
    include_once '../../assets/template/footer.php';
?>