<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge"> <!--SI SE DESEA QUE SE COMPATIBLE CON EXPLORER-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <?php
            if(!isset($titulo) || empty($titulo)){//isset EVALUA SI LA VARIABLE ESTA INICIADA Y empty EVALUA SI ESTA VACIA LA VARIABLE
                $titulo="BLOG APOTIOSICO";
            }else{
                echo "<title>".$titulo."</title>";
            }
                
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
        
    </head>
    
    <body>