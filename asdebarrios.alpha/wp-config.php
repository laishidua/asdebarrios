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
define('DB_NAME', 'asdebarrios');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'laishidua');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'mysql');

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
 * TODO CHANGE
 */
define('AUTH_KEY', 'Yu,u;/=jdY-:i}PVAE` (zP{t%lKVa!==c() -/u}<`D!clDdDyb4zn4`P9(+|lm');
define('SECURE_AUTH_KEY', 'KYh ,@*.s%M/^F){9L1eh$xG7|Cc4For+%nrGAB6igBkS%+<}1)og,dVzp>Li/z ');
define('LOGGED_IN_KEY', 'o;9aaXilK]~C)h2Xb8_LZ8JpQoUnOit)zO[SH*xIj]C>mbwblCc=i^kmPBm]<|P;');
define('NONCE_KEY', 'T>l!q8)Fa:~5SqSPBB&t*q]C17q|u&7%l({?sra#pC--PuJN8:%^,$iZ=;:,+9 D');
define('AUTH_SALT', '{+&z^14s&r1XcT7jnhP6)Yb,=d9,JDbsITm1<|Nt-bds+s.k8]f+->D$+&/QQyVr');
define('SECURE_AUTH_SALT', 'b#(,>.-xFw{lt4zaIL/-9/^arem3*|m3$q,%a^mq}|Xpl}EF]va:isr26&CiuDe4');
define('LOGGED_IN_SALT', 'X$aV4AN2{cVdk-xKNv&wl5#P}%e2WOWMiFr|z@JKVX04:8w9pDFgj@QwzHzH#^2z');
define('NONCE_SALT', 'YcgcFl7{/c/`>>-jHu6GjW[HfEu2bXzXc7#|E[0Qo?+Xl.E )l~?W}`bj}`Ce)Vi');

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
 * TODO CHANGE
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

