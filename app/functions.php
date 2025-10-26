<?php
// Función que devuelve la clase CSS según la prioridad
function obtenerClasePrioridad($prioridad) {
    switch ($prioridad) {
        case 'alta':
            return 'priority-alta';
        case 'media':
            return 'priority-media';
        case 'baja':
            return 'priority-baja';
        default:
            return '';
    }
}
// Función que genera el HTML de una tarea
function renderizarTarea($tarea) {
    // Clase base
    $taskClasses = 'task-item';

    // Si está completada, añadir clase
    if ($tarea['completed']) {
        $taskClasses .= ' completed';
    }

    // Añadir la clase de prioridad usando la función anterior
    $taskClasses .= ' ' . obtenerClasePrioridad($tarea['priority']);

    // Construir el <li> completo
    $html = "<li class='$taskClasses'>{$tarea['title']}</li>";

    // Devolver el HTML
    return $html;
}
?>