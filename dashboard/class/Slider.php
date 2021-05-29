<?php
require_once 'Conexion.php';

class Slider {

    private $idSlider;
    private $titulo;
    private $url_imagen1;
    private $descripcion;
    private $fecha_publicacion;
    private $visible;
    
    
    

    const TABLA = 'slider';
    
  
    
    public function __construct( $titulo=null, $url_imagen1=null, $descripcion=null, $fecha_publicacion=null, $visible=null, $idSlider=null) {
       
        
        $this->titulo = $titulo;
        $this->url_imagen1 = $url_imagen1;
        $this->descripcion = $descripcion;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->visible = $visible;
        $this->idSlider = $idSlider;
        

    }
    
    public function getidSlider() {
        return $this->idSlider;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getUrlImagen1() {
        return $this->url_imagen1;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getFechaPublicacion() {
        return $this->fecha_publicacion;
    }

    public function getVisible() {
        return $this->visible;
    }
    

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setUrlImagen1($url_imagen1) {
        $this->url_imagen1 = $url_imagen1;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setFechaPublicacion($fecha_publicacion) {
        $this->fecha_publicacion = $fecha_publicacion;
    }

    public function setVisible($visible) {
        $this->visible = $visible;
    }

  

    public function guardar() {
        $conexion = new Conexion();
        if($this->idSlider)/*UPDATE*/{
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET  titulo = :titulo, url_imagen1 = :url_imagen1, descripcion = :descripcion, fecha_publicacion = :fecha_publicacion, visible = :visible WHERE idSlider = :idSlider');
            $consulta->bindParam(':idSlider', $this->idSlider);         
            $consulta->bindParam(':titulo', $this->titulo);
            $consulta->bindParam(':url_imagen1', $this->url_imagen1);
            $consulta->bindParam(':descripcion', $this->descripcion); 
            $consulta->bindParam(':fecha_publicacion', $this->fecha_publicacion);             
            $consulta->bindParam(':visible', $this->visible);   
            $consulta->execute();
        }else /*Insert*/{
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (titulo, url_imagen1, descripcion, fecha_publicacion, visible) VALUES (:titulo, :url_imagen1,  :descripcion, :fecha_publicacion, :visible)');
            $consulta->bindParam(':titulo', $this->titulo);
            $consulta->bindParam(':url_imagen1', $this->url_imagen1);
            $consulta->bindParam(':descripcion', $this->descripcion); 
            $consulta->bindParam(':fecha_publicacion', $this->fecha_publicacion);             
            $consulta->bindParam(':visible', $this->visible);   
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
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE idSlider = :idSlider');
        $consulta->bindParam(':idSlider', $this->idSlider);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorId($idSlider) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE idSlider = :idSlider');
        $consulta->bindParam(':idSlider', $idSlider);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
           
            return new self($registro['titulo'], $registro['url_imagen1'], $registro['descripcion'],  $registro['fecha_publicacion'], $registro['visible'], $registro['idSlider']);
            
        } else {
            return false;
            
        }
    }

 

    public static function recuperarTodos() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA. '  ORDER BY idSlider DESC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
  
        $conexion = null;
        return $registros;
    }

    public static function recuperarPublicados() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM slider WHERE visible = 1 ORDER BY idSlider DESC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
  
        $conexion = null;
        return $registros;
    }


}
