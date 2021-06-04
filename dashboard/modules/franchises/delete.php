<?php
    
     require_once '../../class/Franquicia.php';
  
    
    $idFranquicia = (isset($_REQUEST['idFranquicia'])) ? $_REQUEST['idFranquicia'] : null;
    if($idFranquicia){
        $franquicia = Franquicia::buscarPorId($idFranquicia);        
        $franquicia->eliminar();
        header('Location: index.php');
    }else{
        header('Location: index.php');
    }
    
?>