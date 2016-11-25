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
define('DB_NAME', 'diabetes_rv');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'upmedia');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'upmedia8039876.,');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'upmedia.crcq0jopmo84.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY', '4bgZy@]?x>>o`a*DY/ITY[ufC8T#uerGU?y`LWBpUSAgL;#7r(zsRZ[N&lC~tz$v');
define('SECURE_AUTH_KEY', 'Z5wzUnzm[#s+IvEY/-8eWP^$.=ReyKRj~Yxb%(?^XLy]9e-w!5oj5D~l)af=m&%k');
define('LOGGED_IN_KEY', '~G,O-4Z!T!n,/}4bba.1^_!uh0XUPl#%gb^>{pOC_s9@8j{3mO:Fs .l}/pe&RDD');
define('NONCE_KEY', '%rpWXPM7Ds,/ ?MyG&>DIdY(u=[Oi)6pFvDSFMl#H^/2KGvd:>9Xhu>o$C^_`no7');
define('AUTH_SALT', '*teJw`K!5a8qI{IG^>/b3xI@K7xu<,vUvO$G$;l+td*wi~q/0E[=ZRV%fd[ n)o1');
define('SECURE_AUTH_SALT', 'yjB^,^M6ozFtkTrq|vKh2tUmvQ}Hxgdg%4!pc#>/D-&X^B[iffi0;.]}7DDla.gF');
define('LOGGED_IN_SALT', '{H<M^];g>e^n(x&2z%[?6AD=jhnf3m;[w*%8do/hg*@GZBb ~m}O{hS:v<2!f9HK');
define('NONCE_SALT', '+C+ujgQ}%90ix;RbpBG]aoIEKM^C?~A{*FI b BxI@gN1/.vzic:~iHYQyDd OPf');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'banmedica_';


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

