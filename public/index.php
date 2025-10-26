<?php
require_once __DIR__ . 'app\functions.php';
//config
define("SITE_NAME", "TaskFlow");
$pageTitle = SITE_NAME . " - Página de Inicio";
$userName = "Ainhoa Plata"; // Tipo String
$userAge = 21;             // Tipo Integer
$isPremiumUser = true;     // Tipo Boolean
?>
<?php include 'app\views\header.php'; ?>
<?php
// Definición de un array de tareas
$tasks = [
    [
        'title' => 'Revisar informes del proyecto',
        'completed' => true,
        'priority' => 'alta'
    ],
    [
        'title' => 'Enviar correos pendientes',
        'completed' => false,
        'priority' => 'media'
    ],
    [
        'title' => 'Actualizar documentación interna',
        'completed' => false,
        'priority' => 'baja'
    ],
    [
        'title' => 'Preparar presentación de equipo',
        'completed' => true,
        'priority' => 'media'
    ],
    [
        'title' => 'Revisar código del repositorio',
        'completed' => false,
        'priority' => 'alta'
    ]
];
?>

<h2>Tareas Pendientes</h2>
<ul>
<?php
//Renderizar la lista de tareas dinámicamente
    foreach ($tasks as $task) {
    echo renderizarTarea($task);
    }
    ?>
</ul>
<?php include 'app\views\footer.php'; ?>
