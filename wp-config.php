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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'temazero' );

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
define( 'AUTH_KEY',         ' Q[Cb0McP.7IW^wr$=Ah-~fhtdP(Qg4p`fV&}q,;T8It3M{Wr$nx<}~5Wh<O3^/w' );
define( 'SECURE_AUTH_KEY',  '3r<pI4.KRC[ngzN]IJ01X{X>tqU5@qlb>.=6O{m@P0/7K7mupbyQNd$?Ug)*IipA' );
define( 'LOGGED_IN_KEY',    '*Sy1Hn&l^o{-ph~ nwsL)CGjnA)xbHoSa^?:E_hKoWt;~d1xMK{95{|+V|x2mL[x' );
define( 'NONCE_KEY',        'GHOQ3{PS^qK^o~7C-RdCwl:^Y^u$[/g~+xHbs[rdmSQ23obx3[Nd-Il$HPBkZPEt' );
define( 'AUTH_SALT',        ' #yxheP[>$LO@/uA5i`qL*+`jy0FE%^^](!JZ Rzsgh^m;.V~WOwiW/(FL}q1R_z' );
define( 'SECURE_AUTH_SALT', '>3ck3AR2?Z[x0dk|fv5+tu6+@;1)xOk-7{!QY9H1P[S.5,rl,wVsrZR$TUl0$M2k' );
define( 'LOGGED_IN_SALT',   'a)<9:k5h_Cn*7u8VQ;^(MVPmmX}i:Cb td%e;Q<c.O~dc3(*w4O0J?r w7k{u_`u' );
define( 'NONCE_SALT',       'H=PO77&p[L`6r${^6W<KeIVpxm#y;Vz<AZy@Aj#:9J5^sM;lPBcWxD0i^/bG&Uci' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
