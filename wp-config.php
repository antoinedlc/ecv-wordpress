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
define( 'DB_NAME', 'ecv-wordpress.local' );

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
define( 'AUTH_KEY',         'D=N[Sg`Dv{vS6TcH~gcD31.8?_{,fL#.wha]d&8(q,P _ls5oL7b4`S}R?kv):)m' );
define( 'SECURE_AUTH_KEY',  '>+Ffl%xvg_N|Ig~+%kWWB`6%?% )fNHj^4g|.zGudXja8`U|<H(.`zhi#K{0R93z' );
define( 'LOGGED_IN_KEY',    ' <lsdZM~{{DaL G}$#Ty@wzds5q]InY(CLAPRB,@F-(Z-8@;rKri[-xp50,m{86g' );
define( 'NONCE_KEY',        '?UO^0g>`g,SZGC RBsDqL<AFW)ACr,AneL5f#SYcvf> F-_n|Ib#R18a3D.5A._5' );
define( 'AUTH_SALT',        'M?b]tDL3*.:f{$_>`NrG?*:Q!>q 8@{RS[>p]+-R[O)fb@Qn@AWXQk.2oR hQK(C' );
define( 'SECURE_AUTH_SALT', 'gu9%@,ryLEJ+BkVK&B:x2X0hI(HYbXKy<EYX!6xxmm/)8nwn9T<@CM{TDkmPE&E5' );
define( 'LOGGED_IN_SALT',   '2a|OyG9md7gvgD/1%>+(qj7EFIOsWr]YHXY*WMy4KWqpG4!c 8S5`E>ql8J@6sp#' );
define( 'NONCE_SALT',       's=bAv9RW9hW^dtsV!BUnfrj7IK}(h# I*j&ohM@0jRm%>gIWJ/wReLIkm A;dKk6' );
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
