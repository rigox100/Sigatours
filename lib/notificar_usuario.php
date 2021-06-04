<?php

    if(isset($_GET['email'])){

            
        
            define("DEMO", false); 
        
        
            $template_file = "../template/email_template/template_solicitud2.php";
        
            $email= $_GET['email'];

            $email_from = "Solicitud de franquicia <soporte@sigatours.com>";
        
        
            $swap_var = array(
                "{SITE_ADDR}" => "https://www.sigatours.com",
                "{EMAIL_TITLE}" => "Su solicitud ha sido recibida",
               
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
             
            header('Location: ../template/email_template/confirmation.php?status_code=1');

          }else{
          

            header('Location: ../index.php');
          }
          
        
    }
           
        
        

?>