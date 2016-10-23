<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'giucridb');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', 'localhost:3309');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BPXmFNh1O~{WD;v$(opGWUU<D)#$i}1Lg1k8+0>$FS+@(<Y04{=#*3jc(X-X]dr&');
define('SECURE_AUTH_KEY',  'j.YX v]A>|+IBQQA7y.]QH4f7voTu%XfC?ZZ8DVpNS0J,}5yjd11vzD;)vlJ[qe:');
define('LOGGED_IN_KEY',    '%8?!?g0W9B28wiPDi57fMaltO>p^Y6XmQGb^o(<MidUQ$fb.}@P,mn@prJRmtyHR');
define('NONCE_KEY',        '@k;>oH/(, 5a`|GshPpUdwx|2:e_6@Y0+ ~%*9@7bb n.fI6X3&G,{B!t_Fm&c:|');
define('AUTH_SALT',        'a!s3CpI44jqr|Bqu8qL 7*eYZae&EY)(9^E; 2^10BTE=}AL@rW9.Qh%l|_iZ^k{');
define('SECURE_AUTH_SALT', 'U@M%A7V:-1OeU0Y}4Q!->Ob/,!fee1Ipi_8L>B<F]vI5MlI*Bnb9w7]lz.R7V6:5');
define('LOGGED_IN_SALT',   'R+1oDcEk}N#4wRWWZ:QAY,gJ9QV+3n28Mf43f .S+k(]L)<4)|jYSl?svMHH)Z.0');
define('NONCE_SALT',       'Pivf0T-WtVOVH|}[@U:@x$1X9qFKTE2xzJNK19B9I@tz+j2L;:IR[]p^pG9U!tnQ');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');