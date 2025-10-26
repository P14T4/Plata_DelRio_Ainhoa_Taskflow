//Problema 1.1
<?php
$nombre = "Ainhoa";
$apellidos = "Plata López";
$edad = 21;
$altura = 1.65; // metros
$esEstudiante = true;

echo "Nombre: $nombre<br>";
echo "Apellidos: $apellidos<br>";
echo "Edad: $edad<br>";
echo "Altura: $altura m<br>";
echo "¿Es estudiante?: " . ($esEstudiante ? "Sí" : "No") . "<br><br>";
?>
//Problema 1.2
<?php
$productoNombre = "Auriculares";
$productoPrecio = 59.99;
$productoStock = 120;
$productoOferta = true;

echo "Producto: $productoNombre<br>";
echo "Precio: $productoPrecio €<br>";
echo "Stock: $productoStock unidades<br>";
echo "¿En oferta?: " . ($productoOferta ? "Sí" : "No") . "<br><br>";
?>
//Problema 1.3
<?php
define("NOMBRE_SITIO", "Mi Tienda Online");
define("VERSION_APP", 1.0);

echo "Sitio: " . NOMBRE_SITIO . "<br>";
echo "Versión: " . VERSION_APP . "<br><br>";
?>
//Problema 2.1
<?php
$num1 = 10;
$num2 = 5;

echo "Suma: " . ($num1 + $num2) . "<br>";
echo "Resta: " . ($num1 - $num2) . "<br>";
echo "Multiplicación: " . ($num1 * $num2) . "<br>";
echo "División: " . ($num1 / $num2) . "<br><br>";
?>
//Problema 2.2
<?php
$stock = 100;
$stock -= 25; // venta
echo "Stock tras venta: $stock<br>";
$stock += 50; // nuevo pedido
echo "Stock tras nuevo pedido: $stock<br><br>";
?>
//Problema 2.3
<?php
$nombre = "Oskar";
$apellido = "Calvo";
$curso = "Desarrollo Web en Entorno Servidor";

$fraseCompleta = "El profesor $nombre $apellido imparte el curso de $curso.";
echo $fraseCompleta . "<br><br>";
?>
//Problema 2.4
<?php
$edad = 20;
$edadMinima = 18;
var_dump($edad >= $edadMinima);

$contraseñaGuardada = "1234";
$contraseñaUsuario = "123";
var_dump($contraseñaGuardada === $contraseñaUsuario);
echo "<br><br>";
?>

//Problema 2.5
<?php
$numero = 7;
if ($numero % 2 == 0) {
    echo "El número $numero es par<br><br>";
} else {
    echo "El número $numero es impar<br><br>";
}
?>
//Problema 3.1
<?php
$edad = 17;
if ($edad >= 18) {
    echo "Puedes pasar<br><br>";
} else {
    echo "No puedes pasar<br><br>";
}
?>
//Problema 3.2
<?php
$nota = 7.5;
if ($nota >= 9) {
    echo "Sobresaliente<br><br>";
} elseif ($nota >= 7) {
    echo "Notable<br><br>";
} elseif ($nota >= 5) {
    echo "Aprobado<br><br>";
} else {
    echo "Suspenso<br><br>";
}
?>
//Problema 3.3
<?php
$diaSemana = "lunes";
switch ($diaSemana) {
    case "lunes":
        echo "Lentejas<br><br>";
        break;
    case "miércoles":
        echo "Paella<br><br>";
        break;
    case "viernes":
        echo "Pescado al horno<br><br>";
        break;
    default:
        echo "Hoy no hay menú especial<br><br>";
        break;
}
?>
//Problema 3.4
<?php
$rolUsuario = "admin";
$usuarioActivo = true;

if ($rolUsuario === "admin" && $usuarioActivo) {
    echo "Acceso concedido<br><br>";
} else {
    echo "Acceso denegado<br><br>";
}
?>
//Problema 4.1
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . (7 * $i) . "<br>";
}
echo "<br>";
?>
//Problema 4.2
<?php
$contador = 10;
while ($contador > 0) {
    echo "$contador<br>";
    $contador--;
}
echo "¡Feliz Año Nuevo!<br><br>";
?>
//Problema 4.3
<?php
$alumnos = ["Ana", "Juan", "Pedro", "Sofía"];
foreach ($alumnos as $alumno) {
    echo "Hola, $alumno<br>";
}
echo "<br>";
?>
//Problema 4.4
<?php
$productos = [
    ["nombre" => "Teclado", "precio" => 50],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Monitor", "precio" => 200]
];

foreach ($productos as $producto) {
    echo "Producto: {$producto['nombre']}, Precio: {$producto['precio']} €<br>";
}
echo "<br>";
?>
//Problema 5.1
<?php
$usuario = [
    "nombre" => "Ainhoa",
    "edad" => 21,
    "email" => "ainhoa@example.com",
    "esEstudiante" => true
];

echo "Nombre: " . $usuario["nombre"] . "<br>";
echo "Edad: " . $usuario["edad"] . "<br>";
echo "Email: " . $usuario["email"] . "<br>";
echo "¿Estudiante?: " . ($usuario["esEstudiante"] ? "Sí" : "No") . "<br><br>";
?>
//Problema 5.2
<?php
$notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];
foreach ($notas as $nota) {
    if ($nota >= 5) {
        echo "Nota aprobada: $nota<br>";
    }
}
echo "<br>";
?>
//Problema 5.3
<?php
$listaCompra = [
    "Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
    "Lácteos" => ["Leche", "Queso"],
    "Limpieza" => ["Detergente", "Lejía"]
];

foreach ($listaCompra as $categoria => $productos) {
    echo "<strong>$categoria:</strong><br>";
    foreach ($productos as $producto) {
        echo "- $producto<br>";
    }
}
echo "<br>";
?>
//Problema 5.4
<?php
$total = 0;
foreach ($productos as $producto) {
    $total += $producto['precio'];
}
echo "Total del carrito: $total €<br>";
?>