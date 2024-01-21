<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki_studio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@,?*x)bkxON:RD1:Ww0_=mP(jV&c.^j)!znCF-iNWTSa2y,8ZZp9x>6qsFSC&/{!' );
define( 'SECURE_AUTH_KEY',  'kkU+Zy}yiE&W9l+=Ac&:  {u%B2IJllf2EEiI9|m.a0`mZTT%rgi71I]I8e 8#Lp' );
define( 'LOGGED_IN_KEY',    'LWW5(f_=VV*{]Y_gm9a[dBjrC!)e#p)nHW2CAJlMJr)5gB|6A513N}(+}yWFRJd5' );
define( 'NONCE_KEY',        'IY=5z] XQ6mamAPJ92x<Ss*}Q(GC@`4ZZ151?8>2W.bLtZ?1>z4LhclCv*^}zMN+' );
define( 'AUTH_SALT',        ']>Xy3y7w:(cRRZQkk%cT6JDsU[g3v;TJl1!YSRm^),cwh}$K qEiWl5[xQ+*m#^!' );
define( 'SECURE_AUTH_SALT', 'Fn$-a%;#~6#%1c~,52,.BX>mMTu3YE= vKAV;t&d)_{13j2Qt44W%BZf_rdM.hCi' );
define( 'LOGGED_IN_SALT',   '+V_}|6|:$,2[D60I58L=Sva!,#|<m|/T#**No0@g/qHV.:e~zXvxZ:Vwvt{ _KQo' );
define( 'NONCE_SALT',       '%2ry:3GI9/BzM= $U?rA@#tf6;0s;E96svLbdvZmpICkfF|FPdO=2_$`l6LX#H}E' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
