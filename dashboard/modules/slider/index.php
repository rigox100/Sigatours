<?php
require_once '../../class/Slider.php';
include_once '../../assets/template/header.php';
$slider = Slider::recuperarTodos();
?>

<!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h3 class="text-center"> Administrar Slider </h3>
            
              <a href="save.php" class="btn btn-default btn-custom" > <i class="fas fa-plus"></i> Agregar nueva imagen al slider </a><br><br>

              <br>

              <?php  if (count($slider) > 0): ?>

              <hr>

            <table class="table table-bordered" id="table-data" >
  <thead class="thead-dark">
    <tr class="text-center">
    
    <th scope="col">Imagen del slide</th>
      <th scope="col">Título</th>
      <th scope="col">Fecha de Publicación</th>
      <th scope="col">Visible</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach ($slider as $item): ?>

    <!-- Modal -->
<div class="modal fade" id="showDetailSlider<?php echo $item[0] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $item['titulo'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="<?php echo $item['url_imagen1']; ?>" class="article-image-thumbnail2">
      <br>
      <p class="ml-4">Publicado el: <?php $date= date_create($item['fecha_publicacion']); echo date_format($date,"d-m-Y"); ?></p>
      <br>
      <p class="ml-4"><?php echo $item['descripcion'] ?></p>
      <br>
      <?php if($item['visible']==0){ echo '<p class="alert alert-warning" ">Actualmente este elemento no es visible en el Slider principal</p>'; }else{ echo '<p class="alert alert-success" ">Visible en el Slider Principal</p'; } ?> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a href="save.php?idSlider=<?php echo $item[0];?>" class="btn btn-warning far fa-edit">Editar información</a>
      </div>
    </div>
  </div>
</div>
    <tr>
      
      <td><a href="#" data-toggle="modal" data-target="#showDetailSlider<?php echo $item[0] ?>"> <img src="<?php echo $item['url_imagen1']; ?>" class="article-image-thumbnail"> </a></td>
      <td><?php echo $item['titulo']; ?></td>
      <td><?php $date= date_create($item['fecha_publicacion']); echo date_format($date,"d-m-Y"); ?></td>
      <td class="text-center"><?php if($item['visible']==1){ echo '<a href="#" class="btn btn-success fas fa-check-circle lock" alt="Visible"></a>'; }else{ echo '<a href="#" class="btn btn-warning fas fa-pause-circle lock" alt="No Visible"></a>'; } ?></td>
      <td class="text-center"><a href="save.php?idSlider=<?php echo $item[0];?>" class="btn btn-warning far fa-edit"></a></td>
      <td class="text-center"><a href="delete.php?idSlider=<?php echo $item[0];?>" onclick="return confirm('¿Está seguro que desea eliminar este registro?')" class="btn btn-danger far fa-trash-alt"></a></td> 
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<?php else: ?>
            <p class="alert alert-info"> No se encontraron elementos para slider </p>
        <?php endif; ?>
          
            
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