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
define( 'DB_NAME', 'site' );

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
define( 'AUTH_KEY',         'X~[_4P*I|vYesl?f[^9Lzhi^HV+:(jo53:n)gW&8JRGXeM=/2gHIc%(r`xS,8sM_' );
define( 'SECURE_AUTH_KEY',  'Eolrxiw|Og<]g~Jmi#XvoZf20f),!()6TwLdzx(8YN0|~6`[:=n_2CCQ:65*US[r' );
define( 'LOGGED_IN_KEY',    'HX J,*O4vMOnqo|KS433 9i*t<7?7O4IXesIsQboww*IHzCdM5rMYIM-a?2q-$R1' );
define( 'NONCE_KEY',        'b~ZT8wBlW4Wq yzsp|0g`-.ln8?-%43F~){sj%[i^)khE `~DE=@-;dp{6rQc;Uy' );
define( 'AUTH_SALT',        'kOB) T::HB|3Xm<mR1qWK.jo:IyGl~g%V*r2vyRnKkCdj;pE>TnCQ W7 1JSZq@9' );
define( 'SECURE_AUTH_SALT', 'Ix#ASQ5!Xc)]@Pi^99qerSVQ5)kd=ui0U;VYef(2^|u+=}k-k>E?N[kF_&RpikQ>' );
define( 'LOGGED_IN_SALT',   'mN Yd!z4}aO5/HhxQS6R*d$y*r@}I1A[psHs3Z=Fn33T:j[b!6++KzV<A>$b4aY-' );
define( 'NONCE_SALT',       '8<[b.5MWGC}R(7#[kdp5&&J82H3GY>XbKf8p$]=R6(sV#0a<:]hzG:;x;4~*PZ?0' );

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
