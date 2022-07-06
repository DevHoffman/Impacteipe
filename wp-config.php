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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'impacteipe' );

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
define( 'AUTH_KEY',         'Np/_}[zutw-.iT!9(c--Fx*?;UK{IWONqu;qJ,#zjFL7yr/q6o*C`T>Z[G!u:W}:' );
define( 'SECURE_AUTH_KEY',  '=7hk<ujg(fAo0+w>#hIZn?C0JL7t|<~@|-nz&e=8i,6X%pmSnh1WNpU*%^HkaTGZ' );
define( 'LOGGED_IN_KEY',    'Q:,-GaCX*@;Z59C;XUH4a{w5V{D&,hEh,q*=m)eK0)uI5>Z]H=hqvJ5b-;UBmT,&' );
define( 'NONCE_KEY',        '#Mo9;<}*RPy&GxVbS1Ya[3O;%?&Wj>OLezmrl)#,S<!BJVt bOk4#9$i@cbts>rl' );
define( 'AUTH_SALT',        'W-b54+]{}fWR]c/(]-g/Bp-Af@-Bg~/8:H+s=}QcS1bLqQcp8_:X~mXd9&l%^ZVa' );
define( 'SECURE_AUTH_SALT', 'e,n!HbkSl-1dVOg9H.Ih`hG%CWZ;|MV@Q_#MZ{vR%cv[,r1p:7%X0=?TR6[}&o!y' );
define( 'LOGGED_IN_SALT',   'D`P<NeoUa5NF~H6wp)WDI!rMLnDW>8Bm)[uaFY?9&IB^Du*7%Bs;V3,?n^>o%a8c' );
define( 'NONCE_SALT',       ';Rs]dy^@X9}[dfwC]zgdkV-yMSD?,f-@NeCppU[P_3[4dk@v3F.f:egNNU{}:Sba' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
