<?php
class conexion{
  public $enlace;

  function __construct(){
    $this->enlace=mysql_connect(DB_HOST,DB_USER,DB_PASS);
    mysql_select_db(DB_NAME, $this->enlace);
     }

     function __destruct(){
   mysql_close($this->enlace);
   }
}

 ?>
