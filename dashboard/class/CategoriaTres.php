<?php

require_once 'Conexion.php';

class CategoriaTres {

    private $idCategoria;
    private $nombre;
    private $visible;
 

    const TABLA = 'categoria_tres';

    public function __construct($nombre=null, $visible=null, $idCategoria=null ) {

        $this->nombre = $nombre; 
        $this->visible = $visible; 
        $this->idCategoria = $idCategoria;

    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getVisible() {
        return $this->visible;
    }



    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setVisible($visible) {
        $this->visible = $visible;
    }

   



    public function guardar() {
        $conexion = new Conexion();
        if ($this->idCategoria) /* update */ {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET nombre = :nombre, visible = :visible  WHERE idCategoria = :idCategoria');
            $consulta->bindParam(':idCategoria', $this->idCategoria);
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':visible', $this->visible);  
         
            $consulta->execute();
        } else /* Inserta */ {
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (nombre, visible) VALUES (:nombre, :visible)');
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':visible', $this->visible);
          
         
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
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE idCategoria = :idCategoria');
        $consulta->bindParam(':idCategoria', $this->idCategoria);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorId($idCategoria) {

        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT  * FROM ' . self::TABLA . ' WHERE idCategoria = :idCategoria');
        $consulta->bindParam(':idCategoria', $idCategoria);
        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion = null;
        if ($registro) {
            return new self($registro['nombre'], $registro['visible'], $idCategoria);

        } else {
            return false;

        }
    }

 
    public static function recuperarTodos() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA. '  ORDER BY idCategoria DESC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
  
        $conexion = null;
        return $registros;
    }

    public static function recuperarCategoriasPublicadas() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM categoria_tres WHERE visible = 1 ORDER BY idCategoria DESC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
  
        $conexion = null;
        return $registros;
    }




}
