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
define( 'DB_NAME', 'jardin' );

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
define( 'AUTH_KEY',         'E>t_0Eggq:0*><02a=RyB$Q/c=Zah?Du1/L/qCR$PE61V-*5aeM%v0(#XR;88k1h' );
define( 'SECURE_AUTH_KEY',  'y<DV, {vrmcY+;q:J0EBu%mnL1[n8oWU7Vx48HAFCk~dKFMujA%r5mn9wE2V~ux%' );
define( 'LOGGED_IN_KEY',    'IMp^(,!AdeT)Im9#4KEVf>@ycMF8I|D~6fJifNS98b? }p93OmsKfCcsnU|%w:y-' );
define( 'NONCE_KEY',        'Ii<1k4NccCL^{klbM~t0>,out?Be<%Ch<,gGX|RmqL:XvU0Iq%4~Os.|Ib|P#)Nd' );
define( 'AUTH_SALT',        '8L6$Cf/:eIpfnrsX!8a<;W1[k-@~l9|x4>&n2mjt_]?IYDcxnHMJj%GKw }h({8&' );
define( 'SECURE_AUTH_SALT', '.X0Au( bA}vCIgptILq+A8.AA,Y:n`/y&<?mtLa7YZ]<Ngr%~|mliw;uD.ziOi_0' );
define( 'LOGGED_IN_SALT',   'kK]6.8!IfBo;a`fUWvx[OIdfDT@iz-?L9;3|aU^K*8*lq6{K-L{n*<tN3/Mat[FD' );
define( 'NONCE_SALT',       '{18eky37,:G4yTE?$$gs_(X!bS}D]fZ`I4j4bAorm`tcz^dq/bCC|gO:EXm}q/:f' );
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
