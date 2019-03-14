<?php
//CLASE 
class Usuario{
    private $id;
    private $nombre;
    private $password;
    private $email;
    private $fecha_registro;
    private $activo;
    
    public function __construct($id,$nombre,$password,$email,$fecha_registro,$activo){
        $this->id = $id;//$this-> permite identificar las variables propias de la clase
        $this->nombre = $nombre;
        $this->password = $password;
        $this->email = $email;
        $this->fecha_registro = $fecha_registro;
        $this->activo = $activo;
        
    }
    //GETTER
    public function get_id(){
        return $this->id;
    } 
    public function get_nombre(){
        return $this->nombre;
    } 
    public function get_password(){
        return $this->password;
    } 
    public function get_email(){
        return $this->email;
    } 
    public function get_fecha_registro(){
        return $this->fecha_registro;
    }
    public function get_activo(){
        return $this->activo;
    }
    //SETTER
    public function set_id($id){
         $this->id=$id;
    } 
    public function set_nombre($nombre){
        $this->nombre=$nombre;
    } 
    public function set_password($password){
        $this->password=$password;
    } 
    public function set_email($email){
        $this->email=$email;
    } 
    public function set_activo($activo){
        $this->activo=$activo;
    }
    
}