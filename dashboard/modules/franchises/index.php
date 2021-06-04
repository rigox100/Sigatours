<?php
require_once '../../class/Franquicia.php';
include_once '../../assets/template/header.php';
$franquicias = Franquicia::recuperarTodos();
?>

<!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h3 class="text-center"> Administrar solicitudes de franquicias </h3>
            
              <a href="save.php" class="btn btn-default btn-custom" > <i class="fas fa-plus"></i> Agregar nueva franquicia </a><br><br>

              <br>

              <?php  if (count($franquicias) > 0): ?>

              <hr>

            <table class="table table-bordered" id="table-data" >
  <thead class="thead-dark">
    <tr class="text-center">
    
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Comentarios</th>
      <th scope="col">Fecha de creación</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach ($franquicias as $item): ?>

    <tr>
      <td><?php echo $item['nombre_completo'] ?></td>
      <td><?php echo $item['email']; ?></td>
      <td><?php echo $item['ciudad']; ?></td>
      <td><?php echo $item['telefono']; ?></td>
      <td><small><?php echo $item['comentarios']; ?></small></td>
      <td class="text-center"><?php $date= date_create($item['fecha_creacion']); echo date_format($date,"d-m-Y"); ?></td>
      <td class="text-center"><a href="save.php?idFranquicia=<?php echo $item[0];?>" class="btn btn-warning far fa-edit"></a></td>
      <td class="text-center"><a href="delete.php?idFranquicia=<?php echo $item[0];?>" onclick="return confirm('¿Está seguro que desea eliminar este registro?')" class="btn btn-danger far fa-trash-alt"></a></td> 
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<?php else: ?>
            <p class="alert alert-info"> No se encontraron solicitudes de franquicias </p>
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