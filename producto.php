<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
class Producto
{
    private $nombre;
    private $precio;
    private $categoria;
    private $marca;
    private $proovedor;
    private $cantidad;
    private $peso;

    public function __construct(){
        
    }

    public function getNombre()
    {
        return $this -> nombre;
    }
    public function getPrecio()
    {
        return $this -> precio;
    }
    public function getCategoria()
    {
        return $this -> categoria;
    }
    public function getMarca()
    {
        return $this -> marca;
    }
    public function getProovedor()
    {
        return $this -> proovedor;
    }
    public function getCantidad()
    {
        return $this -> cantidad;
    }
    public function getPeso()
    {
        return $this -> peso;
    }

    public function set_nombre($nombre){
        $this -> nombre = $nombre;
    }
    public function set_precio($precio){
        $this -> precio=$precio;
    }
    public function set_categoria($categoria){
        $this -> categoria=$categoria;
    }
    public function set_marca($marca){
        $this -> marca=$marca;
    }
    public function set_proovedor($proovedor){
        $this -> proovedor=$proovedor;
    }
    public function set_cantidad($cantidad){
        $this -> cantidad=$cantidad;
    }
    public function set_peso($peso){
        $this -> peso=$peso;
    }
}
$producto = new Producto();
$producto->set_nombre("computador");
$producto->set_precio(1500000);
$producto->set_categoria("Electronicos");
$producto->set_marca("SONY");
$producto->set_proovedor("Alkosto");
$producto->set_cantidad(5);
$producto->set_peso("1.5kg");
echo "<h1>Porducto 1</h1>";
echo $producto->getNombre()."<br>";
echo $producto->getPrecio()."<br>";
echo $producto->getCategoria()."<br>";
echo $producto->getMarca()."<br>";
echo $producto->getProovedor()."<br>";
echo $producto->getCantidad()."<br>";
echo $producto->getPeso()."<br><br>";

$producto1 = new Producto();
$producto1->set_nombre("gafa");
$producto1->set_precio(150000);
$producto1->set_categoria("Playa");
$producto1->set_marca("Raiban");
$producto1->set_proovedor("gucci");
$producto1->set_cantidad(4);
$producto1->set_peso("0.4kg");
echo "<h1>Porducto 2</h1>";
echo $producto1->getNombre()."<br>";
echo $producto1->getPrecio()."<br>";
echo $producto1->getCategoria()."<br>";
echo $producto1->getMarca()."<br>";
echo $producto1->getProovedor()."<br>";
echo $producto1->getCantidad()."<br>";
echo $producto1->getPeso()."<br><br>";

$producto2 = new Producto();
$producto2->set_nombre("Auto");
$producto2->set_precio(16000000);
$producto2->set_categoria("clasicos");
$producto2->set_marca("NISSAN");
$producto2->set_proovedor("auteco");
$producto2->set_cantidad(1);
$producto2->set_peso("1.5Ton");
echo "<h1>Porducto 3</h1>";
echo $producto2->getNombre()."<br>";
echo $producto2->getPrecio()."<br>";
echo $producto2->getCategoria()."<br>";
echo $producto2->getMarca()."<br>";
echo $producto2->getProovedor()."<br>";
echo $producto2->getCantidad()."<br>";
echo $producto2->getPeso()."<br><br>";

$producto3 = new Producto();
$producto3->set_nombre("Snickers");
$producto3->set_precio(800000);
$producto3->set_categoria("deportivas");
$producto3->set_marca("Jordan");
$producto3->set_proovedor("Nike");
$producto3->set_cantidad(8);
$producto3->set_peso(".5kg");
echo "<h1>Porducto 4</h1>";
echo $producto3->getNombre()."<br>";
echo $producto3->getPrecio()."<br>";
echo $producto3->getCategoria()."<br>";
echo $producto3->getMarca()."<br>";
echo $producto3->getProovedor()."<br>";
echo $producto3->getCantidad()."<br>";
echo $producto3->getPeso()."<br>";

?> 

</body>
</html>


