<?php
// Importa la clase Request del espacio de nombres Illuminate\Http\Request
use Illuminate\Http\Request;

// Define una constante llamada LARAVEL_START y establece su valor como el tiempo actual en milisegundos
define('LARAVEL_START', microtime(true));

// Determina si la aplicación está en modo de mantenimiento
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance; // Incluye el archivo de mantenimiento si existe
}

// Registra el autoloader de Composer para cargar automáticamente las clases necesarias
require __DIR__.'/../vendor/autoload.php';

// Inicia Laravel y maneja la solicitud
(require_once __DIR__.'/../bootstrap/app.php')->handleRequest(Request::capture());
