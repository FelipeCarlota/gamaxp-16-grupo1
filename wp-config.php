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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'u298910472_samba');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'u298910472_samba');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '10472_samba');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '_W%7J tELFh&rxMx}5Uic|;n%yD`z^g`mS^eX/4YI1*$t|uC9b[wm-P|^Fh9hRIf');
define('SECURE_AUTH_KEY',  '~x0-?VqgXC[A[8va-POf_4=|O:.])i:<p~;go^oR_pO]$+QL<X.,cg;DkI$XZg`F');
define('LOGGED_IN_KEY',    'glo>z1-%m3(ezCovU=YiGkePn|,q!.&anwG}_L$~W9IsWg^CL0MRwRI$V]SqAm6I');
define('NONCE_KEY',        'c3%S}lSEJ!e!RYg$,!D,28v=82TU.pkMGU>W[yEn7kqz`T%UeSNbWd7]IK]~MT_-');
define('AUTH_SALT',        'Feetaykf5FOx9Wu#xj{ch?]rBU^[K2}A.Pz2Q?+X`8Y16p7dM/k,HtXmEL|ABd@]');
define('SECURE_AUTH_SALT', 'cEW893eT1udTy ^p]Ud>+SZGW&:j(x}55<]7Q3RA[Qa6l!-tcO huxX0MzuUj>#b');
define('LOGGED_IN_SALT',   '(2nN+t9}[?[rX.rYg4iMp[DVjN.]G%B0_Pzn>r>#-=:t;`RF4sP33-Gj!Nz]>U2y');
define('NONCE_SALT',       '41~.2+4 fbfnzDmWLl{v8o0Ty=MVPdgMzd?t$NsnV#D%Eqqt?yLlQALK%aZmR4?q');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_samba';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
