<?php
require_once '../../class/Slider.php';
$idSlider = (isset($_REQUEST['idSlider'])) ? $_REQUEST['idSlider'] : null;

    if($idSlider){        
        $slider = Slider::buscarPorId($idSlider);   
          
    }else{
        $slider = new Slider(); 
       
    }

   
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : null;
      $url_imagen1 = (isset($_REQUEST['url_imagen1'])) ? $_REQUEST['url_imagen1'] : null;     
      $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : null;
      $fecha_publicacion = date('Y-m-d');
      $visible = (isset($_REQUEST['visible'])) ? $_REQUEST['visible'] : null;
     
            $slider->setTitulo($titulo);
            $slider->setDescripcion($descripcion);
            $slider->setFechaPublicacion($fecha_publicacion);
            $slider->setVisible($visible);
           
             
             $rutaServidor = 'uploads/images';
             $rutaServidorFiles = 'uploads/files';
            
             
            if ($_FILES['url_img1']['name']!=null) {
    
                    if (!is_dir('uploads/images')) {
                      mkdir('uploads/images', 0777, true); 
                    }
                   
                    $rutaTemporal1 = $_FILES['url_img1']['tmp_name'];
                    $extension = pathinfo($_FILES['url_img1']['name'], PATHINFO_EXTENSION);
                    $nombreImagen1 = date('YmdHis').'_slider.'.$extension;
                    $rutaDestino1 = $rutaServidor.'/'.$nombreImagen1;
                    unlink($url_imagen1);
                    move_uploaded_file($rutaTemporal1, $rutaDestino1); 
                    $slider->setUrlImagen1($rutaDestino1); 
                  
              } else{
              $slider->setUrlImagen1($url_imagen1);    
            } 

            
              $slider->guardar();
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
          if (isset($_REQUEST['idSlider'])){
            
            $title = 'Editar elemento del slider ';
          }else{
            $title = 'Crear nuevo elemento para slider';
          }
          ?>


          <div  style="width:80%; margin-left:10%; background-color: white; padding:20px; border-radius:10px;">

          <h4 class="text-center"><?php echo $title ?></h4> <br>
      

            <form action="save.php" method="post" id="slider_form" enctype="multipart/form-data">

            <div class="form-group">
            <input class="form-control" type="hidden" name="idSlider" id="idSlider" value="<?php echo $slider->getIdSlider(); ?>">
            </div>

            <div class="form-group">
            <input class="form-control" type="hidden" name="url_imagen1" id="url_imagen1" value="<?php echo $slider->getUrlImagen1(); ?>">
            </div>


            <div class="form-group">
            <label for="titulo">Título</label>
            <input class="form-control" type="text" name="titulo" id="titulo" value="<?php echo $slider->getTitulo(); ?>">
            </div>

            <div class="form-group">
            <label for="url_img1">Imagen del slider </label>
            <?php    if(isset($_REQUEST['idSlider'])): ?>
              </br>
            <img src="<?= $slider->getUrlImagen1(); ?>" style="width:100px" />
            </br></br>
            <?php endif; ?>
            <input type="file" class="form-control-file" name="url_img1" id="url_img1" <?php if($slider->getIdSlider()==""){ echo 'required'; }?> >
            <small> Selecciona una imagen con las siguientes caracteristicas:</small>
            <ul>
              <li><small>Dimensiones de 1920 x 770 pixeles en formato JPG o PNG</small></li>
              <li><small>Tamaño menor a 400kb</small></li>
            </ul>  
             
            </div>

            <div class="form-group">
            <label for="contenido">Descripción</label>
           <textarea class="form-control" name="descripcion" id="descripcion" rows="3" ><?php echo $slider->getDescripcion(); ?></textarea>
            </div>  

            <div class="form-group">
              <label for="visible">Visible</label>
            <select name="visible" id="visible" class="form-control" style="width: 50%;">
              <option value="0" <?php if($slider->getVisible()==0){echo 'selected';}?>>No</option>
              <option value="1" <?php if($slider->getVisible()==1){echo 'selected';}?>>Sí</option>
            </select> 
            </div>


            <div class="form-group">
            <input type="submit" class="btn btn-default btn-custom" value="Guardar">
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