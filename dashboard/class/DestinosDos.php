<?php
require_once 'Conexion.php';

class DestinosDos {

    private $idPromocion;
    private $titulo;
    private $url_imagen1;
    private $descripcion;
    private $fecha_publicacion;
    private $visible;
    private $servicio;
    private $hotel;
    private $precio;
    
    
    

    const TABLA = 'destinos_dos';
    
  
    
    public function __construct( $titulo=null, $url_imagen1=null, $descripcion=null, $fecha_publicacion=null, $visible=null, $servicio=null, $hotel=null, $precio=null, $idPromocion=null) {
       
        
        $this->titulo = $titulo;
        $this->url_imagen1 = $url_imagen1;
        $this->descripcion = $descripcion;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->visible = $visible;
        $this->servicio = $servicio;
        $this->hotel = $hotel;
        $this->precio = $precio;
        $this->idPromocion = $idPromocion;
        

    }
    
    public function getIdPromocion() {
        return $this->idPromocion;
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

    public function getServicio() {
        return $this->servicio;
    }
    public function getHotel() {
        return $this->hotel;
    }
    public function getPrecio() {
        return $this->precio;
    }



    
    //Setters
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

    public function setServicio($servicio) {
        $this->servicio = $servicio;
    }
    public function setHotel($hotel) {
        $this->hotel = $hotel;
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }

  

    public function guardar() {
        $conexion = new Conexion();
        if($this->idPromocion)/*UPDATE*/{
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET  titulo = :titulo, url_imagen1 = :url_imagen1, descripcion = :descripcion, fecha_publicacion = :fecha_publicacion, visible = :visible, servicio = :servicio, hotel = :hotel, precio = :precio WHERE idPromocion = :idPromocion');
            $consulta->bindParam(':idPromocion', $this->idPromocion);         
            $consulta->bindParam(':titulo', $this->titulo);
            $consulta->bindParam(':url_imagen1', $this->url_imagen1);
            $consulta->bindParam(':descripcion', $this->descripcion); 
            $consulta->bindParam(':fecha_publicacion', $this->fecha_publicacion);             
            $consulta->bindParam(':visible', $this->visible);   
            $consulta->bindParam(':servicio', $this->servicio); 
            $consulta->bindParam(':hotel', $this->hotel); 
            $consulta->bindParam(':precio', $this->precio); 
            $consulta->execute();
        }else /*Insert*/{
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (titulo, url_imagen1, descripcion, fecha_publicacion, visible, servicio, hotel, precio) VALUES (:titulo, :url_imagen1,  :descripcion, :fecha_publicacion, :visible, :servicio, :hotel, :precio)');
            $consulta->bindParam(':titulo', $this->titulo);
            $consulta->bindParam(':url_imagen1', $this->url_imagen1);
            $consulta->bindParam(':descripcion', $this->descripcion); 
            $consulta->bindParam(':fecha_publicacion', $this->fecha_publicacion);             
            $consulta->bindParam(':visible', $this->visible);   
            $consulta->bindParam(':servicio', $this->servicio); 
            $consulta->bindParam(':hotel', $this->hotel); 
            $consulta->bindParam(':precio', $this->precio); 
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
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE idPromocion = :idPromocion');
        $consulta->bindParam(':idPromocion', $this->idPromocion);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorId($idPromocion) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE idPromocion = :idPromocion');
        $consulta->bindParam(':idPromocion', $idPromocion);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
           
            return new self($registro['titulo'], $registro['url_imagen1'], $registro['descripcion'],  $registro['fecha_publicacion'], $registro['visible'], $registro['servicio'],  $registro['hotel'],  $registro['precio'], $registro['idPromocion']);
            
        } else {
            return false;
            
        }
    }

 

    public static function recuperarTodos() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA. '  ORDER BY idPromocion DESC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
  
        $conexion = null;
        return $registros;
    }

    public static function recuperarPromocionesPublicadas() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM destinos_dos WHERE visible = 1 ORDER BY idPromocion DESC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
  
        $conexion = null;
        return $registros;
    }

}
