<?php
require_once '../../class/Promocion.php';
$idPromocion = (isset($_REQUEST['idPromocion'])) ? $_REQUEST['idPromocion'] : null;

    if($idPromocion){        
        $promocion = Promocion::buscarPorId($idPromocion);   
          
    }else{
        $promocion = new Promocion(); 
       
    }

   
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : null;
      $url_imagen1 = (isset($_REQUEST['url_imagen1'])) ? $_REQUEST['url_imagen1'] : null;
      $descripcion = (isset($_REQUEST['descripcion'])) ? $_REQUEST['descripcion'] : null;       
      $fecha_publicacion = date('Y-m-d');
      $visible = (isset($_REQUEST['visible'])) ? $_REQUEST['visible'] : null;
      $servicio = NULL;
      $hotel = NULL;
      $precio = NULL;
     
            $promocion->setTitulo($titulo);
            $promocion->setFechaPublicacion($fecha_publicacion);
            $promocion->setVisible($visible);
            $promocion->setServicio($servicio);
            $promocion->setHotel($hotel);
            $promocion->setPrecio($precio);
           
             
             $rutaServidorImages = 'uploads/images';
             $rutaServidorFiles = 'uploads/files';

             
            
             
            if ($_FILES['url_img1']['name']!="") {
    
                    if (!is_dir('uploads/images')) {
                      mkdir('uploads/images', 0777, true); 
                    }
                   
                    $rutaTemporalImg = $_FILES['url_img1']['tmp_name'];
                    $extensionImg = pathinfo($_FILES['url_img1']['name'], PATHINFO_EXTENSION);
                    $nombreImagen1 = date('YmdHis').'_promocion.'.$extensionImg;
                    $rutaDestinoImg = $rutaServidorImages.'/'.$nombreImagen1;
                    unlink($url_imagen1);
                    move_uploaded_file($rutaTemporalImg, $rutaDestinoImg); 
                    $promocion->setUrlImagen1($rutaDestinoImg); 
                  
              } else{
              $promocion->setUrlImagen1($url_imagen1);    
            } 


            if ($_FILES['file1']['name']!="") {
    
              if (!is_dir('uploads/files')) {
                mkdir('uploads/files', 0777, true); 
              }
             
              $rutaTemporalFile = $_FILES['file1']['tmp_name'];
              $extensionFile = pathinfo($_FILES['file1']['name'], PATHINFO_EXTENSION);
              $nombreArchivo1 = date('YmdHis').'_promocion.'.$extensionFile;
              $rutaDestinoFile = $rutaServidorFiles.'/'.$nombreArchivo1;
              unlink($descripcion);
              move_uploaded_file($rutaTemporalFile, $rutaDestinoFile); 
              $promocion->setDescripcion($rutaDestinoFile); 
            
        } else{
        $promocion->setDescripcion($descripcion);    
      } 

            
              $promocion->guardar();
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
          if (isset($_REQUEST['idPromocion'])){
            
            $title = 'Editar promocion ';
          }else{
            $title = 'Crear nueva promocion';
          }
          ?>


          <div  style="width:80%; margin-left:10%; background-color: white; padding:20px; border-radius:10px;">

          <h4 class="text-center"><?php echo $title ?></h4> <br>
      

            <form action="save.php" method="post" id="promo_form" enctype="multipart/form-data">

            <div class="form-group">
            <input class="form-control" type="hidden" name="idPromocion" id="idPromocion" value="<?php echo $promocion->getidPromocion(); ?>">
            </div>

            <div class="form-group">
            <input class="form-control" type="hidden" name="url_imagen1" id="url_imagen1" value="<?php echo $promocion->getUrlImagen1(); ?>">
            </div>

            <div class="form-group">
            <input class="form-control" type="hidden" name="descripcion" id="descripcion" value="<?php echo $promocion->getDescripcion(); ?>">
            </div>


            <div class="form-group">
            <label for="titulo">Título de la promoción</label>
            <input class="form-control" type="text" name="titulo" id="titulo" value="<?php echo $promocion->getTitulo(); ?>" required>
            </div>

            <div class="form-group">
            <label for="url_img1">Imagen de la promoción </label>
            
            <?php    if(isset($_REQUEST['idPromocion'])): ?>
              </br>
            <img src="<?= $promocion->getUrlImagen1(); ?>" style="width:100px" />
            </br></br>
            <?php endif; ?>
            <input type="file" class="form-control-file" name="url_img1" id="url_img1">
            <small> Selecciona una imagen con las siguientes caracteristicas:</small>
            <ul>
              <li><small>Dimensiones de 800 x 600 pixeles en formato JPG o PNG</small></li>
              <li><small>Tamaño menor a 200kb</small></li>
            </ul>  
            </div>

            <div class="form-group">
            <label for="descripcion">Descripción</label>
            

            <?php  
              if(isset($_REQUEST['idPromocion'])){
                if($promocion->getDescripcion()!=""){
              ?>
              </br>
            <a href="<?= $promocion->getDescripcion(); ?>" target="_blank" > <img src="../../assets/img/icon-pdf.png" style="width:100px; height:auto;"> <br><small class="ml-4">Descargar</small> </a>
            </br></br>
            <?php
                }
           } 
           
           ?>
            <input type="file" class="form-control-file" name="file1" id="file1">
            <br>
            <small> Selecciona un archivo PDF que contenga toda la información de la promoción</small>
          
            </div>  


            <div class="form-group">
              <label for="visible">Visible</label>
            <select name="visible" id="visible" class="form-control" style="width: 50%;">
              <option value="0" <?php if($promocion->getVisible()==0){echo 'selected';}?>>No</option>
              <option value="1" <?php if($promocion->getVisible()==1){echo 'selected';}?>>Sí</option>
            </select> 
            </div>


            <div class="form-group">
            <input type="submit" class="btn btn-default btn-custom" value="Guardar Promoción">
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