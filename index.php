<?php
    $titulo="MI BLOG APOTIOSICO";
    include_once 'plantillas/documento-declaracion.inc.php';
    include_once 'plantillas/navbar.inc.php';
    
?>
        
        <!--CONTEDORES-->
        <!--FILAS-->
        <!-- <div class="container">
            <div class="row"> FILAA
                <div class="col-md-6">COLUMNA
                    <h1>ESTO ES UNA COLUMNA MEDIA 4</h1>
                </div>
            </div>
            
        </div>-->
        <div class="container">
            <div class="jumbotron"><!--PARA HACER TITULOS O NOMBRE DE LA PAGINA-->
                <h1>EL BLOG APOTIOSICO<span class="glyphicon glyphicon-flash" aria-hidden="true"></span></h1>
                <p>Blog supermega apotiosico</p>
            </div>
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default"><!--PANEL-->
                                <!--UN PANEL SE DIVIDE EN DOS PARTES-->
                                <div class="panel-heading"><!--PARTE 1 PANEL TITULAR-->
                                   
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Busqueda
                                    
                                </div>
                                <div class="panel-body"><!--PARTE 2 PANEL CUERPO-->
                                    <div class="form-group"><!--FORMULARIO-->
                                        <!--BARRA DE TEXTO-->
                                        <input type="text" class="form-control" placeholder="¿Que Desea Buscar?">
                                       
                                    </div>
                                    <button class="form-control">Buscar</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> FILTRO
                                </div>
                                <div class="panel-body">
                                    NO HAY FILTROS
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> ARTICULOS POR MESES
                                </div>
                                <div class="panel-body">
                                    NO HAY ARTICULOS
                                </div>
                            </div>
                            
                            
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span> ULTIMAS NOTICIAS
                        </div>
                        <div class="panel-body">
                            
                            <p>SIN ENTRADAS ACTUALES</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
       include_once 'plantillas/documento-cierre.inc.php';
    ?>