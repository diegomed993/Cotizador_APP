<?php

//Saber si estamos en un servidor local
define('IS_LOCAL',in_array($_SERVER['REMOTE_ADDR'],['127.0.0.1' , '::1']));
//Definir la url de pagina en produccion
define('URL', (IS_LOCAL ? 'http://127.0.0.1/Cotizador/' : 'URL Pagina en produccion'));

//Rutas de carpetas
define('DS', DIRECTORY_SEPARATOR);// '\'
define('ROOT', getcwd().DS); // Directorio donde esta ubicado + \
define('APP', ROOT.'App'.DS);
define('ASSETS', ROOT.'Assets'.DS);
define('TEMPLATES', ROOT.'Templates'.DS);
define('INCLUDES', TEMPLATES.'includes'.DS);
define('MODULES', TEMPLATES.'modules'.DS);
define('VIEWS', TEMPLATES.'views'.DS);
define('UPLOADS', ROOT.'uploads'.DS);

//Rutas URL para estilos y scrips

define('CSS' , URL.'Assets/css');
define('IMG' , URL.'Assets/img');
define('JS' , URL.'Assets/js');

//Cargar funciones

require_once APP.'functions.php';


?>