<?php
require_once 'dashboard/class/Agencia.php';


$idFranquicia = (isset($_REQUEST['idFranquicia'])) ? $_REQUEST['idFranquicia'] : null;

if ($idFranquicia) {
    $franquicia = Franquicia::buscarPorId($idFranquicia);
} else {
    $franquicia = new Franquicia();
}

    //Request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){


        $franquicia->setNombreCompleto($_POST['nombre_completo']);
        $franquicia->setEmail($_POST['email']);
        $franquicia->setCiudad($_POST['ciudad']);
        $franquicia->setTelefono($_POST['telefono']);
        $franquicia->setComentarios($_POST['comentarios']);
        $franquicia->setFechaCreacion(date('Y-m-d'));

         if ($franquicia->guardar()) {

            
            define("DEMO", false); 
        
        
            $template_file = "template/email_template/template_solicitud.php";
        
            $email= 'agencias@holidaytravel.com.mx, direcciongeneral@holidaytravel.com.mx, chris.lozano8603@gmail.com';

            $email_from = "Solicitud de registro <soporte@sigatours.com.mx>";
        
        
            $swap_var = array(
                "{SITE_ADDR}" => "https://www.sigatours.com",
                "{EMAIL_TITLE}" => "Ha recibido una solicitud de ".$_POST['nombre_completo'],
                "{EMAIL}" => $_POST['email'],
            );
        
        
            $email_headers = "From: ".$email_from."\r\nReply-To: ".$email_from."\r\n";
            $email_headers .= "MIME-Version: 1.0\r\n";
            $email_headers .= "Content-Type: text/html; charset=UTF-8 \r\n";
        
        
            $email_to = $email;
            $email_subject = $swap_var['{EMAIL_TITLE}']; 
        
        
            if (file_exists($template_file)){
                $email_message = file_get_contents($template_file);
            }else{
                die ("Error al cargar el template");
            }
            
            foreach (array_keys($swap_var) as $key){
                if (strlen($key) > 2 && trim($swap_var[$key]) != '')
                    $email_message = str_replace($key, $swap_var[$key], $email_message);
            }
        
            if (DEMO){
                die("<hr /><center>Esto solo es una prueba </center>");
        
            }
            if (mail($email_to, $email_subject, $email_message, $email_headers) ){ 
             
            header('Location: lib/notificar_usuario.php?email='.$_POST['email']);

          }else{
          

            header('Location: index.php');
          }
          
        }
    }
           
        
        

?>