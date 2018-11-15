<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'erik_blog_db');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l6100.s@31[wQV)6W]Av[i`i$WW*IdSLq-NO273BG)VKo]U*N~yhXmuR)XB.Rm,H');
define('SECURE_AUTH_KEY',  'w>!-;1J9v5pk%J1R4A3Ly`ZoDvY -chP|L<z,zkQ:CSndGT{2z-G @XkJrm0L@uv');
define('LOGGED_IN_KEY',    '2X<$*C(lTTloky?:5bm9:$9<#op&/h_?;Z D}+*eicJ$})MWZpHat9F@tNKeeO^t');
define('NONCE_KEY',        'o5LGt/55};+w`- <cBT+ ^X`N%>R28;<`8&{C#;dLSsD?*t9jgZ1F&1bjhCa:x.=');
define('AUTH_SALT',        'um3%q:$.?)d4|^G/ s4O@j$,)61RJ,5az`yMqa&L4gjPdLW~fbl:wu8JsNgDe-B<');
define('SECURE_AUTH_SALT', 'X0r`/bE+{n>muFMo9QSN.6PXid$N&q#79M$:nV0_)}._eu<~[=NB$~pM9b)^:Xq@');
define('LOGGED_IN_SALT',   'rJ3g,RQE!Q8i%^S?tvWvhPt%)#UTex&f)YN@r9,;0Zk@Nb$tyyt;fjo#K?1>=KPi');
define('NONCE_SALT',       '5)Zg-BMJ8,74f/`8k/Yx>QL*vqf#rll6n3G2H#4fh&c?Y$fTE`Mvmq[Q$G2%vKz[');

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här och börja blogga! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');