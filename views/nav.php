<?php
$sesionIniciada = isset($_SESSION['usuario']); // Cambia 'usuario' por la clave que estés usando para almacenar al usuario
?>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Parte izquierda - Inicio -->
        <a class="navbar-brand" href="inicio">Inicio</a>

        <!-- Parte central - Inventarios -->
        <div class="mx-auto">
            <a class="navbar-brand" href="inventario">Inventarios</a>
        </div>

        <!-- Parte derecha - Botones de Cerrar sesión y Editar usuario -->
        <?php if ($sesionIniciada): ?>
            <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editar-usuario">Editar usuario</button>
            <button type="button" class="btn btn-danger" id="btn_cerrar">Cerrar sesión</button>
        <?php endif; ?>
    </div>
</nav>
