<?php
require_once 'Conexion.php';

class Agencia {

    private $idAgencia;
    private $razon_social;
    private $nombre_comercial;
    private $rfc;
    private $calle;
    private $num_exterior;
    private $num_interior;
    private $colonia;
    private $municipio;
    private $ciudad;
    private $estado;
    private $cp;
    private $pais;
    private $moneda;
    private $tel1;
    private $tel2;
    private $tel3;
    private $pagina_web;
    private $activo;
    private $clave_back_office;
    private $header_footer;
    private $menu;
    private $logo;
    private $observaciones;
    private $nombre_contacto;
    private $apelldido_paterno;
    private $apelldido_materno;
    private $cargo;
    private $sexo;
    private $tel_directo;
    private $tel_movil;
    private $email_contacto;
    private $email_servidor;
    private $clave;
    private $servidor_smtp;
    private $port_smtp;
    private $fecha_creacion;
    
    

    const TABLA = 'agencias';
    
  
    
    public function __construct( $razon_social=null, $nombre_comercial=null, $rfc=null, $calle=null, $num_exterior=null,
     $num_interior=null, $colonia=null, $municipio=null, $ciudad=null, $estado=null, $cp=null, $pais=null, 
     $moneda=null, $tel1=null, $tel2=null, $tel3=null, $pagina_web=null, $activo=null, $clave_back_office=null,
     $header_footer=null, $menu=null, $logo=null, $observaciones=null, $nombre_contacto=null, $apelldido_paterno=null, 
     $apelldido_materno=null, $cargo=null, $sexo=null, $tel_directo=null, $tel_movil=null, $email_contacto=null, $email_servidor=null,
     $clave=null, $servidor_smtp=null, $port_smtp=null, $fecha_creacion=null, $idAgencia=null) {
       
        
        $this->razon_social = $razon_social;
        $this->nombre_comercial = $nombre_comercial;
        $this->rfc = $rfc;
        $this->calle = $calle;
        $this->num_exterior = $num_exterior;
        $this->num_interior = $num_interior;
        $this->colonia = $colonia;
        $this->municipio = $municipio;
        $this->ciudad = $ciudad;
        $this->estado = $estado;
        $this->cp = $cp;
        $this->pais = $pais;
        $this->moneda = $moneda;
        $this->tel1 = $tel1;
        $this->tel2 = $tel2;
        $this->tel3 = $tel3;
        $this->pagina_web = $pagina_web;
        $this->activo = $activo;
        $this->clave_back_office = $clave_back_office;
        $this->header_footer = $header_footer;
        $this->menu = $menu;
        $this->logo = $logo;
        $this->observaciones = $observaciones;
        $this->nombre_contacto = $nombre_contacto;
        $this->apelldido_paterno = $apelldido_paterno;
        $this->apelldido_materno = $apelldido_materno;
        $this->cargo = $cargo;
        $this->sexo = $sexo;
        $this->tel_directo = $tel_directo;
        $this->tel_movil = $tel_movil;
        $this->email_contacto = $email_contacto;
        $this->email_servidor = $email_servidor;
        $this->clave = $clave;
        $this->servidor_smtp = $servidor_smtp;
        $this->port_smtp = $port_smtp;
        $this->fecha_creacion = $fecha_creacion;
        $this->idAgencia = $idAgencia;
       
        

    }
    
    public function getIdAgencia() {
        return $this->idAgencia;
    }

    public function getRazonSocial() {
        return $this->razon_social;
    }

    public function getNombreComercial() {
        return $this->nombre_comercial;
    }

    public function getRFC() {
        return $this->rfc;
    }

    public function getCalle() {
        return $this->calle;
    }

    public function getNumExterior() {
        return $this->num_exterior;
    }

    public function getNumInterior() {
        return $this->num_interior;
    }

    public function getColonia() {
        return $this->colonia;
    }

