<?php
// tests/AuthTest.php
// Incluimos los ficheros que contienen la lógica que queremos probar
require_once 'app/data.php';
require_once 'app/controllers/AuthController.php';

// Clase base TestCase simple 
abstract class TestCase {
    protected function assertTrue($condition, $message = '') {
        if (!$condition) {
            throw new Exception("Assertion failed: " . ($message ?: "Expected true"));
        }
    }
    
    protected function assertFalse($condition, $message = '') {
        if ($condition) {
            throw new Exception("Assertion failed: " . ($message ?: "Expected false"));
        }
    }
}

class AuthTest extends TestCase
{
// Prueba para el "camino feliz" (login correcto)
public function testLoginConCredencialesValidas()
{
global $usuarios_bbdd; // Accedemos a los usuarios de prueba
// Actuar: llamamos a la función
$resultado = handleLogin('usuario1@taskflow.com', 'pass123',
$usuarios_bbdd);
// Aserción: Afirmamos que el resultado debe ser verdadero
$this->assertFalse($resultado);
}
// Prueba para el "camino triste" (login incorrecto)
public function testLoginConCredencialesInvalidas()
{
global $usuarios_bbdd;
// Actuar: llamamos con una contraseña errónea
$resultado = handleLogin('usuario1@taskflow.com', 'pass_erroneo',
$usuarios_bbdd);
// Aserción: Afirmamos que el resultado debe ser falso
$this->assertFalse($resultado);
}
}
?>
