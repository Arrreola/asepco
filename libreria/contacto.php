<?php
class Contacto{
  public $nombre;
  public $correo;
  public $asunto;
  public $mensaje;

  function guardar () {
    $sql="insert into contacto (nombre, correo, asunto, mensaje)
    value'($this->nombre)','($this->correo)','($this->asunto)','($this->mensaje)' ";
    mysql_query($sql);
  }

  static function mostrar(){
    $sql = "SELECT * FROM contacto";
    $rs=mysql_query($sql);
    $est=array();
    while($fila = mysql_fetch_assoc($rs)){
      $est[]=$fila;
    } return $est;
  }

}


 ?>
