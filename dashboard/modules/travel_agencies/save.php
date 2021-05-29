<?php
require_once '../../class/Agencia.php';

    $idAgencia = (isset($_REQUEST['idAgencia'])) ? $_REQUEST['idAgencia'] : null;
    
    if($idAgencia){        
        $agencia = Agencia::buscarPorId($idAgencia);        
    }else{
        $agencia = new Agencia();
    }

    //Request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $agencia->setRazonSocial($_POST['razon_social']);
        $agencia->setNombreComercial($_POST['nombre_comercial']);
        $agencia->setRFC($_POST['rfc']);
        $agencia->setCalle($_POST['calle']);
        $agencia->setNumExterior($_POST['num_exterior']);
        $agencia->setNumInterior($_POST['num_interior']);
        $agencia->setColonia($_POST['colonia']);
        $agencia->setMunicipio($_POST['municipio']);
        $agencia->setCiudad($_POST['ciudad']);
        $agencia->setEstado($_POST['estado']);
        $agencia->setCP($_POST['cp']);
        $agencia->setPais($_POST['pais']);
        $agencia->setMoneda($_POST['moneda']);
        $agencia->setTel1($_POST['tel1']);
        $agencia->setTel2($_POST['tel2']);
        $agencia->setTel3($_POST['tel3']);
        $agencia->setPaginaWeb($_POST['pagina_web']);
        $agencia->setActivo('Si');
        $agencia->setClaveBackOffice($_POST['clave_back_office']);
        $agencia->setHeaderFooter('Activo');
        $agencia->setMenu('Activo');
        $agencia->setObservaciones($_POST['observaciones']);
        $agencia->setNombreContacto($_POST['nombre_contacto']);
        $agencia->setApellidoPaterno($_POST['apellido_paterno']);
        $agencia->setApellidoMaterno($_POST['apellido_materno']);
        $agencia->setCargo($_POST['cargo']);
        $agencia->setSexo($_POST['sexo']);
        $agencia->setTelDirecto($_POST['tel_directo']);
        $agencia->setTelMovil($_POST['tel_movil']);
        $agencia->setEmailContacto($_POST['email_contacto']);
        $agencia->setEmailServidor($_POST['email_servidor']);
        $agencia->setClave($_POST['clave']);
        $agencia->setServidorSMTP($_POST['servidor_smtp']);
        $agencia->setPortSMTP($_POST['port_smtp']);
        $agencia->setFechaCreacion(date('Y-m-d'));


        $rutaServidor = 'uploads/images';
        $rutaServidorFiles = 'uploads/files';

        if ($_FILES['url_img1']['name']!=null) {
    
          if (!is_dir('uploads/images')) {
            mkdir('uploads/images', 0777, true); 
          }
         
          $rutaTemporal1 = $_FILES['url_img1']['tmp_name'];
          $extension = pathinfo($_FILES['url_img1']['name'], PATHINFO_EXTENSION);
          $nombreImagen1 = date('YmdHis').'_logo.'.$extension;
          $rutaDestino1 = $rutaServidor.'/'.$nombreImagen1;
          unlink($_POST['logo']);
          move_uploaded_file($rutaTemporal1, $rutaDestino1); 
          $agencia->setLogo($rutaDestino1); 
        
    } else{
          $agencia->setLogo($_POST['logo']);    
  } 


        $agencia->guardar();
       
        if($idAgencia != ""){
            header('Location: index.php?status_code=2');
        }else{
            header('Location: index.php?status_code=1');
        }
        
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
          if (isset($_REQUEST['idAgencia'])){

            $title = 'Editar';
          }else{
            $title = 'Registrar nueva';
          }
          ?>

          <div  style="width:80%; margin-left:10%; background-color: white; padding:20px; border-radius:10px;">
            <h4 class="text-center"><?php echo $title ?> agencia</h4> <br>
            <form action="save.php" method="post" id="slider_form" enctype="multipart/form-data">


            <h4 class="section-form">Información</h4>

            <div class="form-group">
            <input class="form-control" type="hidden" name="idAgencia" id="idAgencia" value="<?php echo $agencia->getIdAgencia(); ?>">
            </div>

            <div class="form-group">
            <input class="form-control" type="hidden" name="logo" id="logo" value="<?php echo $agencia->getLogo(); ?>">
            </div>

            <div class="form-group">
            <label for="razon_social">Razón Social <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="razon_social" id="razon_social" value="<?php echo $agencia->getRazonSocial(); ?>" required>
            </div>

            <div class="form-group">
            <label for="nombre_comercial">Nombre Comercial <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="nombre_comercial" id="nombre_comercial" value="<?php echo $agencia->getNombreComercial(); ?>" required>
            </div>

            <div class="form-group">
            <label for="rfc">RFC <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="rfc" id="rfc" value="<?php echo $agencia->getRFC(); ?>" required>
            </div>

            <div class="form-group">
            <label for="calle">Calle <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="calle" id="calle" value="<?php echo $agencia->getCalle(); ?>" required>
            </div>

            <div class="form-group">
            <label for="num_exterior">Número Exterior <span class="text text-danger">*</span></label>
            <input class="form-control" style="width: 20%;" type="text" name="num_exterior" id="num_exterior" value="<?php echo $agencia->getNumExterior(); ?>" required>
            </div>

            <div class="form-group">
            <label for="num_interior">Número Interior</label>
            <input class="form-control" style="width: 20%;" type="text" name="num_interior" id="num_interior" value="<?php echo $agencia->getNumInterior(); ?>">
            </div>

            <div class="form-group">
            <label for="colonia">Colonia <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="colonia" id="colonia" value="<?php echo $agencia->getColonia(); ?>" required>
            </div>
            
            <div class="form-group">
            <label for="municipio">Municipio <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="municipio" id="municipio" value="<?php echo $agencia->getMunicipio(); ?>" required>
            </div>

            <div class="form-group">
            <label for="ciudad">Ciudad <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="ciudad" id="ciudad" value="<?php echo $agencia->getCiudad(); ?>" required>
            </div>

            <div class="form-group">
            <label for="estado">Estado <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="estado" id="estado" value="<?php echo $agencia->getEstado(); ?>" required>
            </div>


            <div class="form-group">
            <label for="cp">Codigo Postal <span class="text text-danger">*</span></label>
            <input class="form-control" style="width: 20%;" type="text" name="cp" id="cp" value="<?php echo $agencia->getCP(); ?>" required>
            </div>

            <div class="form-group">
            <label for="pais">País <span class="text text-danger">*</span></label>
                <select id="pais" name="pais"  class="form-control w-50" required>
                  <option value=''>Selecciona un país</option>
                  <option value='Antigua y Barbuda'>Antigua y Barbuda</option>
                  <option value='Argentina'>Argentina</option>
                  <option value='Aruba'>Aruba</option>
                  <option value='Bahamas'>Bahamas</option>
                  <option value='Barbados'>Barbados</option>
                  <option value='Belice'>Belice</option>
                  <option value='Bolivia'>Bolivia</option>
                  <option value='Brasil'>Brasil</option>
                  <option value='Caribe'>Caribe</option>
                  <option value='Chile'>Chile</option>
                  <option value='Colombia'>Colombia</option>
                  <option value='Costa Rica'>Costa Rica</option>
                  <option value='Cuba'>Cuba</option>
                  <option value='Dominica'>Dominica</option>
                  <option value='Ecuador'>Ecuador</option>
                  <option value='El Salvador'>El Salvador</option>
                  <option value='Grenada'>Grenada</option>
                  <option value='Guadalupe'>Guadalupe</option>
                  <option value='Guatemala'>Guatemala</option>
                  <option value='Guyana'>Guyana</option>
                  <option value='Guyana Francesa'>Guyana Francesa</option>
                  <option value='Haití'>Haití</option>
                  <option value='Honduras'>Honduras</option>
                  <option value='Islas Caimán'>Islas Caimán</option>
                  <option value='Islas Turcas y Caicos'>Islas Turcas y Caicos</option>
                  <option value='Islas Vírgenes'>Islas Vírgenes</option>
                  <option value='Jamaica'>Jamaica</option>
                  <option value='Martinica'>Martinica</option>
                  <option value='México' selected>México</option>
                  <option value='Nicaragua'>Nicaragua</option>
                  <option value='Panamá'>Panamá</option>
                  <option value='Paraguay'>Paraguay</option>
                  <option value='Perú'>Perú</option>
                  <option value='Puerto Rico'>Puerto Rico</option>
                  <option value='República Dominicana'>República Dominicana</option>
                  <option value='San Bartolomé'>San Bartolomé</option>
                  <option value='San Cristóbal y Nieves'>San Cristóbal y Nieves</option>
                  <option value='San Vicente y las Granadinas'>San Vicente y las Granadinas</option>
                  <option value='Santa Lucía'>Santa Lucía</option>
                  <option value='Suriname'>Suriname</option>
                  <option value='Trinvaluead y Tobago'>Trinvaluead y Tobago</option>
                  <option value='Uruguay'>Uruguay</option>
                  <option value='Venezuela'>Venezuela</option>
                </select> 
                </div>

            <div class="form-group">
            <label for="moneda">Moneda <span class="text text-danger">*</span></label>
            <select name="moneda" id="moneda" class="form-control w-50" required>
                  <option value=''>Selecciona una moneda</option>
                  <option value='Peso Mexicano' selected>Peso mexicano</option>
                  <option value='Dólar Estadounidense'>Dólar estadounidense</option>
                  <option value='Peso Argentino'>Peso argentino</option>
                  <option value='Dólar de Barbados'> Dólar de Barbados</option>
                  <option value='Dólar Beliceño'> Dólar beliceño</option>
                  <option value='Boliviano'>Boliviano</option>
                  <option value='Real Brasileño'> Real brasileño</option>
                  <option value='Dólar Canadiense'>Dólar canadiense</option>
                  <option value='Peso Chileno'>Peso chileno</option>
                  <option value='Peso Colombiano'>Peso colombiano</option>
                  <option value='Colón Costarricense'> Colón costarricense</option>
                  <option value='Peso Cubano'> Peso cubano</option>
                  <option value='Dólar del Caribe Oriental'> Dólar del Caribe Oriental</option>
                  <option value='Quetzal '> Quetzal </option>
                  <option value='Dolar Guyanés'>Dolar guyanés</option>
                  <option value='Gourde'> Gourde</option>
                  <option value='Lempira'> Lempira</option>
                  <option value='Dólar Jamaicano'> Dólar jamaicano</option>
                  <option value='Córdoba'> Córdoba</option>
                  <option value='Guaraní'> Guaraní</option>
                  <option value='Sol Peruano'> Sol Peruano</option>
                  <option value='Peso Dominicano'> Peso dominicano</option>
                  <option value='Dólar Surinamés'>Dólar surinamés</option>
                  <option value='Dólar Trinitense'> Dólar trinitense</option>
                  <option value='Peso Uruguayo'> Peso uruguayo</option>
                  <option value='Bolívar'> Bolívar</option>
                  </select> 
            </div>

            <div class="form-group">
            <label for="telefonos">Teléfonos <span class="text text-danger">*</span></label>
            <input class="form-control w-50" type="text" name="tel1" id="tel1" value="<?php echo $agencia->getTel1(); ?>" placeholder="Número Telefónico 1" required>
            <input class="form-control w-50" type="text" name="tel2" id="tel2" value="<?php echo $agencia->getTel2(); ?>" placeholder="Número Telefónico 2">
            <input class="form-control w-50" type="text" name="tel3" id="tel3" value="<?php echo $agencia->getTel3(); ?>" placeholder="Número Telefónico 3">
            </div>

            <h4 class="section-form">Configuraciones del sitio web</h4>

            <div class="form-group">
            <label for="pagina_web">Página web</label>
            <input class="form-control" type="text" name="pagina_web" id="pagina_web" value="<?php echo $agencia->getPaginaWeb(); ?>">
            </div>
            <hr>
            <div class="form-group">
            <input type="hidden" id="activo" name="activo" value="Sí">
            </div>

            <div class="form-group">
            
            <input class="form-control" type="hidden" name="clave_back_office" id="clave_back_office" value="<?php echo $agencia->getClaveBackOffice(); ?>" >
            </div>

            <!-- <h4 class="section-form">Configuraciones del sitio web</h4>  -->

            <div class="form-group">
            <label for="url_img1">Logo </label>
            <br><small class="text text-danger"> Si cuenta con el logo de la empresa, puede subir la imagen con dimensiones de 180 x 180 píxeles en formato JPG o PNG</small>
            <?php    
            if(isset($_REQUEST['idAgencia'])){
              if($agencia->getLogo()!=""){
              ?>
              </br>
            <img src="<?= $agencia->getLogo(); ?>" style="width:180px; height:180px;" />
            </br></br>
            <?php
            } 
          } 
            ?>
            <input type="file" class="form-control-file" name="url_img1" id="url_img1" ?> 
            </div>


            <!-- <h4 class="section-form">Observaciones y políticas para las reservaciones de hoteles</h4>  -->

            <div class="form-group">
            <input class="form-control" type="hidden" name="observaciones" id="observaciones" value="<?php echo $agencia->getObservaciones(); ?>">
            </div>

            <h4 class="section-form">Datos del contacto</h4> 

            <div class="form-group">
            <label for="nombre_contacto">Nombre <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="nombre_contacto" id="nombre_contacto" value="<?php echo $agencia->getNombreContacto(); ?>" required>
            </div>

            <div class="form-group">
            <label for="apellido_paterno">Apellido Paterno <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="apellido_paterno" id="apellido_paterno" value="<?php echo $agencia->getApellidoPaterno(); ?>" required>
            </div>

            <div class="form-group">
            <label for="apellido_materno">Apellido Materno <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="apellido_materno" id="apellido_materno" value="<?php echo $agencia->getApellidoMaterno(); ?>" required>
            </div>

            <div class="form-group">
            <label for="cargo">Cargo <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="cargo" id="cargo" value="<?php echo $agencia->getCargo(); ?>" required>
            </div>

            <div class="form-group">
            <label for="logo">Sexo <span class="text text-danger">*</span></label>
            <div class="form-check">
              <label class="form-check-label">
              <input type="radio" class="form-check-input" name="sexo" value="M" checked>Masculino
              </label>
              <label class="form-check-label" style="margin-left: 50px;">
              <input type="radio" class="form-check-input" name="sexo" value="F">Femenino
              </label>
            </div>
            </div>

            <div class="form-group">
            <label for="tel_directo">Teléfono Directo <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="tel_directo" id="tel_directo" value="<?php echo $agencia->getTelDirecto(); ?>" required>
            </div>

            <div class="form-group">
            <label for="tel_movil">Teléfono Móvil</label>
            <input class="form-control" type="text" name="tel_movil" id="tel_movil" value="<?php echo $agencia->getTelMovil(); ?>">
            </div>

            <div class="form-group">
            <label for="email_contacto">Correo Electrónico <span class="text text-danger">*</span></label>
            <input class="form-control" type="email" name="email_contacto" id="email_contacto" value="<?php echo $agencia->getEmailContacto(); ?>" required>
            </div>

            <!-- <h4 class="section-form">Dirección para el envío de correos electrónicos</h4>  -->


            <div class="form-group">
            <!-- <label for="email_servidor">Correo Electrónico</label> -->
            <input class="form-control" type="hidden" name="email_servidor" id="email_servidor" value="<?php echo $agencia->getEmailServidor(); ?>">
            </div>

            <div class="form-group">
            <!-- <label for="clave">Clave</label> -->
            <input class="form-control" type="hidden" name="clave" id="clave" value="<?php echo $agencia->getClave(); ?>">
            </div>

            <div class="form-group">
            <!-- <label for="servidor_smtp">Servidor SMTP</label> -->
            <input class="form-control" type="hidden" name="servidor_smtp" id="servidor_smtp" value="<?php echo $agencia->getServidorSMTP(); ?>">
            </div>

            <div class="form-group">
            <!-- <label for="smtp">Port SMTP</label> -->
            <input class="form-control" type="hidden" name="port_smtp" id="port_smtp" value="<?php echo $agencia->getPortSMTP(); ?>">
            </div>



            <div class="form-group">
            <input type="submit" class="btn btn-default btn-custom" value="Guardar información">
            </div>  
           
            </form>
            
            
            

            </div>

          </div>
          <!-- /.col -->
        </div>
        <br>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php    
include_once '../../assets/template/footer.php';

?>