<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'web-blog');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '#FPmcOfsZ<5]jE7)kS$L&LbrtB)%z?W<v9E(c`v7;,9L6hB&B7`#j}Em?`QOxphF');
define('SECURE_AUTH_KEY', 'sj(7?Id;M=2!gg45&:7eoR XyBjUQ`24 %32K>k aUMlkIMp%(MV!hK.-^~01bmX');
define('LOGGED_IN_KEY', '7NulM}(lo;oo!*8=Rmt-2y<G5q+-3l;fQjT#)X]k/:n(v.747-PbKwU-uJtHi+]D');
define('NONCE_KEY', 'rK&ND=me&4}RSFIm,yj{$-%HyH3MZop:db(%^R!KE}9p,@xNucll;S{EY?(C)C[[');
define('AUTH_SALT', '-0Y-6Mg;=|JK$wxW&?rrAd8QmPx`r2:0kIrxAD10Jcn68^-U-b>V3RndYHduru>X');
define('SECURE_AUTH_SALT', 'VS8=8OjAg?7WXyMwL6S[9O}WNu}D|OZ_/)JhgD~}$O2Dfxv<;BP7x(G@-`H~{d6:');
define('LOGGED_IN_SALT', 'Qa5vdR<8-Mgo7n{%FL2`SLE??HKU~E-qG2PLT~px8*~{0glhZ@WQb6OXExh+-ZI,');
define('NONCE_SALT', ')t_arY7dQ`#}%9{~8!Fw@m@{%G)X#o{u]nS0E0w`8yxc ECSW/x JTS{.m/hD;yI');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

