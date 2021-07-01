<?php
require_once '../../class/CategoriaDos.php';
$idCategoria = (isset($_REQUEST['idCategoria'])) ? $_REQUEST['idCategoria'] : null;

    if($idCategoria){        
        $categoria = CategoriaDos::buscarPorId($idCategoria);   
          
    }else{
        $categoria = new CategoriaDos(); 
       
    }

   
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : null;
      $visible = (isset($_REQUEST['visible'])) ? $_REQUEST['visible'] : null;

     
            $categoria->setNombre($nombre);
            $categoria->setVisible($visible);
          
              $categoria->guardar();
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
          if (isset($_REQUEST['idCategoria'])){
            
            $title = 'Editar categoría ';
          }
          ?>


          <div  style="width:80%; margin-left:10%; background-color: white; padding:20px; border-radius:10px;">

          <h4 class="text-center"><?php echo $title ?></h4> <br>
      

            <form action="save_category.php" method="post" id="promo_form" enctype="multipart/form-data">

            <div class="form-group">
            <input class="form-control" type="hidden" name="idCategoria" id="idCategoria" value="<?php echo $categoria->getIdCategoria(); ?>">
            </div>



            <div class="form-group">
            <label for="titulo">Nombre de la categoría</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $categoria->getNombre(); ?>" required>
            </div>



            <div class="form-group">
              <label for="visible">Visible</label>
            <select name="visible" id="visible" class="form-control" style="width: 50%;">
              <option value="0" <?php if($categoria->getVisible()==0){echo 'selected';}?>>No</option>
              <option value="1" <?php if($categoria->getVisible()==1){echo 'selected';}?>>Sí</option>
            </select> 
            </div>


            <div class="form-group">
            <input type="submit" class="btn btn-default btn-custom" value="Guardar Categoría">
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