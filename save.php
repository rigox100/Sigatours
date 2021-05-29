<?php
require_once './dashboard/class/Agencia.php';

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
            
            //header('Location: index.php?status_code=1');
            echo '<script>
            alert("Se Guardó Correctamente");
            
            window.location.href="index.php";
            </script>';

   

        }
        
    }

?>


