<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpdb_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dC9jzQ%[I8Xb&0$*w5~]!:v_M%IC4XaZ^/;p%fvQtdeBY9&.N4=R+4NXrsgKz@np' );
define( 'SECURE_AUTH_KEY',  'TY<gc$e uhiCs-+>ubx38mAmRw$%M Xo&,tfIj**EAM$#:B_H+X+)Q};sdJb&7X=' );
define( 'LOGGED_IN_KEY',    '(-P,?Ew13Q%jb9]%v~ni9~%WOH]7x]:gl?N?.^#}g8im0$ogNQf9oe Q0O2yXCEH' );
define( 'NONCE_KEY',        'k`}qjj+J+6{oOWx8P2R-2{U};bxH|Ees7S4a6?lHo>k%t^FA E8`Ij:S Ev/gLB]' );
define( 'AUTH_SALT',        'P>JK5]629e8=xg~[tI<dg;g8}a-v|uG tHRB+{QTT?rva)Sz)qr#Sq[WXN<pr%wa' );
define( 'SECURE_AUTH_SALT', '5RVpb|gON3;t%2WXV<sumNP2D:S}S8m%fxduqTmM5KNY2:$U,/2{@Qu5Qkh^o5hH' );
define( 'LOGGED_IN_SALT',   'vWgfXNU@W/wg}{,& [BYrSW,1.um2[7xVN-tq}#>SuCOQ#w&fy2OHS!f?Bl33kS9' );
define( 'NONCE_SALT',       '6t]a0Af<n^ybtuOHA}+-T.7+s1~Lc;;,?]T6>,Dt)vR`-)!h9>TD+{?:JXab+!O^' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
