<?php
require_once '../../class/Articulo.php';
$articulo = new Articulo();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : null;

$url_imagen1 = (isset($_REQUEST['url_imagen1'])) ? $_REQUEST['url_imagen1'] : null;
$url_imagen2 = (isset($_REQUEST['url_imagen2'])) ? $_REQUEST['url_imagen2'] : null;
$url_imagen3 = (isset($_REQUEST['url_imagen3'])) ? $_REQUEST['url_imagen3'] : null;
$url_archivo1 = (isset($_REQUEST['url_archivo1'])) ? $_REQUEST['url_archivo1'] : null;

$contenido = (isset($_POST['contenido'])) ? $_POST['contenido'] : null;
$enlace_web = (isset($_POST['enlace_web'])) ? $_POST['enlace_web'] : null;
$enlace_video = (isset($_POST['enlace_video'])) ? $_POST['enlace_video'] : null;
$enlace_facebook = (isset($_POST['enlace_facebook'])) ? $_POST['enlace_facebook'] : null;
$fecha_programada = (isset($_POST['fecha_programada'])) ? $_POST['fecha_programada'] : null;
$hora_programada = (isset($_POST['hora_programada'])) ? $_POST['hora_programada'] : null;
$idArea = (isset($_POST['idArea'])) ? $_POST['idArea'] : null;
$fecha_publicacion = date('Y-m-d');
$destacado = (isset($_REQUEST['destacado'])) ? $_REQUEST['destacado'] : null;
$idCategoria = (isset($_POST['idCategoria'])) ? $_POST['idCategoria'] : null;

echo 'Título '. $titulo.'<br>';
echo 'Contenido '. $contenido.'<br>';
echo 'Web '. $enlace_web.'<br>';
echo 'Facebook '. $enlace_facebook.'<br>';
echo 'Fecha programada '. $fecha_programada.'<br>';
echo 'Hora programada '. $hora_programada.'<br>';
echo 'Video '. $enlace_video.'<br>';
echo 'idArea '. $idArea.'<br>';
echo 'Fecha publicación '. $fecha_publicacion.'<br>';
echo 'Destacado'. $destacado.'<br>';
echo 'idCategoria '. $idCategoria.'<br>';

echo "-----------------";
echo "<br>";
$articulo->setTitulo($titulo);
$articulo->setContenido($contenido);
$articulo->setEnlaceWeb($enlace_web);
$articulo->setEnlaceVideo($enlace_video);
$articulo->setEnlaceFacebook($enlace_facebook);
$articulo->setFechaProgramada($fecha_programada);
$articulo->setHoraProgramada($hora_programada);
$articulo->setidArea($idArea);
$articulo->setFechaPublicacion($fecha_publicacion);
$articulo->setDestacado($destacado);
$articulo->setIdCategoria($idCategoria);

echo $articulo->getTitulo() ."<br>";
echo $articulo->getContenido()."<br>";
echo $articulo->getEnlaceWeb()."<br>";
echo $articulo->getEnlaceVideo()."<br>";
echo $articulo->getEnlaceFacebook()."<br>";
echo $articulo->getFechaProgramada()."<br>";
echo $articulo->getHoraProgramada()."<br>";
echo $articulo->getidArea()."<br>";
echo $articulo->getFechaPublicacion()."<br>";
echo $articulo->getDestacado()."<br>";
echo $articulo->getIdCategoria()."<br>";




}