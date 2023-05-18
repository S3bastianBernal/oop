<?php
class Camper
{
    // 1. Declaracion de propiedades con modificadores de acceso
    private $nombre;
    private $email;
    private $celular;
    // 2. Metodo Constructor (metodo magico)
    // Alternativamente puedo inicializar con valores parametrizados al constructor
    public function __construct($nombre,$email,$celular)
    {
        $this -> nombre = $nombre;
        $this -> email = $email;
        $this -> celular = $celular;
    }
    // 3. metodos (getters and Setters)
        //get -> se obtinen valores de propiedades
        
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getCel()
    {
        return $this->celular;
    }
    //metodos con parametros
    public function getSaludo($saludo)
    {
        return $saludo . "campus";
    }
        //set -> se modifican . setean valores de atributos - propiedades
    public function set_nombre($nombre){
       $this->nombre = $nombre;
    }
    public function set_email($email)
    {
        $this->email = $email;
    }
    public function set_celular($celular)
    {
        $this->celular = $celular;
    }
}   

// Intanciar clases --> variables de instancia
$camper = new Camper("Sebastian","sebas201154@gmail.com",3227309144);
$camper->set_nombre("luisa");
$camper->set_email("lufeGarcia2004@gmail.com");
$camper->set_celular(3157948521);
echo $camper->getNombre()."<br>";
echo $camper->getEmail()."<br>";
echo $camper->getCel()."<br>";
echo $camper->getSaludo("hello ");
?>