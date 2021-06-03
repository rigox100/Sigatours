<?php
require_once 'Conexion.php';

class Franquicia {

    private $idFranquicia;
    private $nombre_completo;
    private $email;
    private $ciudad;
    private $telefono;
    private $comentarios;
    private $fecha_creacion;
    
    
    const TABLA = 'franquicias';
    
  
    
    public function __construct( $nombre_completo=null, $email=null, $ciudad=null, $telefono=null, $comentarios=null, $fecha_creacion=null, $idFranquicia=null) {   
        $this->nombre_completo = $nombre_completo;
        $this->email = $email;
        $this->ciudad = $ciudad;
        $this->telefono = $telefono;
        $this->comentarios = $comentarios;
        $this->fecha_creacion = $fecha_creacion;
        $this->idFranquicia = $idFranquicia;
       
    }
    
    public function getIdFranquicia() {
        return $this->idFranquicia;
    }

    public function getNombreCompleto() {
        return $this->nombre_completo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getComentarios() {
        return $this->comentarios;
    }
    public function getFechaCreacion() {
        return $this->fecha_creacion;
    }

    
    
    //Setters
    public function setNombreCompleto($nombre_completo) {
        $this->nombre_completo = $nombre_completo;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setComentarios($comentarios) {
        $this->comentarios = $comentarios;
    }
    public function setFechaCreacion($fecha_creacion) {
        $this->fecha_creacion = $fecha_creacion;
    }
    

    public function guardar() {
        $conexion = new Conexion();
        if($this->idFranquicia)/*UPDATE*/{

           
            $consulta = $conexion->prepare(
                'UPDATE ' . self::TABLA . ' SET  nombre_completo = :nombre_completo, email = :email,
                ciudad = :ciudad, telefono = :telefono, comentarios = :comentarios WHERE idFranquicia = :idFranquicia');

            $consulta->bindParam(':idFranquicia', $this->idFranquicia);         
            $consulta->bindParam(':nombre_completo', $this->nombre_completo);
            $consulta->bindParam(':email', $this->email);
            $consulta->bindParam(':ciudad', $this->ciudad); 
            $consulta->bindParam(':telefono', $this->telefono);             
            $consulta->bindParam(':comentarios', $this->comentarios);   
           
            $consulta->execute();

        }else{           
            $consulta = $conexion->prepare(
                'INSERT INTO ' . self::TABLA . ' (nombre_completo, email, ciudad, telefono, comentarios) 
                 VALUES (:nombre_completo, :email, :ciudad, :telefono, :comentarios)');      
            
            $consulta->bindParam(':nombre_completo', $this->nombre_completo);
            $consulta->bindParam(':email', $this->email);
            $consulta->bindParam(':ciudad', $this->ciudad); 
            $consulta->bindParam(':telefono', $this->telefono);             
            $consulta->bindParam(':comentarios', $this->comentarios);   
           
            //var_dump($consulta);
            if($consulta->execute()){
                $this->id = $conexion->lastInsertId();
                
                return true;
            }else{       
                return false;
                
            }
        }
           
            $conexion = null;
    }


    
    public function eliminar(){
        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE idFranquicia = :idFranquicia');
        $consulta->bindParam(':idAgencia', $this->idFranquicia);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorId($idFranquicia) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE idFranquicia = :idFranquicia');
        $consulta->bindParam(':idFranquicia', $idFranquicia);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
           
            return new self($registro['nombre_completo'], $registro['email'], $registro['ciudad'], 
             $registro['telefono'], $registro['comentarios'], $idFranquicia);
        } else {

            return false;
            
        }
    }

 

    public static function recuperarTodos() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA. '  ORDER BY fecha_creacion DESC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
        $conexion = null;
        return $registros;
    }

    


}
