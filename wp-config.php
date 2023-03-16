<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'plugin' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5EceDVPvRC*W$pNHLUpqkpULFvgK9=zP:F@GlAodQWImOy9}Dz!XSeOht8xoW-&}' );
define( 'SECURE_AUTH_KEY',  '9d*uu;ES8@hMi3O8KpQ]Q6lTelO`qB3V+].U/$(igtO}oztfcfjelAwQ<n9SFqTu' );
define( 'LOGGED_IN_KEY',    'Kro)kb-sMm$kR+.!CT=f&jZ7@E_v%)n^KGG=ob5osY6vw800.-cB:OQ(oJj#W4Y-' );
define( 'NONCE_KEY',        'SBuaq`{Th6gCF.YbPD(C!W`~p>23].J5g#beXv,^4PCW)C5w6kAw_m0+;OlR:>^<' );
define( 'AUTH_SALT',        'Gf^Dd|U88BBKN$)-=-b|&R}~::wt$d<dtQn:012KL`u $lt-KKKU5TttYVzYz9!8' );
define( 'SECURE_AUTH_SALT', 'EM).g:`8s$|co~ r3?Trp:`f-x{f64l*;)[ouxr:;D--fD]Q8z|z3(*!%%?%xuc8' );
define( 'LOGGED_IN_SALT',   'o5#L-Ywlp$g0H} `wwI9USZUJ|Z,r`UM@6|uWI&%Z!9F;2pUX4j@mnKmdn}[s%o,' );
define( 'NONCE_SALT',       '>C]NVCkHEjY0nO0AFDWh)1gvq[/rin85~s(lbRMFc%gtqtJ>XSioJOL`VoMjr<K/' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
