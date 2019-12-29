<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'wpassword' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HAew$}(vwL]wc$W~hMXIbyegCm9Nt|_4&SR$V_^z/|+<Pa1g]MvE8Kw~NoG|2xS7' );
define( 'SECURE_AUTH_KEY',  '}Pw4[!rB!?^JY(*)9?_d^(4~,Au^Hd-SvR{rN=nZ!^)MFZNS(5bf}S;=Pdi^{P5p' );
define( 'LOGGED_IN_KEY',    'xb=9u89|<ew4YDJt9/{_Cb~URYj%FSG:>GSEx%E3W~?mPxHY7rDM7.qutieWr GO' );
define( 'NONCE_KEY',        '}ntn+RW.n]/G/5AKc9]{l-^pxS&KiygW8/<f]:mO1NEKD`0x%lH76`%eKuLySXU;' );
define( 'AUTH_SALT',        'dxj{M0@V7dIfUuUAO5P../MzTbJ#OJm!Au_B^jhJF3Mt%$a+N.m*Lm.?T*codTTd' );
define( 'SECURE_AUTH_SALT', '%Ofj1Q)oZy;ZuGZ>+VHHi~m3Lv3bZ(S-b}:]qrVL?@Ib$2P{,I*7Mmw7. m;W0oL' );
define( 'LOGGED_IN_SALT',   '?~BhNTv|{C5]O|-%>juvxJQYb<&z}X7nER~]yy1}}v+c}L`-s+Z1gp|c0YU]mSw1' );
define( 'NONCE_SALT',       '%r*8J},XuAHx^%!P>DLaxI,~1[zYX|[u:U|R9m() gWX~@JS;%L|!.yQBzYh4gFT' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

