<?php
// app/views/tareas.view.php
// Vista autónoma del dashboard (copia header, contenido y footer)
define("SITE_NAME", "TaskFlow");
$pageTitle = SITE_NAME . " - Dashboard";
?>
<?php include __DIR__ . '/header.php'; ?>

<h2>Mis Tareas</h2>
<ul>
<?php
    // Renderizar la lista de tareas dinámicamente usando la función
    foreach ($tareas as $tarea) {
        echo renderizarTarea($tarea);
    }
?>
</ul>

<?php include __DIR__ . '/footer.php'; ?>
