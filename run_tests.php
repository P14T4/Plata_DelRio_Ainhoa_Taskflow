<?php
// run_tests.php
// Script para ejecutar las pruebas unitarias

require __DIR__ . '/tests/AuthTest.php';

echo "═══════════════════════════════════════════════════════════\n";
echo "🚀 EJECUTANDO PRUEBAS UNITARIAS - AuthTest\n";
echo "═══════════════════════════════════════════════════════════\n";

$test = new AuthTest();
$pasadas = 0;
$fallidas = 0;

// Test 1
echo "\n🧪 Test 1: testLoginConCredencialesValidas\n";
try {
    $test->testLoginConCredencialesValidas();
    echo "✅ PASÓ\n";
    $pasadas++;
} catch (Exception $e) {
    echo "❌ FALLÓ: " . $e->getMessage() . "\n";
    $fallidas++;
}

// Test 2
echo "\n🧪 Test 2: testLoginConCredencialesInvalidas\n";
try {
    $test->testLoginConCredencialesInvalidas();
    echo "✅ PASÓ\n";
    $pasadas++;
} catch (Exception $e) {
    echo "❌ FALLÓ: " . $e->getMessage() . "\n";
    $fallidas++;
}

// Resultados
echo "\n═══════════════════════════════════════════════════════════\n";
echo "📊 RESULTADOS FINALES\n";
echo "═══════════════════════════════════════════════════════════\n";
echo "✅ Pruebas pasadas: $pasadas\n";
echo "❌ Pruebas fallidas: $fallidas\n";

if ($fallidas === 0) {
    echo "\n🎉 ¡TODAS LAS PRUEBAS PASARON!\n";
    exit(0);
} else {
    echo "\n⚠️  ALGUNAS PRUEBAS FALLARON\n";
    exit(1);
}
?>

