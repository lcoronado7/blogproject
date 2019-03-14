<?php
    include_once 'RepositorioUsuario.inc.php';
class ValidadorRegistro{
    
    private $aviso_inicio;
    private $aviso_cierre;
    
    private $nombre;
    private $email;
    private $password;
    
    private $error_nombre;
    private $error_email;
    private $error_password1;
    private $error_password2;
    
    
    
    public function __construct($nombre,$email,$password1,$password2,$conexion){
        $this->nombre="";
        $this->email="";
        $this->password="";
        $this->aviso_inicio="<br><div class='alert alert-danger text-justify' role='alert'>";
        $this->aviso_cierre="</div>";
        $this->error_nombre=$this->validar_nombre($conexion,$nombre);
        $this->error_email= $this->validar_email($conexion,$email);
        $this->error_password1= $this->validar_password1($password1);
        $this->error_password2=$this->validar_password2($password1,$password2);
        
        if($this->error_password1==="" && $this->error_password2==="" ){
            $this->password=$password1;
        }
    }
    
    private function variable_iniciada($variable){
        
        if(isset($variable) && !empty($variable)){
            return true;
        }else{
            return false;
        }
        
    }
    
    private function validar_nombre($conexion,$nombre){
        
        if(!$this->variable_iniciada($nombre)){
            return "DEBE ESCRIBIR UN NOMBRE DE USUARIO";
        }else{
            $this->nombre=$nombre;
        }
        
        if(strlen($nombre)<6){
            return "NOMBRE DEBE  CONTENER MAS DE 6 CARACTERES";
        }
        if(strlen($nombre)>24){
            return "NOMBRE DEBE CONTENER MENOS DE 24 CARACTERES";
        }
        if(RepositorioUsuario::nombre_existe($conexion,$nombre)){
            return "ESTE NOMBRE YA REGISTRADO, INTRODUZCA OTRO";
        }
        
        return "";
    }
    
    private function validar_email($conexion,$email){
        if(!$this->variable_iniciada($email)){
            return "DEBE ESCRIBIR UN EMAIL";
        }else{
            $this->email=$email;
        }
        if(RepositorioUsuario::email_existe($conexion,$email)){
            return "EMAIL YA REGISTRADO, INTRODUZCA OTRO O <br><a href='#'>Intente recuperar su contraseña</a>";
        }
        
        return "";
    }
    
    private function validar_password1($password1){
        if (!$this->variable_iniciada($password1)){
            return "DEBE ESCRIBIR SU PASSWORD";
        }
        return "";
    }
    
    private function validar_password2($password1,$password2){
        if(!$this->variable_iniciada($password1)){
            return "SE DEBE ESCRIBIR PRIMERO EL PASSWORD PARA LUEGO CONFIRMARLO";
        }
        
        if(!$this->variable_iniciada($password2)){
            return "DEBE REPETIR SU PASSWORD";
        }
        if($password1!==$password2){
            return "CONTRASEÑAS NO COINCIDEN";
        }
        
        return "";
    }
    
    public function obtener_nombre(){
        return $this->nombre;
    }
    public function obtener_email(){
        return $this->email;
    }
    public function obtener_password(){
        return $this->password;
    }

    public function obtener_error_nombre(){
        return $this->error_nombre;
    }
    public function obtener_error_email(){
        return $this->error_email;
    }
    public function obtener_error_password1(){
        return $this->error_password1;
    }
    public function obtener_error_password2(){
        return $this->error_password2;
    }
    
    public function mostrar_nombre(){
        if($this->nombre!==""){
            echo 'value="'.$this->nombre.'"';
        }
    }
    
    public function mostrar_error_nombre(){
        if($this->error_nombre!==""){
            echo $this->aviso_inicio.$this->error_nombre.$this->aviso_cierre;
        }
    }
    public function mostrar_email(){
        if($this->email!==""){
            echo 'value="'.$this->email.'"';
        }
    }
    public function mostrar_error_email(){
        if($this->error_email!==""){
            echo $this->aviso_inicio.$this->error_email.$this->aviso_cierre;
        }
    }
    public function mostrar_error_password1(){
        if($this->error_password1!==""){
            echo $this->aviso_inicio.$this->error_password1.$this->aviso_cierre;
        }
    }
    public function mostrar_error_password2(){
        if($this->error_password2!==""){
            echo $this->aviso_inicio.$this->error_password2.$this->aviso_cierre;
        }
    }
    public function registro_valido(){
        if($this->error_nombre==="" && $this->error_email==="" && $this->error_password1==="" && $this->error_password2===""){
            return true;
        }
        return false;
    }
}
