<nav class="navbar navbar-default navbar-static-top"><!--BARRA DE NAVEGACION-->
    <div class="container"><!--DIVISOR (SE PUEDEN CREAR BOTONES,PARRAFOS TODO DEPENDE DE SU CLASE)-->
        <div class="navbar-header"><!--CABEZA DE LA DIVISION DE LA BARRA DE NAVEGACION-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><!--BOTON PARA AL MINIMIZAR LA PANTALLA SE OBTEGA LA BARRA MINIMIZADA DE ACUERDO A LA PANTALLA USADA-->
                <span class="sr-only"><!--LINEA DE TEXTO-->ESTE BOTON DESPLIEGA LA BARRA DE NAVEGACION</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">MI BLOG APOTIOSICO</a>

        </div>
        <div class="navbar-collapse collapse" id="navbar"><!--CON ESTOS ATRIBUTOS SI LA PANTALLA CAPAZ DE ENSEÑAR LA DIVISION LO LLEVA AL BOTON DE BARRA DE NAVEGACION-->

            <ul class="nav navbar-nav"><!--LISTA PARA HACER LA BARRA-->
                <li><!--ELEMENTOS DE LA LISTA ul--> <a href="#"><span class="glyphicon glyphicon-list"></span> <!--ENLACE A OTRA PAG(html)--> ENTRADAS</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"> FAVORITOS</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-education "></span> AUTORES</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-road"></span> VISITANTES</a></li>
            </ul> 
            <ul class="nav navbar-nav navbar-right"> <!--PARA QUE ESTA NUEVA FILA SE UBIQUE EN LA DERECHA SE UTILIZA LA CLASE navbar-right-->

                <li><a href="#"><span class="glyphicon glyphicon-log-in" aria-hidden="true"> </span> INICIAR SESION</a></li>
                <li><a href="registro.php"><span class="glyphicon glyphicon-plus-sign"> REGISTRO</a></li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-user" aria_hidden="true"</span>
                        <?php
                        //CONEXION PARA CONTAR LA CANTIDAD DE USUARIOS
                        include_once 'app/Conexion.inc.php';
                        include_once 'app/RepositorioUsuario.inc.php';
                        Conexion::abrir_conexion();
                        $cantidad = RepositorioUsuario::cantidad_usuarios(Conexion::get_conexion());
                        echo $cantidad;
                        Conexion::cerrar_conexion();
                        ?>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
