<?php
    include_once 'app/Conexion.inc.php';
    include_once 'app/RepositorioUsuario.inc.php';
    include_once 'app/ValidadorRegistro.inc.php';
    include_once 'app/Usuario.inc.php';
    
    if(isset($_POST['enviar'])){
        Conexion::abrir_conexion();
        $validador=new ValidadorRegistro($_POST['nombre'],$_POST['email'],$_POST['password1'],$_POST['password2'],Conexion::get_conexion());
        if($validador->registro_valido()){
            $usuario=new Usuario('',$validador->obtener_nombre(),$validador->obtener_password(),$validador->obtener_email(),'','');
            $usuario_insertado=RepositorioUsuario::insertar_usuario(Conexion::get_conexion(),$usuario);
            if($usuario_insertado){
                //REDIRIGIR A LOGIN
            }
            
        }
        Conexion::cerrar_conexion();
    }
    $titulo="REGISTRO";
    include_once 'plantillas/documento-declaracion.inc.php';
    include_once 'plantillas/navbar.inc.php';
    
    
    
?>
<div class='container'> <!--LA CLASE container PERMITE COLOCAR ELEMENTO BOOTSTRAP DENTRO-->
    <div class='jumbotron'>
        <h1 class='text-center'>FORMULARIO DE REGISTRO</h1>
    </div>
    
</div>
<div class='container'>
    <div class='row'>
        <div class='col-md-6 text-center'>
            <!--INSTRUCCIONES-->
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class="panel-title">
                        INSTRUCCIONES
                    </h3>
                </div>
                <div class='panel-body'>
                    <br>
                    <p class="text-justify">
                        PARA UNIRTE: 
                            INTRODUCE UN NOMBRE DE USUARIO
                            INTRODUCE UN EMAIL ELECTRONICO(VERIFICABLE) EJEMPLO Example@....com
                            INTRODUCE UNA CLAVE AL MENOS CON:
                                UNA MAYUSCULA
                                UN NUMERO
                                UNO DE LOS SIGUIENTES CARACTERES ". , - * + ' : "
                    </p>
                    <br>
                    <a href="#">¿YA TIENES CUENTA?</a>
                    <br>
                    <br>
                    <a href="#">¿OLVIDASTE TU CONTRASEÑA?</a>
                    <br>
                </div>
                
            </div>
            
        </div>
        
        <div class='col-md-6'>
            <div class='panel panel-default text-center'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>
                        REGISTRO
                    </h3>
                </div>
                <div class="panel-body">
                    <!--FORMULARIO-->
                    <form role='form' method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <?php
                            if(isset($_POST['enviar'])){
                                include_once 'plantillas/Registro_validado.inc.php';
                            }else{
                                
                                include_once 'plantillas/Registro_vacio.inc.php';
                            }
                        ?>
                    </form>
                </div>
            </div>
            
        </div>
        
    </div>
    
    
</div>
<?php
    include_once 'plantillas/documento-cierre.inc.php';

?>