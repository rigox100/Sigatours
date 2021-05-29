<?php
    
     require_once '../../class/Agencia.php';
    
    $idAgencia = (isset($_REQUEST['idAgencia'])) ? $_REQUEST['idAgencia'] : null;
    


    if($idAgencia){
        $agencia = Agencia::buscarPorId($idAgencia);        
        $agencia->eliminar();
        unlink($agencia->getLogo()); 
        header('Location: index.php');
            
    }
    
?>