    public function getMunicipio() {
        return $this->municipio;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getCP() {
        return $this->cp;
    }

    public function getPais() {
        return $this->pais;
    }

    public function getMoneda() {
        return $this->moneda;
    }

    public function getTel1() {
        return $this->tel1;
    }

    public function getTel2() {
        return $this->tel2;
    }
    
    public function getTel3() {
        return $this->tel3;
    }

    public function getPaginaWeb() {
        return $this->pagina_web;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function getClaveBackOffice() {
        return $this->clave_back_office;
    }

    public function getHeaderFooter() {
        return $this->header_footer;
    }

    public function getMenu() {
        return $this->menu;
    }

    public function getLogo() {
        return $this->logo;
    }

    public function getObservaciones() {
        return $this->observaciones;
    }
    
    public function getNombreContacto() {
        return $this->nombre_contacto;
    }

    public function getApellidoPaterno() {
        return $this->apelldido_paterno;
    }
    public function getApellidoMaterno() {
        return $this->apelldido_materno;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getTelDirecto() {
        return $this->tel_directo;
    }

    public function getTelMovil() {
        return $this->tel_movil;
    }

    public function getEmailContacto() {
        return $this->email_contacto;
    }

    public function getEmailServidor() {
        return $this->email_servidor;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getServidorSMTP() {
        return $this->servidor_smtp;
    }

    public function getPortSMTP() {
        return $this->port_smtp;
    }

    public function getFechaCreacion() {
        return $this->fecha_creacion;
    }
    
    //Setters
    public function setRazonSocial($razon_social) {
        $this->razon_social = $razon_social;
    }

    public function setNombreComercial($nombre_comercial) {
        $this->nombre_comercial = $nombre_comercial;
    }

    public function setRFC($rfc) {
        $this->rfc = $rfc;
    }

    public function setCalle($calle) {
        $this->calle = $calle;
    }

    public function setNumExterior($num_exterior) {
        $this->num_exterior = $num_exterior;
    }

    public function setNumInterior($num_interior) {
        $this->num_interior = $num_interior;
    }
    public function setColonia($colonia) {
        $this->colonia = $colonia;
    }
    public function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }


    public function setCiudad($ciudad) {
        $this->ciudad =$ciudad;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setCP($cp) {
        $this->cp = $cp;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }
  
    public function setMoneda($moneda) {
        $this->moneda = $moneda;
    }

    public function setTel1($tel1) {
        $this->tel1 = $tel1;
    }

    public function setTel2($tel2) {
        $this->tel2 = $tel2;
    }

    public function setTel3($tel3) {
        $this->tel3 = $tel3;
    }

    public function setPaginaWeb($pagina_web) {
        $this->pagina_web = $pagina_web;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function setClaveBackOffice($clave_back_office) {
        $this->clave_back_office = $clave_back_office;
    }

    public function setHeaderFooter($header_footer) {
        $this->header_footer = $header_footer;
    }

    public function setMenu($menu) {
        $this->menu = $menu;
    }

    public function setLogo($logo) {
        $this->logo = $logo;
    }
    
    public function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }
    public function setNombreContacto($nombre_contacto) {
        $this->nombre_contacto = $nombre_contacto;
    }

    public function setApellidoPaterno($apelldido_paterno) {
        $this->apelldido_paterno = $apelldido_paterno;
    }

    public function setApellidoMaterno($apelldido_materno) {
        $this->apelldido_materno = $apelldido_materno;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setTelDirecto($tel_directo) {
        $this->tel_directo = $tel_directo;
    }

    public function setTelMovil($tel_movil) {
        $this->tel_movil = $tel_movil;
    }

    public function setEmailContacto($email_contacto) {
        $this->email_contacto = $email_contacto;
    }

    public function setEmailServidor($email_servidor) {
        $this->email_servidor = $email_servidor;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function setServidorSMTP($servidor_smtp) {
        $this->servidor_smtp = $servidor_smtp;
    }

    public function setPortSMTP($port_smtp) {
        $this->port_smtp = $port_smtp;
    }
    public function setFechaCreacion($fecha_creacion) {
        $this->fecha_creacion = $fecha_creacion;
    }



    public function guardar() {
        $conexion = new Conexion();
        if($this->idAgencia)/*UPDATE*/{

           
            $consulta = $conexion->prepare(
                'UPDATE ' . self::TABLA . ' SET  razon_social = :razon_social, nombre_comercial = :nombre_comercial,
                 rfc = :rfc, calle = :calle, num_exterior = :num_exterior, num_interior = :num_interior, colonia = :colonia,
                  municipio = :municipio, ciudad = :ciudad, estado = :estado,
                  cp = :cp, pais = :pais, moneda = :moneda, tel1 = :tel1, tel2 = :tel2, tel3 = :tel3,
                  pagina_web = :pagina_web, activo = :activo, clave_back_office = :clave_back_office,
                  header_footer = :header_footer, menu = :menu, logo = :logo, observaciones = :observaciones,
                  nombre_contacto = :nombre_contacto, apellido_paterno = :apellido_paterno, apellido_materno = :apellido_materno,
                  cargo = :cargo, sexo = :sexo, tel_directo = :tel_directo, tel_movil = :tel_movil,
                  email_contacto = :email_contacto, email_servidor = :email_servidor, clave = :clave,
                  servidor_smtp = :servidor_smtp, port_smtp = :port_smtp,  fecha_creacion = :fecha_creacion WHERE idAgencia = :idAgencia');

            $consulta->bindParam(':idAgencia', $this->idAgencia);         
            $consulta->bindParam(':razon_social', $this->razon_social);
            $consulta->bindParam(':nombre_comercial', $this->nombre_comercial);
            $consulta->bindParam(':rfc', $this->rfc); 
            $consulta->bindParam(':calle', $this->calle);             
            $consulta->bindParam(':num_exterior', $this->num_exterior);   
            $consulta->bindParam(':num_interior', $this->num_interior); 
            $consulta->bindParam(':colonia', $this->colonia); 
            $consulta->bindParam(':municipio', $this->municipio); 
            $consulta->bindParam(':ciudad', $this->ciudad); 
            $consulta->bindParam(':estado', $this->estado); 
            $consulta->bindParam(':cp', $this->cp); 
            $consulta->bindParam(':pais', $this->pais); 
            $consulta->bindParam(':moneda', $this->moneda); 
            $consulta->bindParam(':tel1', $this->tel1); 
            $consulta->bindParam(':tel2', $this->tel2); 
            $consulta->bindParam(':tel3', $this->tel3); 
            $consulta->bindParam(':pagina_web', $this->pagina_web); 
            $consulta->bindParam(':activo', $this->activo); 
            $consulta->bindParam(':clave_back_office', $this->clave_back_office); 
            $consulta->bindParam(':header_footer', $this->header_footer); 
            $consulta->bindParam(':menu', $this->menu); 
            $consulta->bindParam(':logo', $this->logo); 
            $consulta->bindParam(':observaciones', $this->observaciones); 
            $consulta->bindParam(':nombre_contacto', $this->nombre_contacto); 
            $consulta->bindParam(':apellido_paterno', $this->apelldido_paterno); 
            $consulta->bindParam(':apellido_materno', $this->apelldido_materno); 
            $consulta->bindParam(':cargo', $this->cargo); 
            $consulta->bindParam(':sexo', $this->sexo); 
            $consulta->bindParam(':tel_directo', $this->tel_directo); 
            $consulta->bindParam(':tel_movil', $this->tel_movil); 
            $consulta->bindParam(':email_contacto', $this->email_contacto); 
            $consulta->bindParam(':email_servidor', $this->email_servidor); 
            $consulta->bindParam(':clave', $this->clave); 
            $consulta->bindParam(':servidor_smtp', $this->servidor_smtp); 
            $consulta->bindParam(':port_smtp', $this->port_smtp); 
            $consulta->bindParam(':fecha_creacion', $this->fecha_creacion);   
            $consulta->execute();

        }else{

            
            $consulta = $conexion->prepare(
                'INSERT INTO ' . self::TABLA . ' (razon_social, nombre_comercial, rfc, calle, num_exterior, num_interior,
                 colonia, municipio, ciudad, estado, cp, pais, moneda, tel1, tel2, tel3, pagina_web, activo, clave_back_office, header_footer, menu, logo, observaciones, nombre_contacto, apellido_paterno, apellido_materno, cargo, sexo, tel_directo, tel_movil, email_contacto, email_servidor, clave, servidor_smtp, port_smtp, fecha_creacion) 
                 VALUES (:razon_social, :nombre_comercial, :rfc, :calle, :num_exterior, :num_interior,
                 :colonia, :municipio, :ciudad, :estado, :cp, :pais, :moneda, :tel1, :tel2, :tel3, :pagina_web, :activo, :clave_back_office, :header_footer, :menu, :logo, :observaciones, :nombre_contacto, :apellido_paterno, :apellido_materno, :cargo, :sexo, :tel_directo, :tel_movil, :email_contacto, :email_servidor, :clave, :servidor_smtp, :port_smtp, :fecha_creacion)');      
            
            $consulta->bindParam(':razon_social', $this->razon_social);
            $consulta->bindParam(':nombre_comercial', $this->nombre_comercial);
            $consulta->bindParam(':rfc', $this->rfc); 
            $consulta->bindParam(':calle', $this->calle);             
            $consulta->bindParam(':num_exterior', $this->num_exterior);   
            $consulta->bindParam(':num_interior', $this->num_interior); 
            $consulta->bindParam(':colonia', $this->colonia); 
            $consulta->bindParam(':municipio', $this->municipio); 
            $consulta->bindParam(':ciudad', $this->ciudad); 
            $consulta->bindParam(':estado', $this->estado); 
            $consulta->bindParam(':cp', $this->cp); 
            $consulta->bindParam(':pais', $this->pais); 
            $consulta->bindParam(':moneda', $this->moneda); 
            $consulta->bindParam(':tel1', $this->tel1); 
            $consulta->bindParam(':tel2', $this->tel2); 
            $consulta->bindParam(':tel3', $this->tel3); 
            $consulta->bindParam(':pagina_web', $this->pagina_web); 
            $consulta->bindParam(':activo', $this->activo); 
            $consulta->bindParam(':clave_back_office', $this->clave_back_office); 
            $consulta->bindParam(':header_footer', $this->header_footer); 
            $consulta->bindParam(':menu', $this->menu); 
            $consulta->bindParam(':logo', $this->logo); 
            $consulta->bindParam(':observaciones', $this->observaciones); 
            $consulta->bindParam(':nombre_contacto', $this->nombre_contacto); 
            $consulta->bindParam(':apellido_paterno', $this->apelldido_paterno); 
            $consulta->bindParam(':apellido_materno', $this->apelldido_materno); 
            $consulta->bindParam(':cargo', $this->cargo); 
            $consulta->bindParam(':sexo', $this->sexo); 
            $consulta->bindParam(':tel_directo', $this->tel_directo); 
            $consulta->bindParam(':tel_movil', $this->tel_movil); 
            $consulta->bindParam(':email_contacto', $this->email_contacto); 
            $consulta->bindParam(':email_servidor', $this->email_servidor); 
            $consulta->bindParam(':clave', $this->clave); 
            $consulta->bindParam(':servidor_smtp', $this->servidor_smtp); 
            $consulta->bindParam(':port_smtp', $this->port_smtp); 
            $consulta->bindParam(':fecha_creacion', $this->fecha_creacion); 
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
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE idAgencia = :idAgencia');
        $consulta->bindParam(':idAgencia', $this->idAgencia);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorId($idAgencia) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE idAgencia = :idAgencia');
        $consulta->bindParam(':idAgencia', $idAgencia);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
           
            return new self($registro['razon_social'], $registro['nombre_comercial'], $registro['rfc'], 
             $registro['calle'], $registro['num_exterior'], $registro['num_interior'],  $registro['colonia'],  
             $registro['municipio'], $registro['ciudad'], $registro['estado'], $registro['cp'], $registro['pais'],
             $registro['moneda'], $registro['tel1'], $registro['tel2'], $registro['tel3'], $registro['pagina_web'],
             $registro['activo'],  $registro['clave_back_office'], $registro['header_footer'], $registro['menu'], $registro['logo'],
             $registro['observaciones'], $registro['nombre_contacto'], $registro['apellido_paterno'], $registro['apellido_materno'],
             $registro['cargo'], $registro['sexo'], $registro['tel_directo'], $registro['tel_movil'], $registro['email_contacto'], $registro['email_servidor'],
             $registro['clave'], $registro['servidor_smtp'],  $registro['port_smtp'], $registro['fecha_creacion'], $idAgencia);
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
