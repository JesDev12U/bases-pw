<?php
//Redefinir directorios de inclusion de archivos PHP
set_include_path(
	get_include_path() .
		PATH_SEPARATOR . realpath(__DIR__ . '/..') . '/_model' .
		PATH_SEPARATOR . realpath(__DIR__ . '/..') . '/_controller' .
		PATH_SEPARATOR . realpath(__DIR__ . '/..') . '/classes' .
		PATH_SEPARATOR . realpath(__DIR__ . '/..') . '/classes/jesdev12u'
);

define("SITE_URL", "http://localhost/project/");
define("RUTA_DEFAULT", "producto");
define("DB_HOST", "127.0.0.1");
define("DB_BASE", "tienda");
define("DB_USR", "root");
define("DB_PASS", "Str0ngPassword!");
