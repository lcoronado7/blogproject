<?php
    include_once 'app/Usuario.inc.php';
class RepositorioUsuario{
    
    public static function obtenerTodosUsuarios($Conexion){
        $usuario = array();
        if(isset($Conexion)){
            try {
                include_once 'Usuario.inc.php';
                $sql="SELECT * FROM usuarios ";
                $sentencia= $Conexion->prepare($sql); //PARA QUE SE PREPARA LA BS PARA HACER LA CONSULTA SABIENDO QUE LA CONSULTA ES SEGURA
                $sentencia->execute();
                $resultado=$sentencia->fetchAll();
                
                if(count($resultado)){//PARA VERIFICAR SI HAY AL MENOS UN USUARIO REGISTRADO EN CASO CONTRARIO NO
                    
                    foreach ($resultado as $fila){ //$fila IDENTIFICA COMO SE DENOTARA CADA ITERACION
                        
                        $usuario[]=new Usuario(//DEJANDO LOS [] VACIOS SE IDENTIFICA QUE SE DEBE AGREGAR EN EL UTIMO LUGAR DEL ARRAY
                                $fila['id'], $fila['nombre'],$fila['password'],$fila['email'], $fila['fecha_Registro'],$fila['activo']
                        ); 
                        
                        
                    }
                    
                }else{
                        print "NINGUN RESULTADO ENCONTRADO. NO HAY USUARIO REGISTRADOS";
                 }
                
            } catch (PDOException $ex) {
                print "ERROR"+$ex->getMessage();
            }
        }
        
        return $usuario;
    }
    public static function cantidad_usuarios($conexion){
        $total_usuario=null;
        if(isset($conexion)){
            try{
               $sql='SELECT COUNT(*) as total_usuario FROM usuarios';
               $sentencia=$conexion->prepare($sql);
               $sentencia->execute();
               $resultado=$sentencia->fetch();
               $total_usuario=$resultado['total_usuario'];
               
            } catch (PDOException $ex) {
                print "ERROR".$ex->getMessage();
            }
        }
        return $total_usuario;
    }
    
    public static function insertar_usuario($conexion,$usuario){
        $usuario_insertado=false;
        if(isset($conexion)){
            try{
               $sql="INSERT INTO usuarios(nombre,email,password,fecha_Registro,activo) VALUES(:nombre,:email,:password,NOW(),0)";
               $sentencia=$conexion->prepare($sql);
               //PARA INSERTAR PARAMETROS
               //bindParam(alias dado en VALUES,variable a asignar,tipo de dato la variable);
               $nombre=$usuario->get_nombre();
               $email=$usuario->get_email();
               $password=$usuario->get_password();
               $sentencia->bindParam(":nombre",$nombre,PDO::PARAM_STR);
               $sentencia->bindParam(":email",$email,PDO::PARAM_STR);
               $sentencia->bindParam(":password",$password,PDO::PARAM_STR);
               
               $usuario_insertado=$sentencia->execute();
            } catch (PDOException $ex) {
                print "ERROR".$ex->getMessage()."<br>";
            }
        }
        return $usuario_insertado;
    }
    public static function nombre_existe($conexion,$nombre){
        $nombre_existe=true;
        if(isset($conexion)){
            try {
                $sql="SELECT nombre FROM usuarios WHERE nombre= :nombre";
                $sentencia= $conexion->prepare($sql);
                $sentencia->bindParam(':nombre',$nombre,PDO::PARAM_STR);
                $sentencia->execute();
                $resultado= $sentencia->fetchAll();
                
                if(count($resultado)){
                    $nombre_existe=true;
                }else{
                    $nombre_existe=false;
                }
                
            } catch (PDOException $exc) {
                echo "ERROR DE CONEXION".$exc->getMessage();
            }
        }
        
        return $nombre_existe;
        
    }
    
    public static function email_existe($conexion,$email){
        $email_existe=true;
        if(isset($conexion)){
            try{
                $sql="SELECT email FROM usuarios WHERE email= :email";
                $sentencia=$conexion->prepare($sql);
                $sentencia->bindParam(':email',$email,PDO::PARAM_STR);
                $sentencia->execute();
                $resultado=$sentencia->fetchAll();
                
                if(count($resultado)){
                    $email_existe=true;
                }else{
                    $email_existe=false;
                }
                
            } catch (PDOException $ex){
                echo "ERROR DE CONEXION".$ex->getMessage();
            }
        }
        return $email_existe;
    }
            
            
            
            
}
/*
<?php
 COMO CONECTAR A LA BASE DE DATOS Y RECUPERAR LOS DATOS DE UNA CLASE EN ESTE CASO USUARIO Y SE CUENTA LA CANTIDAD DE USUARIO
   include_once 'app/Conexion.inc.php';
   include_once 'app/RepositorioUsuario.inc.php';
   Conexion::abrir_conexion();
   $usuario=RepositorioUsuario::obtenerTodosUsuarios(Conexion::get_conexion());
   echo "<br>".count($usuario);
   Conexion::cerrar_conexion();
   ?>
  
  */


