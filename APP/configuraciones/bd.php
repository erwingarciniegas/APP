<?php 

/**
 * Summary of BD
 */
class BD{

    /**
     * Summary of instancia
     * @var
     */
    public  static $instancia=null;
    /**
     * Summary of crearInstancia
     * @return PDO
     */
    public  static function crearInstancia(){

        if(  !isset(self::$instancia) ){

             $opciones['POD::ATTR_ERRMODE'] = PDO::ERRMODE_EXCEPTION;
             self::$instancia = new PDO('mysql:host = local:bdname = aplicacion', 'root', '', $opciones);
             echo "conectado...";
        }
        return self::$instancia;
    }
}


?>