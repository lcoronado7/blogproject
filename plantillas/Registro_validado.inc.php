<div class='form-group text-justify'> <!--form-group PERMITE QUE EL ESPACIO ENTRE ETIQUETAS SEA BUENA EN LOS DIFERENTES DISPOSITIVOS -->
    <label>NOMBRE USUARIO</label>
  
    <input type="text" class='form-control'name="nombre" placeholder="namelastaname" <?php $validador ->mostrar_nombre()?>><!--form-control ES PARA QUE SE ORGANICE DE MANERA CORRECTA EN LA PANTALLA-->
    <?php
        $validador->mostrar_error_nombre();
    
    ?>
    
</div>
<div class='form-group text-justify'>
    <label>EMAIL</label>
    <input type='email' class='form-control' name="email" placeholder="example@mail.com" <?php $validador->mostrar_email()?>>
    <?php
        $validador->mostrar_error_email();
    ?>
</div>
<div class='form-group text-justify'>
    <label>CONTRASEÑA</label>
    <input type='password' class="form-control" name="password1">
    <?php
        $validador->mostrar_error_password1();
    ?>
</div>
<div class='form-group text-justify'>
    <label>REPETIR CONTRASEÑA</label>
    <input type='password' class='form-control' name="password2">
    <?php
        $validador->mostrar_error_password2();
    ?>

</div>
<br>
<button type="reset" class="btn btn-primary">LIMPIAR CAMPOS</button>
<br>
<br>
<button type="submit" class="btn btn-primary" name="enviar">REGISTRAR</button>
<br>
