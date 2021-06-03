<?php
    
     require_once '../../class/Destinos.php';
  
    
    $idPromocion = (isset($_REQUEST['idPromocion'])) ? $_REQUEST['idPromocion'] : null;
    if($idPromocion){
        $promocion = Destinos::buscarPorId($idPromocion);        
        $promocion->eliminar();
        unlink($promocion->getUrlImagen1()); 
        unlink($promocion->getDescripcion()); 
        header('Location: index.php');
    }else{
        header('Location: index.php');
    }
    
?>