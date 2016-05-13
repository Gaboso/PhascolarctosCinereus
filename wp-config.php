<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'cursowp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'usbw');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z94C.2d~IXk,RIQ(r%GUdf%`4oN_|mGMv%-=0.5weRL39uv%n +.q(D?2JL:zl-W');
define('SECURE_AUTH_KEY',  '8-/Qr`$)1&g>zj.j)Zb^[@m(e2tT.ekg*Z)+oQYbqg2N25F|OG7SUyBD}q|SRyzC');
define('LOGGED_IN_KEY',    '1OeE8a`l*b{94&[whPn:{J/~fJ?0N::VU ]^[aMhI8sdHMgX94z1=PX%ekUmf/P%');
define('NONCE_KEY',        '3wkW0K2-TLW6!)yINK#W4H3SeE?(va(]T.*W_%jJ/JeMM1#Xz^LmP_t+4pHwjt^>');
define('AUTH_SALT',        '6XTxw<B7Fead=Qy92kG4L,3VB*5aCrYKX_=P(:RS0=C} VX8Pz%1S=Z1iGvE+8V0');
define('SECURE_AUTH_SALT', 'e6;8JnwM3Dc}j<W9(?td~ {FuF_em|p$xcP<R[v#qhvS?:mS|I/.Tz-EFz4z v;r');
define('LOGGED_IN_SALT',   ',P]F*jqg}#5g(.h(4P+7<SsMIoI^IIwUh7+HZ0B084D&o2e06G|3vfO)XqOrGQ`(');
define('NONCE_SALT',       '^^yltMhNONS(kHrCx]!Lko3o~@alU[fD&5LQXVoTBIwF48A[v`!{Gnlc&gJ=F@Sx');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
