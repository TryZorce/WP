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
define( 'DB_NAME', 'cm_portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'EkWpiJ[WXgI}yW![J]+~^uD~c]l!lJzz(44@<n5nZiP@8/1^W=rq]<&pxX+}:4S6' );
define( 'SECURE_AUTH_KEY',  '3A)nU`Q>ho)qkFV6`)u^.95E/_bAx,Wo0-<am#Nmr5}^i|kP{/zdlUs.4l>:27Ok' );
define( 'LOGGED_IN_KEY',    'SX 7$( w~5d`io,T}PZAB=n?l_Fm^09HYO{,%uaK}{{X~1P`X3Qfs;QXi3FeVo~Y' );
define( 'NONCE_KEY',        'X`m.l36,%X&rZKKY,I1cHCy}-j^r_+WSuNa~dN7&Qtw~63`^$Vu7/%GAAQ65:aBg' );
define( 'AUTH_SALT',        'u:+L^P|1q=^W4Juam5ZjqXf]DGSB%k8iwM9?s.O]?@u%rXFWI[A_(Zh~&[s|N@ :' );
define( 'SECURE_AUTH_SALT', 'FW/y,pyu~>.6V_kCOj|Zs>p(P5``{ro$Z1WPYQZh~3-{p=o<n;fcpbR47c6gfE(q' );
define( 'LOGGED_IN_SALT',   'T}n9}~Xy7rZQ; ~w+[M7EVS{o.c e?Q9>M[g!>2m-@ !fMq_@xM(.jl=?LNyOMBb' );
define( 'NONCE_SALT',       '6y4ujuXzc<,v@!GSw6b_k2>F[g!X D% ~~l.]PFZz)gHVs=gUcrUaO =8N-^``(|' );
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
