<?php
// Calcula la URL base del proyecto (ej. /Examen_CAFZ/) para que los enlaces
// funcionen sin importar desde qué carpeta se incluya el encabezado
$raizProyecto = str_replace('\\', '/', dirname(__DIR__));
$raizServidor = str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT']));
$base = substr($raizProyecto, strlen($raizServidor)) . '/';
?>
<!-- Hoja de estilos del sitio -->
<link rel="stylesheet" href="<?php echo $base; ?>css/estilos.css">

<!-- Encabezado principal del sitio -->
<header class="encabezado">
    <!-- Título del sitio, lleva al inicio -->
    <h1 class="encabezado-titulo"><a href="<?php echo $base; ?>index.php">Examen CAFZ</a></h1>

    <!-- Menú de navegación con los botones de cada módulo -->
    <nav class="encabezado-menu">
        <!-- Botón que lleva al Módulo 1 -->
        <a href="<?php echo $base; ?>public/modulo1.php" class="btn-modulo">Módulo 1</a>
        <!-- Botón que lleva al Módulo 2 -->
        <a href="<?php echo $base; ?>public/modulo2.php" class="btn-modulo">Módulo 2</a>
        <!-- Botón que lleva al Módulo 3 -->
        <a href="<?php echo $base; ?>public/modulo3.php" class="btn-modulo">Módulo 3</a>
    </nav>
</header>
