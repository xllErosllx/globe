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
define('DB_NAME', 'xqvickco_db.globe');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'xqvickco_globeus');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'QhI+wUVIF$Je');

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
define('AUTH_KEY', 'DG&DTFA.j~c7`M/;H7~Yt43s3#dIzh>fIqCaA?itj;!RvcxSUfw?]}y^s^w%i0uA');
define('SECURE_AUTH_KEY', 'l|t9Mt10^G_- Kzh))<jplOB1FTX0);Z._T^1l$$-Rr;4qzPh#2 3 ^My&pN7e$?');
define('LOGGED_IN_KEY', '4t+/]uR2fOWzBADNB@&?:k0&J*%%|~.DiPl1[`oj)JKmF1gv_w$>guZ.Mx[~_}h4');
define('NONCE_KEY', '{?yxL h7p@bz^J|x0x~69Nm^NG!6@7bjw`hQyfz zl$e51eU8#Ay9 sA{?x#%yhf');
define('AUTH_SALT', 'Hp~>,M.YE]GmT8N4+cgC{.|E-|F`eln`Z)8Mxx7v&$N25]GqzC|%[]5l!njJ<CFc');
define('SECURE_AUTH_SALT', '>qBC?60fIYc-t`EV4{NLo~?|UwC[kn`6!,V7 -m&VPwn~ib$gscM(,fQ#VJ`|;j4');
define('LOGGED_IN_SALT', 'hEc6lcZ}k*z:u&5l.o9?~mhB;hGEs4%$1hpK`*{[5kiLQQE;e#EFO8fhPnD(y,[<');
define('NONCE_SALT', 'Z4`5@4>H]zj$tNg9$&4:&2EXGx~XdXC:a-8VYp{E9j_D}1*XTEGgvj),eMV3kUh}');

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

