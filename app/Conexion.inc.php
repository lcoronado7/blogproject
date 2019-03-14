<?php
class Conexion{
    private static $conexion;//PARA USAR AQUI SE UTILIZA self::$conexion y externo Conexion::$conexion
    
    public static function abrir_conexion(){
        if(!isset(self::$conexion))//SI NO ESTA INICIADA LA SESION, ES DECIR, SI NO ESTA CONTECTADO
        {
            try{
                include_once 'config.inc.php'; //INCLUYENDO TODO LO QUE SE ENCUENTRA EN config.inc.php
                
                self::$conexion=new PDO('mysql:host='.NOMBRE_SERVIDOR.';dbname='.NOMBRE_BD.'',NOMBRE_USUARIO,PASSWORD);
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //PARA OBTENER LOS ERRORES DE LA BASE DE DATOS
                self::$conexion->exec("SET CHARACTER SET utf8");
            }catch(PDOException $e){
                print "ERROR".$e->getMessage()."<br>";
                die();
            }

       } 
   
    }
    
    public static function cerrar_conexion(){
        if(isset(self::$conexion))//SI LA CONEXION ESTA INICIADA
        {
            self::$conexion=null;
        }

    }
    
    public static function get_conexion(){
        return self::$conexion;
    }
}

